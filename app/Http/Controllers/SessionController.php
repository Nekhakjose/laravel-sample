<?php



namespace App\Http\Controllers;

Use App\Models\User;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email'=>'required',
            'password' => 'required',
        ]);    

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/task')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'name' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'Goodbye!');
    }
}