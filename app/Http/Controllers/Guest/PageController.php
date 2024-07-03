<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = config("data");

        return view("home", $data);
    }
    public function trainsInfo()
    {
        $trains = Train::all();
        $data = [
            "store" => config("data"),
            "trains" => $trains
        ];
        return view("trainsInfo", $data);
    }
}
