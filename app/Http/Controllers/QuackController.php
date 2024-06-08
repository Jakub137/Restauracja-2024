<?php

namespace App\Http\Controllers;

use App\Models\Quack;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuackRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\View\View;

class QuackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("quacks",["quacks" => Quack::with("user")->latest()->get()]);
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
    public function store(StoreQuackRequest $request): RedirectResponse
    {
        //$validated = $request->validate([
        //    'message' => 'required|string|max:255',
        //]);   

        $validated = $request->validated();
        $request->user()->quacks()->create($validated);

        Log::channel("quack")->info($validated["message"]);
        
        return redirect(route('quacks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Quack $quack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quack $quack)
    {
        //dd($quack);
        return view("components.edit", ["quack" => $quack]);

        Gate::authorize('update', $quack);
        
        return view('quacks.edit', [
            'quack' => $quack,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreQuackRequest $request, Quack $quack): RedirectResponse
    {
        Gate::authorize('update', $quack);

        //$validated = $request->validate([
        //    'message' => 'required|string|max:255',
        //]);
        $validated = $request->validated();

        $quack->update($validated);
        return redirect(route('quacks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quack $quack): RedirectResponse
    {
        Gate::authorize('delete', $quack);
        $quack->delete();
        return redirect(route("quacks.index"));
    }
}
