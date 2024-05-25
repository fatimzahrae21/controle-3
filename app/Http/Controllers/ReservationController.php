<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    
    public function __construct()
    {
        $this->authorizeResource(Reservation::class, 'reservation');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        $this->authorize('view', $reservation);
        return view('reservations.show', compact('reservation'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $reservation = Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    public function edit(Reservation $reservation)
    {
        $this->authorize('update', $reservation);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $this->authorize('update', $reservation);
        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $this->authorize('delete', $reservation);
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}

