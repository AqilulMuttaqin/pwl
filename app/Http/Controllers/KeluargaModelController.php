<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index() {
        $keluarga = KeluargaModel::all();
        return view('keluarga.keluarga', [
            'keluarga' => $keluarga
        ]);
    }

    public function create()
    {
        return view('keluarga.create_keluarga')
                ->with('url_form',url('/keluarga'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:keluarga,id',
            'nama' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:Perempuan,Laki-laki',
            'tgl_lahir' => 'required|date',
            'status' => 'required|string|max:20',
        ]);
        $data = KeluargaModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('keluarga.create_keluarga')
                ->with('keluarga', $keluarga)
                ->with('url_form', url('/keluarga/'. $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:keluarga,id,'.$id,
            'nama' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:Perempuan,Laki-laki',
            'tgl_lahir' => 'required|date',
            'status' => 'required|string|max:20',
        ]);
        $data = KeluargaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Diedit');
    }

    public function destroy($id)
    {
        KeluargaModel::where('id', '=', $id)->delete();
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Dihapus');
    }
}
