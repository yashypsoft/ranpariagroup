<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Session;
use Mail;
use App\Mail\ContactMail;
use App\Mail\CarrierMail;
class IndexController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function products()
    {
        return view('products');
    }

    public function ourJourney()
    {
        return view('our-journey');
    }

    public function companyProfile()
    {
        return view('company-profile');
    }

    public function missionAndvission()
    {
        return view('mission-and-vission');
    }

    public function corporateVideo()
    {
        return view('corporate-video');
    }

    public function quality()
    {
        return view('quality');
    }

    public function career()
    {
        return view('career');
    }

    public function changeLang(Request $request)
    {
        App::setLocale($request->lang_code);
        Session::put('locale', $request->lang_code);
        return redirect()->back();
    }

    public function sendContactUsMail(Request $request) {
        try{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                // 'subject' => 'required',
                'phone_number' => 'required',
                'message' => 'required'
            ]);

            $adminEmail = "prajapatiyash21@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($request));

            return back()->with('success', 'Thank you for contact us!');
        }catch(\Exception $e){
            \Log::debug($e);
            return back()->with('error', 'Something went wrong.');
        }
    }


    public function sendCarrierMail(Request $request) {
        try{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                // 'subject' => 'required',
                'cvfile' => 'required|mimes:doc,docx,pdf',
                'message' => 'required'
            ]);

            $path = public_path('uploads');
            $attachment = $request->file('cvfile');
            $name = time().'.'.$attachment->getClientOriginalExtension();

            // create folder
            if(!\File::exists($path)) {
                \File::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path.'/'.$name;
            $request->filename = $filename;

            $adminEmail = "prajapatiyash21@gmail.com";
            Mail::to($adminEmail)->send(new CarrierMail($request));

            return back()->with('success', 'We have successfully received your request. We shall soon contact you on your given contact details.');
        }catch(\Exception $e){
            \Log::debug($e);
            return back()->with('error', $e->getMessage());
        }
    }
}

