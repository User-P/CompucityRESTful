<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::has('orders')->get();
        return response()->json(['data' => $customers], 200);
    }

    public function show($id)
    {
        $customer = Customer::has('orders')->findOrfail($id);
        return response()->json(['data' => $customer], 200);
    }
}
