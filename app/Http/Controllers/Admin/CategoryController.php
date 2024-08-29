<?php


namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $page = "categores";
        $current_user_fullname  = "Engy";
        return view('admin.categories', compact(['categories','page','current_user_fullname']));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = "Add Category";
        $current_user_fullname  = "Engy";
        return view('admin.addCategory', compact(['page','current_user_fullname']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        Category::create($data);
        return redirect()->route('categories.index');
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
        $category = Category::findOrFail($id);
        $page = "Edit Category";
        $current_user_fullname  = "Engy";
        return view('admin.editCategory', compact(['category','page','current_user_fullname']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        Category::where('id', $id)->update($data);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('categories.index');
    }
}
