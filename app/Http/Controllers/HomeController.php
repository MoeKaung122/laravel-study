<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date=post::all();
        return view('home' ,compact('date'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = new post();
        $date->name = $request->name;
        $date->description = $request->description;

        $date->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $date = post::findOrfail($id);
        return view('show' ,compact('date'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $date = post::findOrfail($id);
        return view('edit' ,compact('date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $date = post::findOrfail($id);
        $date->name = $request->name;
        $date->description = $request->description;

        $date->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        post::findOrfail($id)->delete();
        return redirect('/posts');
    }
}
