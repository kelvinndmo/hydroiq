<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;
use App\Manufacturer;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Device::with("manufacturer")->paginate(20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'manufacturer_id' => 'required',
        ]);
        return response()->json(["data" => Device::create($validatedData)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Device $smart_device)
    {
        return response()->json(["data" => $smart_device::with("manufacturer")->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $smart_device)
    {
        $description = $request->input("description");
        $manufacturer_id =  $request->input("manufacturer_id");

   
        $smart_device->description  = $description;
        // handle 404
        $smart_device->manufacturer_id = $manufacturer_id;
        $smart_device->save();
        return response()->json(["data" => $smart_device]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $smart_device)
    {
        $smart_device->delete();
        return response()->json(["status" => "deleted"]);
    }

    public function manufacturers()
    {
        return Manufacturer::paginate(20);
    }
}
