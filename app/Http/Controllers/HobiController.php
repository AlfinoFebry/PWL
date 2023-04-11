<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = HobiModel::all();
        return view('hobi.hobi') -> with('hobi', $hobi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create_hobi')
        ->with('hobi_form', url('/hobi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_hobi' => 'required|string|max:255',
        ]);

        $data = HobiModel::create($request->except('_token'));
        return redirect('/hobi')
        ->with('success', 'Data hobi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi')
        ->with('hobi', $hobi)
        ->with('hobi_form', url('/hobi/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hobi' => 'required|string|max:255,' .$id,
        ]);

        $data = HobiModel::where('id', '=', $id)->update($request->except('_token', '_method'));
        return redirect('/hobi')
        ->with('success', 'Data hobi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HobiModel::destroy($id);
        return redirect('/hobi')
        ->with('success', 'Hobi berhasil dihapus');
    }
}
