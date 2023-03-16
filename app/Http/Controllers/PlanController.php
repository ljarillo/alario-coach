<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\Patient;
use App\Models\Plan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::paginate();

        return view('plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanRequest $request): RedirectResponse
    {
        DB::transaction(function() use($request) {
            Plan::create([
                'patient_id' => $request->get('patient_id'),
                'start' => $request->get('start'),
                'end' => $request->get('end')
            ]);
        });

        return redirect()->route('patients.show', $request->get('patient_id'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanRequest $request, Plan $plan): RedirectResponse
    {
        DB::transaction(function() use($request, $plan) {
            $plan->update([
                'patient_id' => $request->get('patient_id'),
                'start' => $request->get('start'),
                'end' => $request->get('end')
            ]);
        });

        return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan): RedirectResponse
    {
        $plan->delete();
        return redirect()->route('plan.index');
    }
}
