<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_weekly_report;

class ProjectWeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $projectId
     * @return \Illuminate\Http\Response
     */
    public function create($projectId)
    {
        $project = Project::find($projectId);
        return view('Admin.projectWeeklyReportCreate', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $projectId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $projectId)
    {
        $data = $request->all();
        $data['project_id'] = $projectId;
        try {
            Project_weekly_report::create($data);
            return redirect()->route('projects.show', ['id' => $projectId])->with('success', 'Report has been created');

        } catch (\Exception $e) {
            return redirect()->route('projects.show', ['id' => $projectId])->with('fail', $e->getMessage());
        }

        //return view('Admin.projectWeeklyReportPDF',['project'=>$project,'request'=>$request]);
//        $pdf=PDF::LoadView('Admin.projectWeeklyReportPDF',['project'=>$project,'request'=>$request]);
//        return $pdf->download('test.pdf');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  int $projectId
     * @return \Illuminate\Http\Response
     */
    public function show($projectId, $id)
    {
        $project = Project::find($projectId);
        $report = Project_weekly_report::find($id);
        return view('Admin.projectWeeklyReportPDF', ['project' => $project, 'report' => $report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
