<?php

namespace App\Http\Controllers\Divisi;

use App\Http\Controllers\Controller;
use App\Models\RequestBarang;
use App\Models\Divisi;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $divisi = $user->divisi; // Asumsikan setiap user divisi memiliki relasi ke divisi
        $requests = RequestBarang::where('divisi_id', $divisi->id)->get();
        return view('divisi.requestbarang.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('divisi.requestbarang.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $divisi = $user->divisi;

        RequestBarang::create([
            'divisi_id' => $divisi->id,
            'barang_id' => $request->barang_id,
            'jumlah' => $request->jumlah,
            'status' => 'pending',
        ]);

        return redirect()->route('divisi.request-barang.index')
                         ->with('success', 'Permintaan barang berhasil diajukan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
