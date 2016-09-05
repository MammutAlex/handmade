<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;

    class WelcomeController extends Controller
    {
        public function index()
        {
            return view('welcome');
        }

        public function blog()
        {
            return view('blog');
        }

        public function about()
        {
            return view('about');
        }

        public function contact()
        {
            return view('contact');
        }

        public function blogSingle($blogId)
        {
            return view('blog-single');
        }

        public function portfolio($portfolioId)
        {
            return view('portfolio');
        }
    }
