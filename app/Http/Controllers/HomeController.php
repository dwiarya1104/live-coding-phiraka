<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
    public function index()
    {
        $users = User::get();
        return view('home', compact('users'));
    }

    public function create(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id)->update([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();

        return redirect()->back();
    }
}