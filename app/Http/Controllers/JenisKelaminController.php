<?php

namespace App\Http\Controllers;

use App\Models\JenisKelamin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJenisKelaminRequest;
use App\Http\Requests\UpdateJenisKelaminRequest;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res = JenisKelamin::all();
        return response()->json($res, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJenisKelaminRequest $request)
    {
        $res = JenisKelamin::create($request->all());
        return response()->json($res, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisKelamin $jenisKelamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKelamin $jenisKelamin)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisKelaminRequest $request, JenisKelamin $jenisKelamin)
    {
        $jenisKelamin->update($jenisKelamin->all());

        return response()->json($jenisKelamin);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisKelamin $jenisKelamin)
    {
        $JenisKelamin->delete();

        return response()->json(null, 204);
    }
}
