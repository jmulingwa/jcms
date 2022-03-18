<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
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
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('home');
    }
    //Dashboard for normal user
    public function  dash(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("complaints.dash");
    }
    //Raise complaints
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('complaints.create');
    }

    //Store complaints

    /**
     * @throws \Exception
     */
//    public function store(){
//
//        $data = request()->validate([
//            'ticketId'=>mt_rand(1000,2000),
//            'subject' => 'required',
//            'description'=>'required',
//            'category'=>'required',
//            'initiator'=>'required',
//            'agent'=> 'required',
//            ]);
//        auth()->user()->complaints()->create($data);
//
//    }


public function store(Request $request){
    $complaint = new \App\Models\Complaint();
    $complaint-> ticketId = mt_rand(1000,2999);
    $complaint-> subject = $request->input('subject');
    $complaint->description = $request->input('description');
    $complaint->initiator = $request->input('initiator');
    $complaint->agent = $request->input('agent');
    $complaint->user_id = auth()->id();
    $complaint->category = $request->input('category');

    $complaint->save();

    return redirect('/dash');

}

}
