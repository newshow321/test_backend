<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\WilayahRequest;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    function get($id = null)
    {
        if (isset($id)) {
            $Wilayah = Wilayah::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $Wilayah], 200);
        } else {
            $Wilayahs = Wilayah::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $Wilayahs], 200);
        }
    }

    function store(WilayahRequest $request)
    {
        $Wilayah = Wilayah::create($request->all());
        return response()->json(['msg' => 'Data created', 'data' => $Wilayah], 201);
    }

    function update($id, WilayahRequest $request)
    {
        $Wilayah = Wilayah::findOrFail($id);
        $Wilayah->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $Wilayah], 200);
    }

    function destroy($id)
    {
        $Wilayah = Wilayah::findOrFail($id);
        $Wilayah->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
