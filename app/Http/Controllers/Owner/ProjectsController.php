<?php
namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->guard('owner')->user()->projects;
        return view('Owner.projectsIndex', ['projects' => $projects]);

    }

    /**
     * @param integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = auth()->guard('owner')->user()->project($id);
        return view('Owner.projectsShow', ['project' => $project]);
    }

}