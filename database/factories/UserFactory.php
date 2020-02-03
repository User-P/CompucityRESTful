<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use App\Brand;
use App\Category;
use App\Customer;
use App\Order;
use App\PaymentMethod;
use App\Product;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'admin' => $faker->randomElement([User::ADMIN,User::NO_ADMIN])

    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
        'image' => $faker->imageUrl(),
    ];
});

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
        'image' => $faker->imageUrl(),
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->price(),
        'description' => $faker->paragraph(1),
        'image' => $faker->imageUrl(),
        'category_id' => Category::all()->random()->id,
        'brand_id' => Brand::all()->random()->id,
        'quantity_stock' => $faker->numberBetween(1,10),
        'status' => $faker->randomElement(Product::PRODUCT_NOT_AVAILABLE,Product::PRODUCT_AVAILABLE)
    ];
});

$factory->define(Address::class, function (Faker $faker) {
    return [
        'reference_name' => $faker->word,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'number' => $faker->numberBetween(1,999),
        'country' => $faker->country,
        'postal_code' => $faker->numberBetween(10000,99999),
        'customer_id' => Customer::inRandomOrder()->first()->id,
    ];
});

$factory->define(PaymentMethod::class, function (Faker $faker) {
    return [
        'clave' => $faker->creditCardNumber,
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    return [
        'total' => $faker->price(),
        'customer_id' => Customer::inRandomOrder()->first()->id,
        'address_id' => Address::inRandomOrder()->first()->id,
        'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id,
        'status' => $faker->randomElement(Order::SENT,Order::DELIVERED,Order::CALCELLED,Order::RETURNED)
    ];
});
