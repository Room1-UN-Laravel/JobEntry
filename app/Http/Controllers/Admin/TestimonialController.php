<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testimonial; #as it is not in the same directory no more

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{


    public function testimonial()
    {
        $tests = Testimonial::where('pub', 1)
        ->orderBy('updated_at', 'DESC')
        ->get();
        return view('testimonial', compact('tests'));
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
