<?php

namespace App\Http\Controllers\Watchlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Status;
use App\Models\Genre;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['shows'] = Show::latest()->get();
        $data['genres'] = Genre::get();
        $data['statuses'] = Status::get();

        return view('watchlist.index.index', $data);
    }

    public function filter(Request $request)
    {
        $data = [];
        $data['query'] = $request->query();
        
        $genre = $data['query']['genre'];
        $status = $data['query']['status'];

        $data['genres'] = Genre::get();
        $data['statuses'] = Status::get();

        if(isset($genre) || isset($status)) {
            $data['shows'] = Show::where('genre_id', '=', $genre)
                            ->orWhere('status_id', '=', $status)
                            ->get();
            return view('watchlist.index.index', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
