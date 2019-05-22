<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 1.1: Creating public Index func
    public function index(){
        return view('pages/index');
    }
    // 1.1: Creating public about func
    public function about(){
        $title = 'About Us!';
        //return view('pages/about', compact('title'));
        return view('pages/about')->with('title', $title);
    }
    // 1.1: Creating public services func
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Desgin', 'Programing, SEO', 'Web Hosting, Web Maintenance']
        );
        return view('pages/services')->with($data);
    } 

}
