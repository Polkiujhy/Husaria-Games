<?php

declare(strict_types=1);

namespace App\Http\Controllers\Games\InProduction;

use App\Http\Controllers\Controller;

class InProductionController extends Controller{
public function showArkona()
    {
        return view('InProduction.Arkona');
    }
public function showCyber_City()
    {
        return view('InProduction.Cyber_City');
    }
public function showPixel_Monsters()
    {
        return view('InProduction.Pixel_Monsters');
    }
}
