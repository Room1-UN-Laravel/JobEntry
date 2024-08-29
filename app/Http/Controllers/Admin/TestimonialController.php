<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testimonial; #as it is not in the same directory no more

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploadFileTrait;

class TestimonialController extends Controller
{

    use UploadFileTrait;

    public function index()
    {
        $testimonials = Testimonial::get();
        $page = "Testimonials";
        $current_user_fullname  = "Engy";
        return view('admin.testimonials', compact(['testimonials','page','current_user_fullname']));
        
    }
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
        $page = "Add Testimonial";
        $current_user_fullname  = "Engy";
        return view('admin.addTestimonial', compact(['page','current_user_fullname']));
    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #validation:
        
        $data = $request->validate([
            'name' => "required|string|max:255",
            'profession' => "required|string",
            'description' => "required|string|max:1000",
            'image' => "required|mimes:png,jpg,jpeg|max:2048",
        ]);
        $data['pub'] = isset($request->pub);
        $data['image'] = $this->uploadFile($request->image, "assets/admin/testimonials/");
        Testimonial::create($data);

        return redirect()->route('testimonials.index');  # instead of: return "A prod was created & stored to ur DB";
    }
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial['image'] = 'assets/admin/testimonials/' . $testimonial['image'];
        $page = "Edit Testimonial";
        $current_user_fullname  = "Engy";
        return view('admin.editTestimonial', compact('testimonial','page','current_user_fullname'));
    }
    public function update(Request $request, string $id)
    {
        #validation:
        
        $data = $request->validate([
            'name' => "required|string|max:255",
            'profession' => "required|string",
            'description' => "required|string|max:1000",
            'image' => "mimes:png,jpg,jpeg|max:2048",
            'pub' => 'required:boolean',
        ]);
         
        $file_name = ($request->hasFile('image')) ? $this->uploadFile($request['image'], 'assets/admin/testimonials/'):$request['old_image'];
        $data['image'] = $file_name ;
        Testimonial::where('id', $id)->update($data);
        return redirect()->route('testimonials.index');  # instead of: return "A prod was created & stored to ur DB";
    }
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->route('testimonials.index');
    }





}
