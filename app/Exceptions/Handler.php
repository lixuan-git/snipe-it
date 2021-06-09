<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Helpers\Helper;
use Illuminate\Validation\ValidationException;
use Log;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
        \Intervention\Image\Exception\NotSupportedException::class,
        \Laravel\Passport\Exceptions\OAuthServerException::class
    ];




    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $e
     * @return void
     */
    public function report(Throwable $e)
    {
        if ($this->shouldReport($e)) {
            \Log::error($e);
            return parent::report($e);
        }
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $e)
    {


        // CSRF token mismatch error
        if ($e instanceof \Illuminate\Session\TokenMismatchException) {
            return redirect()->back()->with('error', trans('general.token_expired'));
        }


        // Handle Ajax requests that fail because the model doesn't exist
        if ($request->ajax() || $request->wantsJson()) {

            if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                $className = last(explode('\\', $e->getModel()));
                return response()->json(Helper::formatStandardApiResponse('error', null, $className . ' not found'), 200);
            }

            if ($this->isHttpException($e)) {

                $statusCode = $e->getStatusCode();

                switch ($e->getStatusCode()) {
                    case '404':
                       return response()->json(Helper::formatStandardApiResponse('error', null, $statusCode . ' endpoint not found'), 404);
                    case '405':
                        return response()->json(Helper::formatStandardApiResponse('error', null, 'Method not allowed'), 405);
                    default:
                        return response()->json(Helper::formatStandardApiResponse('error', null, $statusCode), 405);

                }
            }
        }


        if ($this->isHttpException($e) && (isset($statusCode)) && ($statusCode == '404' )) {
            return response()->view('layouts/basic', [
                'content' => view('errors/404')
            ],$statusCode);
        }

        return parent::render($request, $e);

    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {

        \Log::debug('API thinks it is not authenticated but runs out of memory if I try to dd() the request.');
        \Log::debug('(This is happening in the ExceptionHandler, unauthenticated method))');

        if ($request->isJson() || ($request->wantsJson())) {
            return response()->json(['error' => 'API is Unauthorized or unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }

    /**
     * Convert a validation exception into a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Validation\ValidationException  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json(Helper::formatStandardApiResponse('error', null, $exception->errors(), 400));
    }
}
