<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Job;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Traits\UploadFileTrait;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('jobs')->get();
        $jobs = Job::with('category')
        ->latest()
        ->take('3')
        ->get();

            $tests = Testimonial::where('pub', 1)
            ->latest()
            ->take('3')
            ->get();
// dd($jobs);
            return view('index', compact('tests', 'categories', 'jobs'));
    }

    public function jobs()
    {
        $categories = Category::limit(4)->with('latest_jobs')->get();
        return view('jobs',compact('categories'));
    }


    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }


    public function category()
    {
        return view('category');
    }


    public function jobDetail()
    {
        return view('job-detail');
    }


    public function jobList()
    {
        return view('job-list');
    }

    /**
     *
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
