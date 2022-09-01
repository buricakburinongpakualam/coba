<?php

namespace App\Http\Controllers;

use App\Models\Wst;
use Illuminate\Http\Request;

class AdminWstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminwst.wst.index', [
            'posts' => Wst::all()
        ]);
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
     * @param  \App\Models\Wst  $wst
     * @return \Illuminate\Http\Response
     */
    public function show(Wst $wst)
    {
        return $wst;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wst  $wst
     * @return \Illuminate\Http\Response
     */
    public function edit(Wst $wst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wst  $wst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wst $wst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wst  $wst
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wst $wst)
    {
        //
    }
}
