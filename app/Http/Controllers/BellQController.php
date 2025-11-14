<?php

namespace App\Http\Controllers;

use App\Models\BellQ;
use Illuminate\Http\Request;

class BellQController extends Controller
{
    // Ambil semua data bell
    public function index()
    {
        return response()->json(BellQ::all());
    }

    // Tambah data bell baru
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'sound'   => 'nullable|string|max:255',
            'start_time'  => 'required|date_format:H:i',
            'end_time'    => 'required|date_format:H:i',
        ]);
        // dd ($request->validate());

        $bellQ = BellQ::create($request->all());
        return redirect ("/");
    }

    // Ambil satu data berdasarkan id
    public function show($id)
    {
        $bellQ = BellQ::findOrFail($id);
        return response()->json($bellQ);
    }

    // Update data bell
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject' => 'sometimes|string|max:255',
            'sound'   => 'sometimes|string|max:255',
            'start_time'  => 'sometimes|date_format:H:i',
            'end_time'    => 'sometimes|date_format:H:i',
        ]);

        $bellQ = BellQ::findOrFail($id);
        $bellQ->update($request->all());

        return response()->json($bellQ);
    }

    // Hapus data bell
    public function destroy($id)
    {
        BellQ::destroy($id);
        return response()->json(null, 204);
    }
}
