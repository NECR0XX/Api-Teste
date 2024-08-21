<?php

namespace App\Http\Controllers;

use App\Models\Competitor;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitors = Competitor::all();
        return response()->json($competitors);
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
        $validatedData = $request->validate([
            "name" => "required|string|255",
            "age" => "required|integer",
            "height" => "required|integer",
            "weight" => "required|integer",
            "sex" => "required|string|255",
            "cpf" => "required|integer",
            "rg" => "required|integer",
            "team" => "required|string|255",
        ]);
        $competitor = Competitor::create($validatedData);
        return response()->json($competitor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $competitor = Competitor::find($id);
        if(!$competitor) {
            return response()->json(["message" => "Competitor Not Found"], 404);
        }
        return response()->json($competitor);
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
