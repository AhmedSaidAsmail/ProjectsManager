<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Project_weekly_report;
use RuntimeException;
use Auth;

class ProjectWeeklyController extends Controller
{
    private $_path = "/documents/projects/w_report/";

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
            $data['schedule'] = uploadFile(['file' => $data['schedule'], 'path' => $this->_path]);
            $report = Project_weekly_report::create($data);
            isset($data['contractor_team']) ? $report->contractorTeam()->createMany($data['contractor_team']) : null;
            isset($data['contractor_tool']) ? $report->tools()->createMany($data['contractor_tool']) : null;
            isset($data['project_test']) ? $report->tests()->createMany($data['project_test']) : null;
            isset($data['project_request']) ? $report->requests()->createMany($data['project_request']) : null;
            isset($data['project_submittal']) ? $report->submittals()->createMany($data['project_submittal']) : null;
            isset($data['project_files']) ? $report->files()->createMany($data['project_files']) : null;
            isset($data['report_additional']) ? $report->additionalInfo()->create($data['report_additional']) : null;
            return redirect($this->getUrl($projectId))->with('success', 'Report has been created');
            //return "done";

        } catch (RuntimeException $e) {
            return redirect()->back()->with('fail', $e->getMessage());
            // return $e->getMessage();
        }
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

    /**
     * @param $project_id
     * @return null|string
     */

    private function getUrl($project_id)
    {
        $url = null;
        switch (true) {
            case Auth::guard('web')->check():
                $url = route('projects.show', ['id' => $project_id]);
                break;
            case Auth::guard('contractor')->check():
                $url = route('contractor-projects.show', ['id' => $project_id]);
                break;
            case Auth::guard('owner')->check():
                $url = route('owner-projects.show', ['id' => $project_id]);
                break;
            case Auth::guard('engineer')->check():
                $url = route('projects.show', ['id' => $project_id]);
                break;
            default :
                $url = route('engineer-projects.show', ['id' => $project_id]);

        }
        return $url;
    }
}
