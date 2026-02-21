<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Sport;
use Illuminate\Contracts\View\View;

class LeaderboardController extends Controller
{
    public function index(): View
    {
        $sports = Sport::query()->withCount('participants')->get();
        $topParticipants = Participant::query()
            ->with('sport')
            ->orderBy('rank')
            ->limit(12)
            ->get();

        $medals = [
            'gold' => Participant::query()->where('medal', 'gold')->count(),
            'silver' => Participant::query()->where('medal', 'silver')->count(),
            'bronze' => Participant::query()->where('medal', 'bronze')->count(),
        ];

        return view('public.home', compact('sports', 'topParticipants', 'medals'));
    }

    public function sport(string $slug): View
    {
        $sport = Sport::query()->where('slug', $slug)->firstOrFail();
        $participants = $sport->participants()->orderBy('rank')->get();

        return view('public.sport', compact('sport', 'participants'));
    }
}
