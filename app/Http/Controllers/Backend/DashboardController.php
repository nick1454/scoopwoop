<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function profileEdit()
    {
        return view('backend.profile.edit');
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => ['name' => 'required'],
            'email' => ['email' => 'required|unique:users'],
            'password' => ['pasword' => 'required|confirmed'],
        ];

        foreach ($request->all() as $index => $value) {
            if (array_key_exists($index, $rules)) {
                $request->validate($rules[$index]);
            }
        }
        $user = User::find($request->id);
        echo "<pre>"; print_r($request->all()); die;
    }
}
