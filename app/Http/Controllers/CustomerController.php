<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\ApiController;

class CustomerController extends ApiController
{
    public function index()
    {
        $customers = Customer::has('orders')->get();
        return $this->showAll($customers);
    }

    public function show($id)
    {
        $customer = Customer::has('orders')->findOrfail($id);
        return $this->showOne($customer);
    }
}
