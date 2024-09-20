<?php

namespace App\Http\Controllers;

use App\Models\PlayerStatistic;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $queryBuilder = PlayerStatistic::query();
        
        if ($query) {
            $queryBuilder->where(function ($subQuery) use ($query) {
                $subQuery->where('name', 'like', "%$query%")
                    ->orWhere('steam_auth', 'like', "%$query%");
            });
        }
        
        $players = $queryBuilder->paginate(10)->appends(['search' => $query]);
        
        return view('home', compact('players'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
