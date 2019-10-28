<?php

namespace App\Http\Controllers;

use App\Car_manager;
use Illuminate\Http\Request;

class CarManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car_manager::all();
        return view('cars.list', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car_manager();
        $car->Car_name = $request->input('car_name');
        $car->Origin = $request->input('origin');
        $car->Vendor = $request->input('vendor');
        $car->Amount = $request->input('amount');
        $car->save();
        return redirect()->route('cars.list');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Car_manager $car_manager
     * @return \Illuminate\Http\Response
     */
    public function show(Car_manager $car_manager)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Car_manager $car_manager
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car_manager::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Car_manager $car_manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $car = Car_manager::findOrFail($id);
        $car->Car_name = $request->input('car_name');
        $car->Origin = $request->input('origin');
        $car->Vendor = $request->input('vendor');
        $car->Amount = $request->input('amount');
        $car->save();
        return redirect()->route('cars.list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Car_manager $car_manager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car_manager::findOrFail($id);
        $car->delete();
        return  redirect()->route('cars.list');
    }
}
