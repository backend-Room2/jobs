<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\Common;

class CategoryController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories= Category::get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $category = $request-> validate (['category_name'=>'required|string|max:100',
                                            'image'=>'required|mimes:jpeg,jpg,png,gif',
                                            'no_of_vacancy' => 'required|integer'
                             ]);

         $category['image']=$this->uploadFile($request->image, 'assets/img/categories'); 

         Category::create($category);
         return "category entered successfully";
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
        $categories= Category::findOrFail($id);
        return view('admin.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = $request-> validate (['category_name'=>'required|string|max:100',
                                          'image'=>'mimes:jpeg,jpg,png,gif',
                                          'no_of_vacancy' => 'required|integer'
                        ]);

        if ($request->hasFile('image')) {
          $category['image'] = $this->uploadFile($request->image, 'assets/img/categories');
                     } 
        Category::where('id', $id)->update($category);
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

    public function showDeleted()
    {
        $categories= Category::onlyTrashed()->get();

        return view('admin.categories.showDeleted', compact('categories'));
    }

    public function restore(string $id)
    {
        Category::where('id', $id)->restore();

        return redirect()->route('categories.showDeleted');
    }

    public function forcedelete(string $id)
    {
        //return "Delete car";
        Category::where('id', $id)->forcedelete();

        return redirect()->route('categories.index');
    }
}
