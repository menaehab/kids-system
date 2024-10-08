<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Grade;
use App\Http\Requests\StoreKidRequest;
use App\Http\Requests\UpdateKidRequest;
use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kids = Kid::paginate(10);
        return view('kids.pages.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kids.pages.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKidRequest $request)
    {
        $data = $request->validated();
        Kid::create($data);
        return redirect()->route('kids.index')->with('success', __('keywords.success_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kid $kid)
    {
        return view('kids.pages.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kid $kid)
    {
        return view('kids.pages.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKidRequest $request, Kid $kid)
    {
        $data = $request->validated();
        $kid->update($data);
        return redirect()->route('kids.index')->with('success', __('keywords.success_edited'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kid $kid)
    {
        $kid->delete();
        return redirect()->route('kids.index')->with('success', __('keywords.success_deleted'));
    }

    public function grade(Grade $grade)
    {
        $kids = Kid::where('grade_id', $grade->id)->paginate(10);
        return view('kids.pages.grade', get_defined_vars());
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $kids = Kid::where('name', 'like', "%{$query}%")->paginate(10);
        return view('kids.pages.index', compact('kids'));
    }
    public function points(Kid $kid)
    {
        return view('kids.pages.points', get_defined_vars());
    }
    public function pointsUpdate(Request $request, Kid $kid)
    {
        $request->validate([
            'points' => 'required|integer|min:1',
        ]);
        $points = $request->input('points');
        if ($request->input('action') == 'add') {
            $kid->points += $points;
        } elseif ($request->input('action') == 'subtract') {
            $kid->points = $kid->points - $points;
        }
        $kid->save();
        return redirect()->route('kids.index', $kid)
            ->with('success', __('keywords.points_updated'));
    }

}
