<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;

class yuhuContrller extends Controller
{
    public function GetAlamat ()
    {
        $provincies = Province::all();
        $districts = District::all();
        $regencies = Regency::all();
        $villages = Village ::all();

        //kecamatan
        $dis = $provinces->districts;
        //kabupaten
        $reg = $provincies -> regencies;
    }

    public function Getkode()
    {
        
    }
}
