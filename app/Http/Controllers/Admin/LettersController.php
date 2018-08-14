<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectLetters;
use App\Src\Filter;

class LettersController extends Controller
{
    private $_path = "/documents/projects/letters/";

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $filter = new Filter($request, 'letters');
            return view('Admin.Layouts.AjaxResponse.projectLetters', ['letters' => $filter->results()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required|integer',
            'sort' => 'required',
            'number' => 'integer|required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'required|file'
        ]);
        $data = $request->all();

        try {
            $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            ProjectLetters::create($data);
            consultantEngineersNotification($data['project_id']);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Letters has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter = ProjectLetters::find($id);
        return view('ProjectItems.letters', ['letter' => $letter]);
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
        $this->validate($request, [
            'project_id' => 'required|integer',
            'sort' => 'required',
            'number' => 'integer|required',
            'related_item' => 'required',
            'description' => 'required',
            'document' => 'file'
        ]);
        $letter = ProjectLetters::find($id);
        $data = $request->all();
        try {
            if (isset($data['document']) && !is_null($data['document'])) {
                $data['document'] = uploadFile(['file' => $data['document'], 'path' => $this->_path]);
            }
            $letter->update($data);
        } catch (Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Letter has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter = ProjectLetters::find($id);
        $letter->delete();
        return redirect()->back();
    }
}
