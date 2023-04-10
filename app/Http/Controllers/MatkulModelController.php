<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index() {
        $matkul = MatkulModel::all();
        return view('matkul.matkul', [
            'matkul' => $matkul
        ]);
    }

    public function create()
    {
        return view('matkul.create_matkul')
                ->with('url_form',url('/matkul'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:matkul,id',
            'nama_matkul' => 'required|string|max:50',
            'sks' => 'required|int|max:11',
            'jam' => 'required|int|max:11',
        ]);
        $data = MatkulModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('matkul')
            ->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        return view('matkul.create_matkul')
                ->with('matkul', $matkul)
                ->with('url_form', url('/matkul/'. $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:matkul,id,'.$id,
            'nama_matkul' => 'required|string|max:50',
            'sks' => 'required|int|max:11',
            'jam' => 'required|int|max:11',
        ]);
        $data = MatkulModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matkul')
            ->with('success', 'Mata Kuliah Berhasil Diedit');
    }

    public function destroy($id)
    {
        MatkulModel::where('id', '=', $id)->delete();
        return redirect('matkul')
            ->with('success', 'Mata Kuliah Berhasil Dihapus');
    }
}
