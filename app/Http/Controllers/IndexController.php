<?php

namespace App\Http\Controllers;

use App\Models\IndexModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('index');
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
     * @param  \App\Models\IndexModel  $indexModel
     * @return \Illuminate\Http\Response
     */
    public function show(IndexModel $indexModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndexModel  $indexModel
     * @return \Illuminate\Http\Response
     */
    public function edit(IndexModel $indexModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndexModel  $indexModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndexModel $indexModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndexModel  $indexModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndexModel $indexModel)
    {
        //
    }
}
