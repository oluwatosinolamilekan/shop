<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        $product = new \App\Product([
            'imagePath'=> '<img src="assets/img/b.jpg" alt="">',
            'title'=>'Manicure & Pedicure',
            'description'=>'...',
            'price'=>' 22.00'
        ]);

        $product->save();


        $product = new \App\Product([
            'imagePath'=> '<img src="assets/img/b.jpg" alt="">',
            'title'=>'Manicure & Pedicure',
            'description'=>'...',
            'price'=>' 22.00'
        ]);

        $product->save();


        $product = new \App\Product([
            'imagePath'=> '<img src="assets/img/b.jpg" alt="">',
            'title'=>'Manicure & Pedicure',
            'description'=>'...',
            'price'=>' 22.00'
        ]);

        $product->save();


        $product = new \App\Product([
            'imagePath'=> '<img src="assets/img/b.jpg" alt="">',
            'title'=>'Manicure & Pedicure',
            'description'=>'...',
            'price'=>' 22.00'
        ]);

        $product->save();


        $product = new \App\Product([
            'imagePath'=> '<img src="assets/img/b.jpg" alt="">',
            'title'=>'Manicure & Pedicure',
            'description'=>'...',
            'price'=>' 22.00'
        ]);

        $product->save();

        
    }
}
