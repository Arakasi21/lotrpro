<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $product = new Product([
            'imagePath' => 'https://i.harperapps.com/hcuk/covers/9780007203543/x450.JPG',
            'title' => 'The Fellowship of the Ring',
            'description' => 'Inspired by The Hobbit and begun in 1937, The Lord of the Rings is a trilogy that J.R.R. Tolkien created to provide "the necessary background of history for Elvish tongues.',
            'price' => 12
        ]);

        $product->save();

        $product = new Product([
            'imagePath' => 'https://i.harperapps.com/hcuk/covers/9780007203550/x450.JPG',
            'title' => 'Two Towers',
            'description' => 'Frodo and the Companions have been beset by danger during their quest to prevent the Ruling Ring from falling into the hands of the Dark Lord by destroying it in the Cracks.',
            'price' => 12
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://i.harperapps.com/hcuk/covers/9780261103597/x450.JPG',
            'title' => 'The Return Of The King',
            'description' => 'The Companions have become involved adventures as the quest continues. Aragorn, revealed as the hidden heir of the ancient Kings of the West.',
            'price' => 12
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://i.harperapps.com/hcuk/covers/9780261103207/x450.JPG',
            'title' => 'The Lord of the Rings Boxed Set',
            'description' => 'Immerse yourself in Middle-earth with Tolkien’s classic masterpiece, telling the complete story of Bilbo Baggins in the quest to destroy the One Ring.',
            'price' => 12
        ]);
        $product->save();

    }
}
