<?php

declare(strict_types=1);

namespace App\Http\Controllers\Symulation;

use App\Http\Controllers\Controller;

class SymulationController extends Controller
{
    public function __invoke(){
    return view('Symulation.AtomLife');
    }
}
