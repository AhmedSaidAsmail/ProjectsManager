<?php
namespace App\Http\Controllers\Engineer;

use App\Models\Engineer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RuntimeException;


class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->guard('engineer')->user();
        $projects = $this->getallProjects($user);
        return view('Engineer.projectsIndex', ['projects' => $projects]);

    }

    /**
     * @param Engineer $user
     * @return \Illuminate\Support\Collection
     */

    private function getallProjects(Engineer $user)
    {
        $inContractorCrew = $user->contractorCrew;
        $inOwnerCrew = $user->ownerCrew;
        $inConsultantCrew = $user->consultantCrew;
        $projects = $this->collectAllProjects([$inContractorCrew, $inConsultantCrew, $inOwnerCrew]);
        return $projects;
    }

    /**
     * @param array $allIn
     * @return \Illuminate\Support\Collection
     */

    private function collectAllProjects(array $allIn)
    {
        $projects = [];
        foreach ($allIn as $in) {

            foreach ($in as $crew) {
                $projects[$crew->project->id] = $crew->project;
            }

        }
        return collect($projects);
    }

    /**
     * @param $id
     * @return mixed
     */

    private function returnProject($id)
    {
        $user = auth()->guard('engineer')->user();
        $projects = $this->getallProjects($user);
        if (array_key_exists($id, $projects->all())) {
            return $projects->get($id);
        }
        throw new RuntimeException("You don't have access to view this project");
    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $project = $this->returnProject($id);
            return view('Engineer.projectsShow', ['project' => $project]);
        } catch (RuntimeException $e) {
            return $e->getMessage();
        }

    }

}