<?php
use App\User;
use App\Address;
use App\Brand;
use App\Category;
use App\Order;
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

        $users = 100;
        $categories = 20;
        $brands = 15;
        $products = 500;
        $customers = 50;
        $address = 100;
        $paymentMethod = 100;
        $order = 100;

        factory(User::class,$users)->create();
        factory(Category::class,$categories)->create();
        factory(Brand::class,$brands)->create();

        // factory(Product::class,$products)->create()->each(
        //     function($producto){
        //         $categoria = Category::all()->random()->pluck('id');
        //         $producto->categories()->attach($categoria);
        //     }
        // );

        // factory(User::class,$users)->create();
        // factory(User::class,$users)->create();
        // factory(User::class,$users)->create();
    }
}
