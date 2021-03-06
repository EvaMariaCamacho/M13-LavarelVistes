<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

/**
 * Class BookingController
 * @package App\Http\Controllers
 */
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::paginate();

        return view('booking.index', compact('bookings'))
            ->with('i', (request()->input('page', 1) - 1) * $bookings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookings = new Booking();
        return view('booking.create', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Booking::$rules);

        $bookings = Booking::create($request->all());

        return redirect()->route('booking.index')
            ->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::find($id);

        return view('booking.show', compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::find($id);

        return view('booking.edit', compact('bookings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $bookings)
    {
        request()->validate(Booking::$rules);

        $bookings->update($request->all());

        return redirect()->route('booking.index')
            ->with('success', 'Booking updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bookings = Booking::find($id)->delete();

        return redirect()->route('booking.index')
            ->with('success', 'Booking deleted successfully');
    }
}
