<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\Sport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParticipantController extends Controller
{
    public function index(): View
    {
        $participants = Participant::query()->with('sport')->orderBy('rank')->paginate(20);

        return view('admin.participants.index', compact('participants'));
    }

    public function create(): View
    {
        return view('admin.participants.form', ['participant' => new Participant(), 'sports' => Sport::query()->get()]);
    }

    public function store(Request $request): RedirectResponse
    {
        Participant::query()->create($this->validatedData($request));

        return redirect()->route('admin.participants.index')->with('status', 'Оролцогч бүртгэгдлээ.');
    }

    public function edit(Participant $participant): View
    {
        return view('admin.participants.form', ['participant' => $participant, 'sports' => Sport::query()->get()]);
    }

    public function update(Request $request, Participant $participant): RedirectResponse
    {
        $participant->update($this->validatedData($request));

        return redirect()->route('admin.participants.index')->with('status', 'Оролцогч шинэчлэгдлээ.');
    }

    public function destroy(Participant $participant): RedirectResponse
    {
        $participant->delete();

        return redirect()->route('admin.participants.index')->with('status', 'Оролцогч устгагдлаа.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'sport_id' => ['required', 'exists:sports,id'],
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'rank' => ['required', 'integer', 'min:1'],
            'medal' => ['required', 'in:gold,silver,bronze'],
            'wins' => ['nullable', 'integer', 'min:0'],
            'score' => ['nullable', 'numeric', 'min:0'],
            'finish_time' => ['nullable', 'string', 'max:50'],
            'hometown' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string'],
            'photo_url' => ['nullable', 'url'],
        ]);
    }
}
