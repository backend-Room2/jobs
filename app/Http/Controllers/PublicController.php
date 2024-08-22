<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobdata;

class PublicController extends Controller
{
    public function index(){

        return view('public.pages.index');
    }

    public function about(){

        return view('public.pages.about');
    }

    public function category(){

        return view('public.pages.category');
    }

    public function jobdetail(){

        return view('public.pages.job-detail');
    }

    public function joblist(){

        return view('public.pages.job-list');
    }

    public function contact(){

        return view('public.pages.contact');
    }

    public function testimonial(){

        return view('public.pages.testimonial');
    }

    public function page404(){

        return view('public.pages.page404');
    }

    public function show(string $id)
    {
        $job= Jobdata::findOrFail($id);
        return view('public.pages.job-detail', compact('job'));
    }

 
}
