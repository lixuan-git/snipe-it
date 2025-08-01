<?php

namespace App\Http\Controllers\Users;

use App\Helpers\StorageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\Models\Actionlog;
use App\Models\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Storage;

class UserFilesController extends Controller
{
    /**
     * Return JSON response with a list of user details for the getIndex() view.
     *
     * @param UploadFileRequest $request
     * @param int $userId
     * @return string JSON
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *@author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v1.6]
     */
    public function store(UploadFileRequest $request, User $user)
    {
        $this->authorize('update', $user);

        if ($request->hasFile('file')) {
            if (! Storage::exists('private_uploads/users')) {
                Storage::makeDirectory('private_uploads/users', 775);
            }

            foreach ($request->file('file') as $file) {
                $file_name = $request->handleFile('private_uploads/users/','user-'.$user->id, $file);
                $user->logUpload($file_name, $request->get('notes'));
            }

            return redirect()->back()->withFragment('files')->with('success', trans('admin/users/message.upload.success'));
        }

        return redirect()->back()->with('error', trans('admin/users/message.upload.nofiles'));


    }

    /**
     * Delete file
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v1.6]
     * @param  int $userId
     * @param  int $fileId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy($userId = null, $fileId = null)
    {
        if ($user = User::find($userId)) {

            $this->authorize('delete', $user);
            $rel_path = 'private_uploads/users';


            if ($log = Actionlog::find($fileId)) {
                $filename = $log->filename;
                $log->delete();
                
                if (Storage::exists($rel_path.'/'.$filename)) {
                    Storage::delete($rel_path.'/'.$filename);
                    return redirect()->back()->withFragment('files')->with('success', trans('admin/users/message.deletefile.success'));
                }

            }

            // The log record doesn't exist somehow
            return redirect()->back()->with('success', trans('admin/users/message.deletefile.success'));
        }

        return redirect()->route('users.index')->with('error', trans('admin/users/message.user_not_found', ['id' => $userId]));

    }

    /**
     * Display/download the uploaded file
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v1.6]
     * @param  int $userId
     * @param  int $fileId
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(User $user, $fileId = null)
    {


        if (empty($fileId)) {
            return redirect()->route('users.show')->with('error', 'Invalid file request');
        }

            $this->authorize('view', $user);

        if ($log = Actionlog::whereNotNull('filename')->where('item_id', $user->id)->find($fileId)) {
            $file = 'private_uploads/users/'.$log->filename;

            try {
                return StorageHelper::showOrDownloadFile($file, $log->filename);
            } catch (\Exception $e) {
                return redirect()->route('users.show', ['user' => $user])->with('error',  trans('general.file_not_found'));
            }
        }

        // The log record doesn't exist somehow
        return redirect()->route('users.show', ['user' => $user])->with('error',  trans('general.log_record_not_found'));

    }

}
