<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Relations\HasMany;
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
     * @param Request $request
     * @param  int $projectId
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $projectId)
    {
        $project = Project::find($projectId);
        $monthly=$request->has('monthly')?1:0;
        return view('Admin.projectWeeklyReportCreate', ['project' => $project, 'monthly' => $monthly]);
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
            if (isset($data['schedule'])) {
                $data['schedule'] = uploadFile(['file' => $data['schedule'], 'path' => $this->_path]);
            }
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
     * @param $projectId
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($projectId, $id)
    {
        $report = Project_weekly_report::find($id);
        return view('Admin.projectWeeklyReportEdit', ['report' => $report, 'projectId' => $projectId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $projectId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $projectId, $id)
    {
        $data = $request->all();
        $report = Project_weekly_report::find($id);
        try {
            $report->update($data);
            isset($data['project_test']) ? $this->updateHasMany($report->tests(), $data['project_test']) : null;
            isset($data['project_request']) ? $this->updateHasMany($report->requests(), $data['project_request']) : null;
            isset($data['project_submittal']) ? $this->updateHasMany($report->submittals(), $data['project_submittal']) : null;
            isset($data['project_files']) ? $this->updateHasMany($report->files(), $data['project_files']) : null;
            sync($report, 'contractorTeam', isset($data['contractor_team']) ? $data['contractor_team'] : []);
            sync($report, 'tools', isset($data['contractor_tool']) ? $data['contractor_tool'] : []);
            isset($data['report_additional']) ? $report->additionalInfo()->update($data['report_additional']) : null;
            return redirect($this->getUrl($projectId))->with('success', 'Report has been created');


        } catch (RuntimeException $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
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

    private function updateHasMany(HasMany $hasMany, array $update)
    {
        $hasMany->delete();
        $hasMany->createMany($update);
    }
}
