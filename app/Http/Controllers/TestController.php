<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $owner = Owner::find(12);
        print_r(json_encode($owner->car));
    }
}
