<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    public function index() {
        $hobi = HobiModel::all();
        return view('hobi.hobi', [
            'hobi' => $hobi
        ]);
    }

    public function create()
    {
        return view('hobi.create_hobi')
                ->with('url_form',url('/hobi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:hobi,id',
            'daftar_hobi' => 'required|string|max:30',
        ]);
        $data = HobiModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi')
                ->with('hobi', $hobi)
                ->with('url_form', url('/hobi/'. $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|int|max:20|unique:hobi,id,'.$id,
            'daftar_hobi' => 'required|string|max:30',
        ]);
        $data = HobiModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Diedit');
    }

    public function destroy($id)
    {
        HobiModel::where('id', '=', $id)->delete();
        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Dihapus');
    }
}
