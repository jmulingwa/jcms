<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller

{
    //load index page
    public function home(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $complaint = Complaint::all();
        $shida = Complaint::all();
        $users = User::all();
        return view('admin.dashboard')
            ->with('complaint',$complaint)
            ->with("users",$users)
            ->with("shida", $shida);
    }
    //fetch all users
    public function users(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all();
        return view('admin.users')->with('users', $users);
    }

    //edit users
    public function useredit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::query()->findOrFail($id);
        return view('admin.edit_user')->with('user', $user);

    }

    public function user_role_update(Request $request, $id): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $user = User::query()-> find($id);
        $user->usertype = $request->input('usertype');
        $user->update();

        return redirect('users');

    }

    public function  assign(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        return view("/dashboard");
    }
}
