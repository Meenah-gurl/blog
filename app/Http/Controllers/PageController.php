<?php

namespace App\Http\Controllers;

use App\Models\shop;
use Inertia\Inertia;
use App\Models\advert;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class PageController extends Controller

{
    public function verify_email(Request $request)
    {
        if ($request->user()->email_verified_at == null) {
            return Inertia::render('Auth/VerifyEmail');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function resend_email_verify_notice(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
    
        return back()->with('status', 'Verification link sent!');
    }

    public function email_verification(EmailVerificationRequest $request) 
    {
        $request->fulfill();
        return redirect()->route('dashboard');
    }

    public function index()
    {
        $getgallery = gallery::orderBy('id','DESC')->get();
        $getStore = shop::orderBy('id', 'DESC')->get();
        return Inertia::render('Home',['gallery_home'=>  $getgallery], ['salesItems'=>  $getStore]);
        // return Inertia::render('Home');
    }

    public function trend()
    {
        $gettrend = gallery::where('style','Trends')->orderBy('id','DESC')->get();
        return Inertia::render('Trending',['trends'=>  $gettrend]);
    }

    public function laceStyle()
    {
        $getlaceStyle = gallery::where('style','Lace')->orderBy('id','DESC')->get();
        return Inertia::render('LaceStyle',['laceStyle'=> $getlaceStyle]);
    }

    public function asoebiStyle()
    {
        $getasoebiStyle = gallery::where('style','Asoebi')->orderBy('id','DESC')->get();
        return Inertia::render('AsoebiStyle',['asoebiStyle'=> $getasoebiStyle]);
    }

    public function ankaraStyle()
    {
        $getankaraStyle = gallery::where('style','Ankara')->orderBy('id','DESC')->get();
        return Inertia::render('AnkaraStyle',['ankaraStyle'=> $getankaraStyle]);
    }

    public function childrenStyle()
    {
        // $getChildrenStyle = gallery::orderBy('id','DESC')->get();
        $getChildrenStyle = gallery::where('style','Children')->orderBy('id','DESC')->get();
        return Inertia::render('ChildrenStyle',['childrenStyle'=>$getChildrenStyle]);
    }

    public function hairStyle()
    {
        $gethairStyle = gallery::where('style','HairStyles')->orderBy('id','DESC')->get();
        return Inertia::render('HairStyle',['hairStyle'=> $gethairStyle]);
    }

    public function makeover()
    {
        $getmakeover = gallery::where('style','Makeover')->orderBy('id','DESC')->get();
        return Inertia::render('MakeOver',['makeover'=> $getmakeover]);
    }

    public function aboutPage()
    {
        return Inertia::render('AboutPage');
    }



    public function contactPage()
    {
        return Inertia::render('ContactPage');
    }

    public function categories()
    {
        return Inertia::render('Categories');
    }

    public function advert()
    {
        $getadvert = advert::orderBy('id','DESC')->get();
        return Inertia::render('Advert',['advert'=> $getadvert]);
    }

    public function shopDash()
    {
        return Inertia::render('ShopDash');
    }

    public function gallery()
    {
        $getGallary = gallery::orderBy('id','DESC')->get();
        return Inertia::render('Gallery',['gallery'=>$getGallary]);
 
    }
    
    public function dashboard(Request $request)
    {
        $user = $request->user();
        // return view('pages.Dashboard', ['user' => $user]);
        return Inertia::render('Dashboard', ['user' => $user]);
    }


    public function login(Request $request)
    {
        $user = $request->user();
        return Inertia::render('/dashboard', ['user' => $user]);
        
    }
    public function delete_token(Request $request)
    {
        if ($request->user()->tokens()->delete()) {
            return response()->json([
                'status' => 'success',
                'messages' => '',
                'result' => []
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'messages' => '',
                'result' => []
            ]);
        }
    }

    
    public function fetch_styles(Request $request)
    {
        $getlaceStyle = gallery::where('style','Lace')->orderBy('id','DESC')->limit(1)->get();
        $getchildrenStyle = gallery::where('style','Children')->orderBy('id','DESC')->limit(5)->get();
        $getankaraStyle = gallery::where('style', 'Ankara')->orderBy('id','DESC')->limit(1)->get();
        $gettrend = gallery::where('style', 'Trends')->orderBy('id','DESC')->limit(1)->get();
        $getmakeover = gallery::where('style', 'Makeover')->orderBy('id', 'DESC')->limit(1)->get();
        $getgallery = gallery::orderBy('id', 'DESC')->limit(12)->get();
        $getadvert = advert::orderBy('id', 'DESC')->limit(3)->get();
        $getasoebiStyle = gallery::where('style', 'Asoebi')->orderBy('id','DESC')->limit(1)->get();
       
        
        return json_encode([
            'lacestyle' => $getlaceStyle,
            'childrenStyle' => $getchildrenStyle,
            'ankaraStyle' => $getankaraStyle,
            'trend' => $gettrend,
            'makeOver' => $getmakeover,
            'gallery' => $getgallery,
            'advert'  => $getadvert,
            'asoebiStyle' => $getasoebiStyle
           
        ]);
    }


    public function fetch_styles_shop(Request $request)
    {
        $getStore = shop::orderBy('id','DESC')->limit(7)->get();
        
        return json_encode([
            'shop' => $getStore
           
        ]);
    }

}
