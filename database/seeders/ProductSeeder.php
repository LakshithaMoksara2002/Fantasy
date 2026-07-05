<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // High-quality Unsplash images representing outdoor gear and backpacks
        $productImages = [
            "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1502236876560-243e78f715f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1581028359762-b91c062c3bfa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1579811205370-136fa2a10619?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1615526685116-2fb9bb6e22ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80",
            "https://images.unsplash.com/photo-1518177303021-3957ce3286f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
        ];
        
        $categories = ["Daypacks", "Expedition", "Tactical", "Camping", "Accessories"];
        $adjectives = ["Waterproof", "Canvas", "Heavy-Duty", "Summit", "Explorer", "Alpine", "Nomad", "Rugged", "Scout", "Trail"];
        $nouns = ["Backpack", "Rucksack", "Daypack", "Duffel Bag", "Tent", "Carabiner", "Boots", "Flask", "Compass", "Jacket"];

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'title' => $adjectives[array_rand($adjectives)] . ' ' . $nouns[array_rand($nouns)],
                'category' => $categories[array_rand($categories)],
                'price' => round(mt_rand(4900, 39900) / 100, 2),
                'image_url' => $productImages[array_rand($productImages)]
            ]);
        }
    }
}
