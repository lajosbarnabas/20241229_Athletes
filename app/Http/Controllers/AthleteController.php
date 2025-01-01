<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAthleteRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $athletes = DB::table('athletes')
            ->orderBy('name')
            ->get();
        return view('athletes.index', ['athletes' => $athletes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('athletes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAthleteRequest $request)
    {
        $validated = $request->validated();
        DB::table('athletes')->insert([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'sport' => $validated['sport'],
            'country' => $validated['country'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('athletes.index')->with('success', 'Athlete added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $athlete = DB::table('athletes')->where('id', $id)->first();
        if(!$athlete){
            abort(404);
        }
        return view('athletes.show', ['athlete' => $athlete]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $athlete = DB::table('athletes')->where('id', $id)->first();
        if(!$athlete){
            abort(404);
        }
        return view('athletes.edit', ['athlete' => $athlete]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAthleteRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('athletes')
            ->where('id', $id)
            ->update([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'sport' => $validated['sport'],
            'country' => $validated['country'],
            'updated_at' => now(),
            ]);
        return redirect()->route('athletes.show', $id)->with('success', 'Athlete updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('athletes')->delete($id);
        return redirect()->route('athletes.index')->with('success', 'Athlete removed successfully');
    }

    public function search(){
        return view('athletes.search');
    }

    public function processSearch(Request $request){
        $athletes = DB::table('athletes')
            ->where('name', 'like', '%' . $request->name . '%')
            ->get();
        return view('athletes.index', ['athletes' => $athletes]);
    }
}
