<?php

namespace App\Http\Controllers;

use App\Mail\HouseMessage;
use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use app\Mail\BerichtWoning;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $houses = House::all();
        return view('AllHouses', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('createHouse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



     $data = $request->all();



        $imageName = time().'.'.$data['image']->getClientOriginalExtension();
        $data['image']->move(public_path('storage/images'), $imageName);

        $house = new House($data);
        $house->image = $imageName;
	$house->surface = $request->surface;
        $house->pets_allowed = $request->has('pets_allowed');
        $house->smoking_allowed = $request->has('smoking_allowed');
        $house->garden = $request->has('garden');
        $house->balcony = $request->has('balcony');
        $house->furnished = $request->has('furnished');
        $house->rent_with_extra_costs = $request->has('rent_with_extra_costs');
        $house->save();




        return response($house, 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {


        return view('house', compact('house'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
    }

    public function uploadImages(Request $request)
    {
        foreach ($request->file('file') as $foto) {
            $random_int = random_bytes('6');
            $random_image = bin2hex($random_int);
            $foto_id = $random_image.'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('storage/images'), $foto_id);
           $image = new Image();
              $image->path = $foto_id;
                $image->house_id = $request->house_id;
           $image->save();
        }
    }

    public function sendMessage(Request $request)
    {
        //function to send an email with the submitted data
        $data = $request->all();
        $house = House::find($data['house_id']);
        Mail::to('info@verschoorautomatisering.nl')->send(new HouseMessage($data, $house));
        return response($data, 200)
            ->header('Content-Type', 'text/plain');
    }

}
