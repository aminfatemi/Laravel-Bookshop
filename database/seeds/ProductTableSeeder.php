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
        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/a-story-that-matters_2.jpg',
            'title' => 'A Story That Matters, GINA L. CARROLL',
            'description' => 'Start with telling the stories of your own life. ',
            'price' => 10.5
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/harmless-like-you_978-1-324-00074-7_2.jpg',
            'title' => 'Harmless Like You, Norman Hiouwes',
            'description' => 'Stunning story of a japanese girl fighting for her artistic dreams',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x719/all-grown-up_2.jpg',
            'title' => 'All Grown Up, JAMI ATTENBURG',
            'description' => 'A humbling story of a woman in pursuit of her life!',
            'price' => 35
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/gallery-1490216845-bad-little-girl-cover.jpg',
            'title' => 'Bad Little Girl, FRANCIS VICK',
            'description' => 'I found the movies to be better ...',
            'price' => 12.75
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/light-radiance-splendor_2.jpg',
            'title' => 'Light Radience Splendor, LEAH CHAEETIN',
            'description' => 'I found the movies to be better ...',
            'price' => 16.99
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/confessions-of-a-domestic-failure_2.jpg',
            'title' => 'Confession of a Domestic Failure, BUNMI LADITAN',
            'description' => 'Calling all mothers of the world!',
            'price' => 20.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/every-wild-heart_2.jpg',
            'title' => 'Every Wild Heart, MAGGI DONOVANN',
            'description' => 'Fame always comes with a price',
            'price' => 21.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/exit-west-us_2.jpg',
            'title' => 'Exit West, MOHSEN HAMID',
            'description' => 'His country is on the verge of a civic war!',
            'price' => 11.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://rbk.h-cdn.co/assets/17/12/480x720/goodnight-from-london_2.jpg',
            'title' => 'Good Night From London, JENNIFER ROBSON',
            'description' => 'World war 2 from london by a journalist!',
            'price' => 17.99
        ]);
        $product->save();
    }

}
