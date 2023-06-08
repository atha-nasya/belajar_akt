<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnalumum_model;

class JurnalumumController extends Controller
{
    public function index(){
        $myjurnal = new Jurnalumum_model();
        $jurnal   = $myjurnal->tampil_jurnal();
        //dd($jurnal);
        $data = array('jurnal' => $jurnal);
        return view('jurnalumum/index', $data);

    }
}
