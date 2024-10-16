<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visit;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visit = Visit::firstOrNew([]);
        $visit->incrementCount();
        return view('website.services');
    }

    
}
