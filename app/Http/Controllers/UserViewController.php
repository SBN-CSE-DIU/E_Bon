<?php

namespace App\Http\Controllers;

use App\user_view;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users/home');
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
     * @param  \App\user_view  $user_view
     * @return \Illuminate\Http\Response
     */
    public function show(user_view $user_view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_view  $user_view
     * @return \Illuminate\Http\Response
     */
    public function edit(user_view $user_view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_view  $user_view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_view $user_view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_view  $user_view
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_view $user_view)
    {
        //
    }
}
