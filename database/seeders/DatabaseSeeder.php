<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bar;
use App\Models\Foo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Foo::factory()
            ->hasAttached(
                Bar::factory(),
                [
                    'pivot_attribute' => [
                        'en' => 'english value',
                        'fr' => 'french value',
                ]
            ])
            ->create();
    }
}
