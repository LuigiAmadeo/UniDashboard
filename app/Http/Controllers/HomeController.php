<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\AgendaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $details = AgendaDetail::where('agenda_id', Auth::user()->id)->orderBy('time')->latest('created_at')->limit(4)->get();
        $file = File::where('user_id', Auth::user()->id)->latest('created_at')->limit(4)->get();
        $list = [
            'agenda_details' => $details,
            'file' =>$file
        ];
        return view('dashboard', $list);
    }
}
