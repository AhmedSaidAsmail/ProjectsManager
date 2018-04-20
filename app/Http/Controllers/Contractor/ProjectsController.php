<?php
namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->guard('contractor')->user()->projects;
        return view('Contractor.projectsIndex', ['projects' => $projects]);

    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = auth()->guard('contractor')->user()->project($id);
        return view('Contractor.projectsShow', ['project' => $project]);
    }

}