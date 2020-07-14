<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function profileEdit()
    {
        $user = Auth::user();
        return view('backend.profile.edit', compact('user'));
    }

    public function updatePersonal(Request $request)
    {
        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);
        Auth::user()->update($request->except('_token'));

        return back()->with('status', 'personal data updated');
    }

    public function updateEmail(Request $request)
    {
        $rules = [
            'email' => 'required|unique:users'
        ];

        $request->validate($rules);
        Auth::user()->update($request->except('_token'));

        return back()->with('status', 'personal data updated');
    }

    public function updatePassword(Request $request)
    {
        $rules = [
          'password' => 'required|confirmed'
        ];

        $request->validate($rules);
        Auth::user()->update(['password' => \Hash::make($request->password)]);

        return back()->with('status', 'personal data updated');
    }
}
