<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Jobdata;

class PublicController extends Controller
{
    public function index(){

       // $jobs= Jobdata::get();
       $categories = Category::get();
       $jobs = Jobdata::all();
    //    dd($jobs);
        return view('public.pages.index', compact('jobs'),compact('categories'));
       
    }

    public function about(){

        return view('public.pages.about');
    }

    public function category(){

        $categories = Category::get();
        return view('public.pages.category', compact('categories'));
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
        $job= Jobdata::where('published', '=', 1)->find($id);
        return view('public.pages.job-detail', compact('job'));
    }
    public function jobs_categories(){

        $categories = Category::with(['jobs' => function ($query) { $query->where('published', 1)->take(7); }])->limit(4)->get();
        // dd($categories);
        return view('public.pages.jobs_categories', compact('categories'));
    }

}
