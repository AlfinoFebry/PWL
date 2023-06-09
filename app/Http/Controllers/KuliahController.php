<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuliah = MataKuliahModel::all();
        return view('kuliah.kuliah') -> with('mk', $kuliah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuliah.create_kuliah')
        ->with('kuliah_form', url('/kuliah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama_matkul' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
        ]);

        $data = MataKuliahModel::create($request->except('_token'));
        return redirect('/kuliah')
        ->with('success', 'Data mata kuliah berhasil ditambahkan');
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
        $kuliah = MataKuliahModel::find($id);
        return view('kuliah.create_kuliah')
        ->with('mk', $kuliah)
        ->with('kuliah_form', url('/kuliah/'.$id));
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
        $request -> validate([
            'nama_matkul' => 'required|string|max:255',
            'hari' => 'required|string|max:255',
        ]);

        $data = MataKuliahModel::where('id', '=', $id)->update($request->except('_token', '_method'));
        return redirect('/kuliah')
        ->with('success', 'Data mata kuliah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliahModel::destroy($id);
        return redirect('/kuliah')
        ->with('success', 'Data mata kuliah berhasil dihapus');
    }
}
