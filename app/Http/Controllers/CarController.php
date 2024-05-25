<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = Car::paginate(5);
        return view('oneToOne.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('oneToOne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Car::create($request->all());
        return redirect('/car');
    }

    /**
     * Display the specified resource.
     */
    
    public function show($id)
    {
        $car = Car::find($id);
        $owner = $car ? $car->owner : null;

        if (!$owner) {
            return redirect()->route('car.index')->with('error', 'Owner not found');
        }

        return view('oneToOne.show', compact('owner'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $car = Car::find($id);
        return view('oneToOne.editcar',['car'=>$car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $car = Car::find($id);
        $car->marque = $request->marque;
        $car->matricule = $request->matricule;
        $car->save();
        return redirect('/car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $car = Car::find($id);
        $car->delete();
        return redirect('/car');
    }
}