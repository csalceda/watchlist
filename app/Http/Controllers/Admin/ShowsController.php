<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Status;
use App\Models\Genre;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['shows'] = Show::latest()->paginate(9);

        return view('admin.shows.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];

        $data['genres'] = Genre::orderBy('title', 'asc')->get();
        $data['statuses'] = Status::orderBy('title', 'asc')->get();

        return view('admin.shows.create', $data);
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
            'title' => 'required|max:255',
            'status' => 'required',
            'genre' => 'required',
        ])) {
            $data = [];

            // Store image
            if($request->file('show_image')) {
                $image = $request->file('show_image');
                $extension = $request->file('show_image')->getClientOriginalExtension();
                $filename = rand(1111, 9999) . '.' . $extension;
                $storage = 'show_img';
                $image->move($storage, $filename);
            }

            $data['user_id'] = auth()->user()->id;
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['status_id'] = $request->status;
            $data['genre_id'] = $request->genre;
            $data['image'] = $filename;

            Show::create($data);

            return redirect()->route('shows')->with('status', 'New show added!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Show $show)
    {
        $data = [];

        $data['show'] = $show;

        return view('admin.shows.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        $data = [];
        $data['show'] = $show;
        $data['statuses'] = Status::get();
        $data['genres'] = Genre::get();

        return view('admin.shows.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Show $show, Request $request)
    {
        if($request->file('show_image')) {
            $image = $request->file('show_image');
            $extension = $request->file('show_image')->getClientOriginalExtension();
            $filename = rand(1111, 9999) . '.' . $extension;
            $storage = 'show_img';
            $image->move($storage, $filename);
        } else {
            $filename = $show->image;
        }

        $data['user_id'] = auth()->user()->id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status_id'] = $request->status;
        $data['genre_id'] = $request->genre;
        $data['image'] = $filename;

        $show->update($data);

        return redirect()->route('shows')->with('status', 'Changes are saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Show $show)
    {
        $show->delete();
        return redirect()->route('shows')->with('status', 'Data successfully deleted!');
    }
}
