<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\traits\Common;
use Illuminate\Http\Request;

use App\Models\Jobdata;

class JobController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs=Jobdata::get();
        return view('admin/adminpages/jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/adminpages/add_job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = $request-> validate (['jobTitle'=>'required|string|max:100',
                                     'location'=>'required|string|max:100',
                                     'description'=> 'required|string|max:200',
                                     'responsibility'=> 'required|string|max:500',
                                     'qualifications'=> 'required|string|max:500',
                                     'companydetail'=> 'required|string|max:500',
                                     'salaryFrom'=>'required|decimal:0,2',
                                     'salaryTo'=>'required|decimal:0,2',
                                     'image'=>'required|mimes:jpeg,jpg,png,gif',
                                     'published'=>'boolean',
                                     'featured'=>'boolean',
                                     'time'=>'required|in:part-time,full-time',
                                     'dateline'=>'required|date',
                          ]);
        $job['image']=$this->uploadFile($request->image, 'admin/assets/images/jobs'); 
        Jobdata::create($job);

        return "data entered successfully";

        //return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
