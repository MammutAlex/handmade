<?php

    namespace App\Http\Controllers;

    use App\About;
    use App\Blog;
    use App\Contact;
    use App\Portfolio;
    use App\SliderText;
    use App\Tags;
    use Config;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use Mail;

    class WelcomeController extends Controller
    {
        public function index(Tags $tags, Portfolio $portfolio, SliderText $sliderText)
        {
            $texts  = $sliderText->orderBy('order', 'asc')->get();
            $slider = [];
            foreach ($texts as $text) {
                array_push($slider, $text->title);
            }
            $sliders = json_encode($slider);

            return view('welcome', [
                'tags'       => $tags->get(),
                'portfolios' => $portfolio->get(),
                'slider'     => $sliders
            ]);
        }

        public function blog(Blog $blog)
        {
            $blogs = $blog->paginate(15);

            return view('blog', ['blogs' => $blogs]);
        }

        public function about(About $about)
        {
            return view('about', ['infos' => $about->orderBy('order', 'asc')->get()]);
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
                'name'    => 'required|max:255',
                'email'   => 'required|max:255|email',
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
