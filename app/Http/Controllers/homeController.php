<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Traits\UploadFileTrait;
use App\Models\Category;
use App\Models\Home;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
    
        $jobs = Job::with('category')->get();
        return view('index', compact('jobs'));

    }


    public function indexD()
    {
        $job = Job::with('category')->get();
        return view('job-list', compact('job'));
        // return view('job-list');
    }
    // //
 
}
