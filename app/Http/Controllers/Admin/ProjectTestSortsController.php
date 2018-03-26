<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project_test_sort;
use Exception;

class ProjectTestSortsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorts = Project_test_sort::all();
        return view('Admin.projectTestSortsIndex', ['sorts' => $sorts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.projectTestSortsCreate');
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
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        try {
            Project_test_sort::create($data);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('test-sorts.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('test-sorts.index')->with('success', "Test has been inserted");


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
        $sort = Project_test_sort::find($id);
        return view('Admin.projectTestSortsEdit', ['sort' => $sort]);
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
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        $sort = Project_test_sort::find($id);
        try {
            $sort->update($data);

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('test-sorts.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('test-sorts.index')->with('success', "Test has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sort = Project_test_sort::find($id);
        try {
            $sort->delete();

        } catch (Exception $e) {
            return redirect()->route('test-sorts.index')->with('danger', $e->getMessage());
        }
        return redirect()->route('test-sorts.index')->with('success', "Test has been erased");
    }

    public function getRelated(Request $request)
    {
        $sorts = Project_test_sort::where('related_to', $request->related_to)->get();
        foreach ($sorts as $sort) {
            echo '<option value="' . $sort->id . '">' . $sort->name . '</option>';
        }
    }
}
