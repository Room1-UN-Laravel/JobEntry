<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function testimonial()
    {
        $tests = Testimonial::where('pub', 1)
        ->orderBy('updated_at', 'DESC')
        ->get();
        return view('testimonial', compact('tests'));
        }

    public function LatestTestimonials()
    {
        /*
        #SELECT * FROM `products` ORDER BY updated_at DESC limit 3;
        */
        #$products = Product::orderBy('updated_at', 'desc')->limit(3)->get();
        $tests = Testimonial::where('pub', 1)
        ->orderBy('updated_at', 'DESC')
        ->limit(3)
        ->get();

        return view('index', compact('tests'));
    }

   /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //    return view('prod-add');
    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        #validation:
        $data = $request->validate([
            'nmae' => "required|string",
            'profession' => "required|string",
            'description' => "required|string|max:1000",
            'image' => "required|mimes:png,jpg,jpeg|max:2048",
        ]);

        $data['pub'] = isset($request->pub);
        #$data['image'] = $this->uploadFile($request->image, "assets/images/admins/");

        #dd($data);

        Testimonial::create($data);

        return redirect()->route('prod-index');  # instead of: return "A prod was created & stored to ur DB";
    }






}
