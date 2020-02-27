<?php

namespace App\Http\Controllers\Auth;

use App\Entities\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Show a profile user.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = auth()->user();

        return view('auth.profile.show', compact('user'));
    }

    /**
     * Edit a profile user.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = auth()->user();

        return view('auth.profile.edit', compact('user'));
    }

    /**
     * Update a profile user.
     *
     * @return \Illuminate\View\View
     */

    public function update(Request $request)
    {
        $userData = $request->validate([
            'name'     => 'required|min:5|max:60',
            'username' => 'required|min:5|max:60|unique:users,username,'.auth()->user()->id,
            'email'    => 'nullable|email|unique:users,email,'.auth()->user()->id,
        ]);

        auth()->user()->update($userData);

        flash(__('user.profile_updated'), 'success');

        return redirect()->route('profile.show');
    }
}
