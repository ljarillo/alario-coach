<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriorityRequest;
use App\Http\Requests\UpdatePriorityRequest;
use App\Models\Priority;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriorityRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Priority $priority): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priority $priority): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriorityRequest $request, Priority $priority): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priority $priority): RedirectResponse
    {
        //
    }
}
