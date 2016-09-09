<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Portfolio;
use App\Tags;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(Tags $tags, Portfolio $portfolio)
    {
        return view('welcome', ['tags' => $tags->get(), 'portfolios' => $portfolio->get()]);
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

    public function portfolio(Portfolio $base, $portfolioId)
    {
        $body = $base->find($portfolioId);
        return view('portfolio', ['portfolio' => $body]);
    }

    public function contactPost(Request $request)
    {
        Contact::create($request->all());
        return redirect('/contact')->with('success', 'Ваше повідомлення відправлено');
    }
}
