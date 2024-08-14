<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $jobs= Job::get();
       return view('index');
    }

    public function about()
    {
        // $jobs= Job::get();
       return view('about');
    }

    public function category()
    {
        // $jobs= Job::get();
       return view('category');
    }

    
    public function joblist()
    {
        // $jobs= Job::get();
       return view('job-list');
    }

    public function testimonial()
    {
        // $jobs= Job::get();
       return view('testimonial');
    }

    public function contact()
    {
        // $jobs= Job::get();
       return view('contact');
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
        return view('job-detail');
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
