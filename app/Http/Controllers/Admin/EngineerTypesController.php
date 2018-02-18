<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Engineer_type;
use Exception;

class EngineerTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Engineer_type::all();
        return view('Admin.engineerTypesIndex', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.engineerTypesCreate');
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
            'type' => 'required'
        ]);
        $data = $request->all();
        try {
            $type = Engineer_type::create($data);
            $type->roles()->create($data);
        } catch (Exception $e) {
            return redirect()->back()->with('failure', $e->getMessage());

        }
        return redirect()->route('engineer-types.index')->with('success', 'the group has been created');
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
        $type = Engineer_type::find($id);
        return view('Admin.engineerTypesEdit', ['type' => $type]);
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
        $type = Engineer_type::find($id);
        $this->validate($request, [
            'type' => 'required'
        ]);
        $data = $request->all();
        try {
            $type->update(['type' => $data['type']]);
            $type->roles()->update([
                'add' => $this->setIndex($data,'add'),
                'edit' => $this->setIndex($data,'edit'),
                'delete' => $this->setIndex($data,'delete')
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('failure',$e->getMessage());

        }
        return redirect()->route('engineer-types.index')->with('success', 'the group has been updated');
    }

    private function setIndex(array $data,$index)
    {
        return array_key_exists($index,$data) ? $data[$index] : 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Engineer_type::find($id);
        $type->delete();
        return redirect()->route('engineer-types.index')->with('danger', 'the group has been deleted');

    }
}
