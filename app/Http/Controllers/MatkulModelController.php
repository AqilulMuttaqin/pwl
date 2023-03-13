<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    //
    function index() {
        return view('matkul', [
            'matkul' => MatkulModel::all()
        ]);
    }
}
