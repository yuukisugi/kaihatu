<?php

namespace App\Http\Controllers;

use App\Mail\Reported;
use App\Rules\HasReportTarget;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\In;

class ReportController extends Controller
{
    public function create(Request $request) {

        $report_categories = \App\ReportCategory::get();
        return view('report.create')->with([
            'id' => $request->id,
            'target' => $request->target,
            'report_categories' => $report_categories
        ]);

    }

    public function store(Request $request) {

        $validated_data = $request->validate([
            'id' => ['required', new HasReportTarget()],
            'target' => ['required'],
            'report_category_id' => ['required', 'exists:report_categories,id'],
            'comment' => ['required_if:report_category_id,999']
        ]);

        \Mail::send(new Reported($validated_data));

        return ['result' => true];

    }
}