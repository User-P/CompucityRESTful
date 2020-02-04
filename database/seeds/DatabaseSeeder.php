<?php

use App\User;
use App\Address;
use App\Brand;
use App\Category;
use App\Order;
use App\OrderDetails;
use App\PaymentMethod;
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Category::truncate();
        Brand::truncate();
        Product::truncate();
        Address::truncate();
        PaymentMethod::truncate();
        Order::truncate();

        $users = 1000;
        $categories = 20;
        $brands = 15;
        $products = 1000;
        $address = 3000;
        $paymentMethod = 100;
        $order = 100;
        $orderDetail = 500;

        factory(User::class, $users)->create();
        factory(Category::class, $categories)->create();
        factory(Brand::class, $brands)->create();
        factory(Address::class, $address)->create();
        factory(Product::class, $products)->create();
        factory(PaymentMethod::class,$paymentMethod)->create();
        factory(Order::class,$order)->create();
        factory(OrderDetails::class,$orderDetail)->create();
    }
}
