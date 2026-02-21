<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function show(Request $request): View
    {
        return view('public.profile', ['user' => $request->user()]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'aimag' => ['nullable', 'string', 'max:100'],
            'avatar_url' => ['nullable', 'url', 'max:255'],
            'password' => ['nullable', 'confirmed', 'min:8'],
        ]);

        $user = $request->user();
        $user->fill($validated);

        if (! empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return back()->with('status', 'Профайл амжилттай шинэчлэгдлээ.');
    }
}
