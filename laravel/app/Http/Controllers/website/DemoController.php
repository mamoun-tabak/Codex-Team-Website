<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visit;

class DemoController extends Controller
{
    public function index(){
        $visit = Visit::firstOrNew([]);
        $visit->incrementCount();
        return view('website.demo');
    }
}
