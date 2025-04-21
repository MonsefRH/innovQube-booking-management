<?php 
namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        Property::create([
            'name' => 'Beach Villa',
            'description' => 'A cozy villa by the sea.',
            'price_per_night' => 150.00,
        ]);
        Property::create([
            'name' => 'Mountain Cabin',
            'description' => 'A rustic cabin in the mountains.',
            'price_per_night' => 100.00,
        ]);
    }
}