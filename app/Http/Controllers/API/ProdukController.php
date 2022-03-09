<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function get($id = null)
    {
        if (isset($id)) {
            $Produk = Produk::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $Produk], 200);
        } else  {
            $Produks = Produk::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $Produks], 200);
        }
    }

    function store(ProdukRequest $request)
    {
        $Produk = Produk::create($request->all());
        return response()->json(['msg' => 'Data created', 'data' => $Produk], 201);
    }

    function update($id, ProdukRequest $request)
    {
        $Produk = Produk::findOrFail($id);
        $Produk->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $Produk], 200);
    }

    function destroy($id)
    {
        $Produk = Produk::findOrFail($id);
        $Produk->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
