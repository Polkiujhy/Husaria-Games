<?php

declare(strict_types=1);

namespace App\Http\Controllers\Games\Produced;

use App\Http\Controllers\Controller;

class ProducedController extends Controller{
public function showWood()
    {
        return view('Produced.WoodCutter');
    }
public function showSpace()
    {
        return view('Produced.Space');
    }
public function showSpaceshooter()
    {
        return view('Produced.Spaceshooter');
    }
}
