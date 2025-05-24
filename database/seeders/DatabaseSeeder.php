<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $newCategory = new Category();
        // $newCategory->name = "Health";
        // $newCategory->save();

        // dump(Category::all()->toArray());

        // $newProduct =  new Product();
        // $newProduct->name = "Band-Aods";
        // $newProduct->category()->associate($newCategory);
        // $newProduct->save();   

        $productsByCategory = [
            'health' => [
                'Band-Aods',
                'Bbay Powrder',
                'Oil libya'
            ],
            'tech' => [
                'Mysql-workbench',
                'Python',
                'Golang'
            ],
            'books' => [
                'Atlas',
                'lapyy',
                'comics'
            ]
            ];

            foreach($productsByCategory as $categoryName => $products){
                $newCategory = new Category();
                $newCategory->name = $categoryName;
                $newCategory->save();

                foreach($products as $product){
                    $newProduct = new Product();
                    $newProduct->name = $product;
                    $newProduct->category()->associate($newCategory);
                    $newProduct->save();
                }
            }
        // dump(Category::all()->toArray());
        // dump(Product::all()->toArray());
    }
}
