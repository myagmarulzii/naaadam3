<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SportController extends Controller
{
    public function index(): View
    {
        return view('admin.sports.index', ['sports' => Sport::query()->paginate(10)]);
    }

    public function create(): View
    {
        return view('admin.sports.form', ['sport' => new Sport()]);
    }

    public function store(Request $request): RedirectResponse
    {
        Sport::query()->create($this->validatedData($request));

        return redirect()->route('admin.sports.index')->with('status', 'Төрөл нэмэгдлээ.');
    }

    public function edit(Sport $sport): View
    {
        return view('admin.sports.form', compact('sport'));
    }

    public function update(Request $request, Sport $sport): RedirectResponse
    {
        $sport->update($this->validatedData($request));

        return redirect()->route('admin.sports.index')->with('status', 'Төрөл шинэчлэгдлээ.');
    }

    public function destroy(Sport $sport): RedirectResponse
    {
        $sport->delete();

        return redirect()->route('admin.sports.index')->with('status', 'Төрөл устгагдлаа.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash'],
            'icon' => ['nullable', 'string', 'max:10'],
            'description' => ['nullable', 'string'],
        ]);
    }
}
