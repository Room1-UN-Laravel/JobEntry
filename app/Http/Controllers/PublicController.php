<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }


    public function about()
    {
        return view('about', ['activePage' => 'About Us']);
    }

    public function category()
    {
        return view('category', ['activePage' => 'Category']);
    }

    public function testimonial()
    {
        return view('testimonial', ['activePage' => 'Testimonial']);
    }

    public function detail()
    {
        return view('job-detail', ['activePage' => 'Job Detail']);
    }

    public function jobList()
    {
        return view('job-list', ['activePage' => 'Job List']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
