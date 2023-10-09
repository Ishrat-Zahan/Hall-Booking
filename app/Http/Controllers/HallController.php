<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Http\Requests\StoreHallRequest;
use App\Http\Requests\UpdateHallRequest;
use Inertia\Inertia;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hall = Hall::all();
        return view('hall.all',['hall' => $hall]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('hall.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHallRequest $request)
    {
        $data = [
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'capacity' => $request->capacity,
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads');
            $data['image'] = $path;
        }

        $hall = Hall::create($data);

        return redirect()->route("hall.index")->with("success", "Hall saved successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $hall)
    {
        return Inertia::render('Details',['hall'=>$hall]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hall $hall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHallRequest $request, Hall $hall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
        if (Hall::destroy($hall->id)) {
            return redirect("hall")->with("success", "Successfully Deleted");
        }
    }
}
