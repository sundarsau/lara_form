<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Category::orderBy("name","asc")->get();
        return view('index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'descr' => 'required',
            ],
            [
                'name.required'=> 'Please enter a name',
                'descr.required'=> 'Please enter a description',
            ]
        );

        try{
            Category::create($request->only('name', 'descr'));
            return redirect()->route('category.index')->withSuccess('Product Category added successfully');
        }
        catch(\Exception $e){
            return back()->withError($e->getMessage())->withInput();
        }

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

        $edit = Category::findOrFail($id);
        return view('add_category', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'name' => 'required',
            'descr' => 'required',
        ],
        [
            'name.required'=> 'Please enter a name',
            'descr.required'=> 'Please enter a description',
        ]
    );

    try{
        Category::where('id',$id)->update($request->only('name', 'descr'));
        return redirect()->route('category.index')->withSuccess('Product Category updated successfully');
    }
    catch(\Exception $e){
        return back()->withError($e->getMessage())->withInput();
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
