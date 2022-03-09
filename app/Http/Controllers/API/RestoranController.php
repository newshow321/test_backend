<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestoranRequest;
use App\Models\Restoran;
use Illuminate\Http\Request;

class RestoranController extends Controller
{
    function get($id = null)
    {
        if (isset($id)) {
            $Restoran = Restoran::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $Restoran], 200);
        } else  {
            $Restorans = Restoran::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $Restorans], 200);
        }
    }

    function store(RestoranRequest $request)
    {
        $Restoran = Restoran::create($request->all());
        return response()->json(['msg' => 'Data created', 'data' => $Restoran], 201);
    }

    function update($id, RestoranRequest $request)
    {
        $Restoran = Restoran::findOrFail($id);
        $Restoran->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $Restoran], 200);
    }

    function destroy($id)
    {
        $Restoran = Restoran::findOrFail($id);
        $Restoran->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
