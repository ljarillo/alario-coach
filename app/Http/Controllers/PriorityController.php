<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePriorityRequest;
use App\Http\Requests\UpdatePriorityRequest;
use App\Models\Priority;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $priorities = Priority::paginate();

        return view('priority.index', compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('priority.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriorityRequest $request): RedirectResponse
    {
        DB::transaction(function() use($request) {
            Priority::create([
                'plan_id' => $request->get('plan_id'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
                'description' => $request->get('description'),
                'observation' => $request->get('observation')
            ]);
        });

        return redirect()->route('priority.index');
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
    public function edit(Priority $priority)
    {
        return view('priority.edit', compact('priority'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriorityRequest $request, Priority $priority): RedirectResponse
    {
        DB::transaction(function() use($request, $priority) {
            $priority->update([
                'plan_id' => $request->get('plan_id'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
                'description' => $request->get('description'),
                'observation' => $request->get('observation')
            ]);
        });

        return redirect()->route('priority.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priority $priority): RedirectResponse
    {
        $priority->delete();
        return redirect()->route('priority.index');
    }
}
