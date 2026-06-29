<?php

namespace Database\Seeders; 
use App\Models\Pet; 
use Illuminate\Database\Seeder; 

class DatabaseSeeder extends Seeder
{
    public function run(): void 
    { 
    // Generar 50 mascotas de prueba 
    Pet::factory(50)->create(); 
    } 
}
