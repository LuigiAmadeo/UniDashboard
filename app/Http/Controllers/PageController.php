<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\AgendaDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function Welcome(){
        return view('welcome');
    }

    // PROFILE
    public function EditProfileForm(Request $request){

        $images = NULL;
        if (Auth::user()->images == NULL){
            $images= 'default_pp.png';
        }else {
            $images= Auth::user()->images;
        }

        $data = User::where('id', $request->id)->first();
        
        $list = [
            'image' => $images,
            'user' => $data
        ];

        return view('editFORM', $list);
    }

    public function EditProfile(Request $request){
        $validating = $request->validate([
            'name' =>'required|min:5',
            'email' => 'required',
            'password' => 'required|min:8',
            'images' => 'image|nullable'
        ]);

        if($request->images == NULL){

        }
        
        // $images = $validating['images'];

        if($request->images != NULL){
            $file = $request->file('images');
            $fileName = $request->name . "." . $file->getClientOriginalExtension();
            Storage::putFileAs("public", $file, $fileName);
            $validating['images'] = $fileName;
        }

        $validating['password'] = Hash::make($validating['password']);

        User::where('id', $request->id)->update($validating);

        return redirect('home');
    }

    // AGENDA

    public function Agenda(Request $request){
        $details = AgendaDetail::where('agenda_id', $request->id)->orderBy('time')->get();
        $list = [
            'agenda_details' => $details
        ];
        return view('agenda', $list);
    }

    public function AddAgenda(Request $request){

        $agenda_details = new AgendaDetail();
        $agenda_details->time = $request->time;
        $agenda_details->agenda = $request->agenda;
        $agenda_details->agenda_id = $request->id;

        $agenda_details->save();

        return redirect()->back();
    }

    public function EditAgendaForm(Request $request){

        $data = AgendaDetail::where('id', $request->id)->first();

        $list = [
            'detail' => $data
        ];
        return view('editAgenda', $list);
    }

    public function EditAgenda(Request $request){
        
        $validating = $request->validate([
            'time' =>'required',
            'agenda' => 'required',
        ]);

        AgendaDetail::where('id', $request->id)->update($validating);

        $agenda_id = Auth::user()->id;

        return redirect()->route('agenda_view', ['id' => $agenda_id] );
    }

    public function CompleteAgenda(Request $request){

        AgendaDetail::where('id', $request->id)->delete();

        return redirect()->back();
    }

}
