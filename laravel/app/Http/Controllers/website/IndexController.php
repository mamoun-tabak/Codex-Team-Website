<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visit;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $visit = Visit::firstOrNew([]);
            $visit->incrementCount();
        }
        return(view('website.index'));
    }

    

    

    

    


}
