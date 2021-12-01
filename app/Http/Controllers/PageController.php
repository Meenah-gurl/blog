<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function trend()
    {
        return Inertia::render('Trending');
    }

    public function laceStyle()
    {
        return Inertia::render('LaceStyle');
    }

    public function asoebiStyle()
    {
        return Inertia::render('AsoebiStyle');
    }

    public function ankaraStyle()
    {
        return Inertia::render('AnkaraStyle');
    }

    public function childrenStyle()
    {
        return Inertia::render('ChildrenStyle');
    }

    public function hairStyle()
    {
        return Inertia::render('HairStyle');
    }

    public function makeover()
    {
        return Inertia::render('MakeOver');
    }

    public function aboutPage()
    {
        return Inertia::render('AboutPage');
    }



    public function contactPage()
    {
        return Inertia::render('ContactPage');
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
}
