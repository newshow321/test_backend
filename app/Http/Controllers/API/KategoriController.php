<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function get($id = null)
    {
        if (isset($id)) {
            $Kategori = Kategori::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $Kategori], 200);
        } else  {
            $Kategoris = Kategori::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $Kategoris], 200);
        }
    }

    function store(KategoriRequest $request)
    {
        $Kategori = Kategori::create($request->all());
        return response()->json(['msg' => 'Data created', 'data' => $Kategori], 201);
    }

    function update($id, KategoriRequest $request)
    {
        $Kategori = Kategori::findOrFail($id);
        $Kategori->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $Kategori], 200);
    }

    function destroy($id)
    {
        $Kategori = Kategori::findOrFail($id);
        $Kategori->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
