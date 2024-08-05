<?php

namespace App\Http\Controllers;
use App\Charts\TamuBulananChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $chart = new TamuBulananChart;
        return view('dashboard', ['chart' => $chart]);
    }
}
