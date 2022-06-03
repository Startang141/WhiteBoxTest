<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = array(
            array('name' => 'Cort AD-810-OP Acoustic Guitar', 
            'category_id' => '1',
            'description' => 'Cort’s oldest acoustic series, the Standard Series defines superb performance and value for the money.',
            'price' => 1110000,
            'stock' => '15',
            'rating' => 4.5,
            'image' => 'gitar1.jpg'),
            array('name' => 'Cort CR100 Electric Guitar', 
            'category_id' => '1',
            'description' => 'The Classic Rock Series delivers the look, feel and performance of the much sought-after vintage instruments from the Golden Era of electric guitars.',
            'price' => 2710000,
            'stock' => '14',
            'rating' => 4.6,
            'image' => 'gitar2.jpg'),
            array('name' => 'Fender Grace VanderWaal Moonlight Soprano Ukulele', 
            'category_id' => '1',
            'description' => 'Grace-fully packed uke is dressed to impress.Inspired by the soprano.',
            'price' => 1650000,
            'stock' => '20',
            'rating' => 4.5,
            'image' => 'gitar3.jpg'),
            array('name' => 'Behringer XD8USB 8-Piece Electronic Drum Set', 
            'category_id' => '2',
            'description' => 'Behringer XD8USB 8-piece Electronic Drum Set Features: 8-piece electronic drum set with HDS110USB.',
            'price' => 5750000,
            'stock' => '5',
            'rating' => 4.7,
            'image' => 'drum1.jpg'),
            array('name' => 'Roland SPD-30-BK Octa Pad Total Percussion Pad', 
            'category_id' => '2',
            'description' => 'Roland Octapad SPD-30 Drum Controller Features:Eight large, touch-sensitive pads Uses the latest V-Drums.',
            'price' => 10300000,
            'stock' => '10',
            'rating' => 4.6,
            'image' => 'drum2.jpg'),
            array('name' => 'Roland SPD-SX Sampling Pad', 
            'category_id' => '2',
            'description' => 'Roland SPD-SX Sampling Percussion Pad Features: Huge selection of dynamic sounds and controlled by highly responsive.',
            'price' => 10300000,
            'stock' => '11',
            'rating' => 4.5,
            'image' => 'drum3.jpg'),
            array('name' => 'Yamaha YFL-212 Flute', 
            'category_id' => '3',
            'description' => 'Yamaha YFL-212 Transverse Flute True to the motto "The Best Student Flute just got Better" Yamaha presents the 200, 300 and 400 series.',
            'price' => 7450000,
            'stock' => '10',
            'rating' => 4.7,
            'image' => 'tiup1.jpg'),
            array('name' => 'Yamaha Soprano Saxophone YSS-875EX', 
            'category_id' => '3',
            'description' => 'The Custom EX represents one answer to Yamaha’s pursuit of the ideal saxophone sound',
            'price' => 89610000,
            'stock' => '5',
            'rating' => 4.6,
            'image' => 'tiup2.jpg'),
            array('name' => 'Suzuki 1072-E Folk Master 10-Hole Harmonica', 
            'category_id' => '3',
            'description' => 'The Suzuki Folkmaster harmonica is both easy to play and economical to purchase.',
            'price' => 99000,
            'stock' => '15',
            'rating' => 4.5,
            'image' => 'tiup3.jpg'),
            array('name' => 'Cort CR200 Electric Guitar', 
            'category_id' => '1',
            'description' => 'The Classic Rock Series delivers the look, feel and performance of the much sought-after vintage instruments from the Golden Era of electric guitars',
            'price' => 3830000,
            'stock' => '10',
            'rating' => 4.6,
            'image' => 'banner1.jpg'),
            array('name' => 'Yamaha Drum Rydeen Set', 
            'category_id' => '2',
            'description' => 'The level of equipment and manufacturing techniques found in Yamaha’s Rydeen 5-Piece Drum Set easily equals that of kits costing hundreds more.',
            'price' => 10990000,
            'stock' => '6',
            'rating' => 4.7,
            'image' => 'banner2.jpg'),
            array('name' => 'Yamaha YSL-891Z Trombone', 
            'category_id' => '3',
            'description' => 'Student trombones need to be reliable and well made due to the importance of the slides.',
            'price' => 45640000,
            'stock' => '5',
            'rating' => 4.5,
            'image' => 'banner3.jpg')

        );

        DB::table('products')->insert($product);
    }
}
