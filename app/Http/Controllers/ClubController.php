<?php

namespace App\Http\Controllers;

use App\Models\Club;

class ClubController extends Controller
{
    /**
     * Display all Premier League clubs.
     */
    public function index()
    {
        // Get every club from the MySQL database.
        $clubs = Club::orderBy('name')->get();

        return view('clubs.index', compact('clubs'));
    }

    /**
     * Display information about one club.
     */
    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }
}