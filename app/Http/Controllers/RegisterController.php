<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  public function create()
  {
      return view('register.create');
  }
  public function store(Request $request)
  {
      $attributes = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);
      $user = User::create($attributes);
      Auth::login($user);

      return redirect('/')->with('success', 'Your account has been created.');
  }
}
