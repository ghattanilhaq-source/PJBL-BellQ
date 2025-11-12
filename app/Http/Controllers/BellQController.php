<?php

namespace App\Http\Controllers;

use App\Models\BellQ;
use Illuminate\Http\Request;

class BellQController extends Controller
{
    // ambil semua data bell
    public function index()
    {
        return response()->json(BellQ::all());
    }

    // tambah data bell baru
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'sound'   => 'required|string|max:255',
            'period'  => 'required|date_format:H:i',
        ]);

        $bellQ = BellQ::create($request->all());
        return response()->json($bellQ, 201);
    }

    // ambil satu data berdasarkan id
    public function show($id)
    {
        $bellQ = BellQ::findOrFail($id);
        return response()->json($bellQ);
    }

    // update data bell
    public function update(Request $request, $id)
    {
        $bellQ = BellQ::findOrFail($id);
        $bellQ->update($request->all());
        return response()->json($bellQ);
    }

    // hapus data bell
    public function destroy($id)
    {
        BellQ::destroy($id);
        return response()->json(null, 204);
    }
}
