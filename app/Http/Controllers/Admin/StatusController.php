<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['statuses'] = Status::orderBy('title', 'asc')->paginate(6);

        return view('admin.status.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->validate($request, [
            'name' => 'required|max:255',
        ])) {

            $data = [];
            $data['title'] = $request->name;

            Status::create($data);

            return redirect()->route('status')->with('status', 'Status successfully added!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        $data = [];
        $data['status'] = $status;

        return view('admin.status.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Status $status, Request $request)
    {
        $data = [];
        $data['title'] = $request->name;

        $status->update($data);

        return redirect()->route('status')->with('status', 'Edit successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        
        return redirect()->route('status')->with('status', 'Data successfully deleted!');
    }
}
