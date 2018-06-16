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
            'imagePath' => 'https://www.freedombikeshop.com/images/library/zoom/specialized-turbo-levo-ht-comp-6fattie-262935-1.jpg',
            'title' => 'Mountain Bike',
            'description' => 'The Turbo Levo Hardtail Comp 6Fattie has all of the speed and nimble handling that Specialized hardtails are known for—only with a sophisticated Turbo boost. The result is a bike that features all of their hallmark mountain bike design for a confident, nimble, and efficient ride, while offering a powerful Turbo technology with a pedal-assist motor, so you can ditch the lift and leave the shuttle truck at the trail head.',
            'price' => '34000'
        ]);
        $product->save(); 

        $product = new \App\Product([
            'imagePath' => 'https://www.freedombikeshop.com/images/library/zoom/specialized-roubaix-elite-276818-1.jpg',
            'title' => 'Specialized Roubaix Elite',
            'description' => 'When you are rolling smoother, you are rolling faster. And regardless of if you are on the cobbles of Northern France or the chip and seal of your hometown, you wll benefit immensely from Specializeds Roubaix Elite.',
            'price' => '21400'
        ]);
        $product->save(); 

        $product = new \App\Product([
            'imagePath' => 'https://www.freedombikeshop.com/images/library/zoom/specialized-p.3-pro-273531-1.jpg',
            'title' => 'Specialized P.3 Pro',
            'description' => 'Specializeds P.3 Pro has an enviable lineage. It has been, and still is, ridden by some of the best slopestyle, freeride, and progressive athletes in the game.',
            'price' => '13200'
        ]);
        $product->save(); 

        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_C/orgid_26/thumbs/328964_2936445.jpg',
            'title' => 'Cube',
            'description' => 'The Stereo Hybrid 120 EXC is already something of a legend in its own lifetime, but that wasn not enough for our designers. Cube has increased tyre clearance so that it will accept up to a 2.6 inch width for ultimate grip and comfort.',
            'price' => '21450'
        ]);
        $product->save(); 

        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_R/orgid_33/thumbs/383205_3312909.jpg',
            'title' => 'Radon',
            'description' => 'A high-end package for individualists. Fox Float 34 Factory forks with 150mm travel in boost format paired with the Fox Float DPS Factory air damper – both with three adjustable damper modes and the high-quality Kashima coating.',
            'price' => '41999'
        ]);
        $product->save(); 

        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_R/orgid_33/thumbs/401751_3318336.jpg',
            'title' => 'Radon Slide Hybrid',
            'description' => 'Concerted power uphill using Bosch is strongest motor – the Performance CX with 75 Nm of torque – and maximum range provided by the 500 Wh battery, deliver the perfect basis for fun on the trail on our Slide Hybrid 140 9.0 e-fully.',
            'price' => '29999'
        ]);
        $product->save(); 

        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_S/orgid_406/thumbs/338196_2991155.jpg',
            'title' => 'SE Bikes OM-DURO',
            'description' => 'To celebrate the life and times of SE’s founder, Scot Breithaupt, and SE’s motto of “BMX Innovations,” we created a bike like you’ve never seen before.',
            'price' => '17000'
        ]);
        $product->save(); 
        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_F/orgid_378/thumbs/349395_3092494.jpg',
            'title' => 'Felt F65X – Cyclocross Bike',
            'description' => 'The F65x is cyclocross race-ready but can do double duty for those rainy commute days.',
            'price' => '19000'
        ]);
        $product->save(); 
        
        $product = new \App\Product([
            'imagePath' => 'https://cdn.bike-discount.de/media/org/orgb_F/orgid_378/thumbs/350059_3087251.jpg',
            'title' => 'Felt FR5 – Road Bike Carbon',
            'description' => 'Featuring the same meticulously honed tube shapes and performance-oriented profiles as the other carbon models in the FR Series, the FR5’s tuned chassis provides the optimal balance of stiffness and suppleness.',
            'price' => '25899'
        ]);
        $product->save(); 

        
    }
}
