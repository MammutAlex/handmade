<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Portfolio;
use App\Tags;
use Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class WelcomeController extends Controller
{
    public function index(Tags $tags, Portfolio $portfolio)
    {
        return view('welcome', ['tags' => $tags->get(), 'portfolios' => $portfolio->get()]);
    }

    public function blog(Blog $blog)
    {
        $blogs = $blog->paginate(15);
        return view('blog', ['blogs' => $blogs]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogSingle($blogId, Blog $data)
    {
        $blog = $data->find($blogId);
        return view('blog-single', ['blog' => $blog]);
    }

    public function portfolio(Portfolio $base, $portfolioId)
    {
        $body = $base->find($portfolioId);
        return view('portfolio', ['portfolio' => $body]);
    }

    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);
        Contact::create($request->all());
        Mail::send('emails.contact', ['data' => $request->all()], function ($message) {
            $message->from('contactme@dream-made.pro', 'Traumhimmel');
            $message->to('tayna_83@ukr.net', '')->subject('Лист з сайту');
        });
        return redirect('/contact')->with('success', 'Ваше повідомлення відправлено');
    }
}
