<?php

namespace App\Http\Controllers\HeadGA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestBarang;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = RequestBarang::where('status', 'pending')->with(['barang', 'divisi'])->get();
        return view('headga.approval.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $requestBarang = RequestBarang::findOrFail($id);
        $requestBarang->status = 'approved';
        $requestBarang->save();

        return redirect()->route('head-ga.approval.index')
                         ->with('success', 'Permintaan barang telah disetujui.');
    }

    public function reject($id)
    {
        $requestBarang = RequestBarang::findOrFail($id);
        $requestBarang->status = 'rejected';
        $requestBarang->save();

        return redirect()->route('head-ga.approval.index')
                         ->with('success', 'Permintaan barang telah ditolak.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
