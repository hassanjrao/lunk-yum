<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class AdminPlanController extends Controller
{
    public function index()
    {
        $plans = Plan::latest()->get();

        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plan=null;

        return view('admin.plans.add_edit', compact('plan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'days'=>'required|integer',
            'price'=>'required|numeric',
            'description'=>'nullable'
        ]);

        Plan::create([
            'name' => $request->name,
            'days'=>$request->days,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.plans.index')->withToastSuccess('Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);

        return view('admin.plans.add_edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);


        $request->validate([
            'name' => 'required',
            'days'=>'required|integer',
            'price'=>'required|numeric',
            'description'=>'nullable'
        ]);

        $plan->update([
            'name' => $request->name,
            'days'=>$request->days,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

        return redirect()->route('admin.plans.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();

        return back()->withToastSuccess('Deleted successfully');
    }
}
