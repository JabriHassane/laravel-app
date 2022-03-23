<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    //Home Page Blog
    public function index(){

        return view('blogPosts.blog');
    }

    // Create Post page
    public function create(){
        return view('blogPosts.create-post');
    }

    //store post in the db
    public function store(Request $request){
        dd($request->all());
    }

    //Show post page
    public function show(){

        return view('blogPosts.single-blog-post');
    }


}
