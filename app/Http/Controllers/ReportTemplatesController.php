<?php

namespace App\Http\Controllers;

use App\Models\CustomField;
use App\Models\ReportTemplate;
use Illuminate\Http\Request;

class ReportTemplatesController extends Controller
{
    public function store(Request $request)
    {
        $this->authorize('reports.view');

        $request->validate((new ReportTemplate)->getRules());

        $report = $request->user()->reportTemplates()->create([
            'name' => $request->get('name'),
            'options' => $request->except(['_token', 'name']),
        ]);
//        This is for error handling in creation. This probably is the wrong spot, and syntax is off, but i don't wanna forget
//        if(is_null($report->name)) {
//            return redirect()->route('reports/custom')->with('error', trans('reports/message.create.needs_title'));
//        }
//        elseif(exists($report->name)) {
//            return redirect()->route('reports/custom')->with('error', trans('reports/message.create.duplicate'));
//        }

        return redirect()->route('reports/custom', ['report' => $report->id]);
    }

    public function edit(Request $request, $reportId)
    {
        $report = ReportTemplate::findOrFail($reportId);

        return view('reports/custom', [
            'customfields' => CustomField::get(),
            'reportTemplate' => $report,
        ]);
    }

    public function update(Request $request)
    {
        $this->authorize('update',ReportTemplate::class);

        if(is_null($reportid = ReportTemplate::find($request)))
        {
            return redirect()->route('reports/custom');
        }

        $request->validate()->report->id->getRules();


        $report = $request->user()->reportTemplates()->edit([
            'name' => $request->get('name'),
            'options' => $request->except(['token','name']),
        ]);

        return redirect()->route('reports/custom', ['report' => $report->id]);

    }
}
