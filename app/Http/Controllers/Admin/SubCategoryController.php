<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sub_categories'] = SubCategory::with('category')->simplePaginate(10);
        return view('admin.sub_category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.sub_category.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'icon'=>'required',
            'category_id'=>'required',
        ]);
        foreach($request->title as $key => $title)
        {
            $sub_category = new SubCategory();
            $sub_category->title = $title;
            $sub_category->icon = $request->icon[$key];
            $sub_category->category_id = $request->category_id;
            $img = $request->image[$key];
            $ext = rand().".".$img->getClientOriginalName();
            $img->move("category_image/",$ext);
            $sub_category->image = $ext;
            $sub_category->save();

            $sub_category_u = SubCategory::find($sub_category->id);
            $sub_category_u->slug = Str::slug($title." ".$sub_category->id);
            $sub_category_u->update();
        }
        return redirect()->route('admin.sub_categories.index')->with('success', 'Sub Category has been created successfully');
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
        $data['sub_category'] = SubCategory::find($id);
        $data['categories'] = Category::all();
        return view('admin.sub_category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'icon'=>'required',
        ]);


        $sub_category = SubCategory::find($id);
        $sub_category->title = $request->title;
        $sub_category->slug = Str::slug($request->title." ".$id);
        $sub_category->category_id = $request->category_id;
        $sub_category->icon = $request->icon;
        if($request->image)
        {
            $mainimagePath = public_path("category_image/{$sub_category->image}");
            if (file_exists($mainimagePath)) {
                unlink($mainimagePath);
            }

            $img = $request->file('image');
            $ext = rand().".".$img->getClientOriginalName();
            $img->move("category_image/",$ext);
            $sub_category->image = $ext;
        }
        $sub_category->update();
        return redirect()->route('admin.sub_categories.index')->with('success', 'Sub Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sub_category = SubCategory::find($id);
        $mainimagePath = public_path("category_image/{$sub_category->image}");
        if (file_exists($mainimagePath)) {
            unlink($mainimagePath);
        }
        $sub_category->delete();
        return redirect()->back()->with('success', 'Sub Category has been deleted successfully');
    }
}
