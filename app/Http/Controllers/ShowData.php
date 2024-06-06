<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowData extends Controller
{
    public function showdata() {
        $data = DB::table('quacks')->get(); // Retrieve data from 'quack' database
        return view('welcome', compact('data')); // Pass data to 'welcome' view
    }
}
