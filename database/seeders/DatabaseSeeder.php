<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => ('$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi') // password

        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'CARTAGENA',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'COSTA RICA',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'GUATEMALA',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'ECUADOR',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'PERU',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'DOMINICA ',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'ARGENTINA',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'URUGUAY',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'MIAMI',
            'esOrigen' => false,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'NINGBO',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'SHANGHAI',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'ZHONGSHAN',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'GUANGZHOU',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'QINGDAO',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'SHENZHEN',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'JIANGMEN',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'GUANGDONG',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'NASHA',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Pais::factory()->create([
            'nombre' => 'XIAMEN',
            'esOrigen' => true,
            'activo' => true,
        ]);
        \App\Models\Agente::factory()->create([
            'nombre' => 'VANGUARD',
            'activo' => true,
        ]);
        \App\Models\Agente::factory()->create([
            'nombre' => 'TRANSTAINER',
            'activo' => true,
        ]);
        \App\Models\Agente::factory()->create([
            'nombre' => 'DSV',
            'activo' => true,
        ]);
        \App\Models\Agente::factory()->create([
            'nombre' => 'VAL',
            'activo' => true,
        ]);
        \App\Models\Agente::factory()->create([
            'nombre' => 'CONSOLCARGO',
            'activo' => true,
        ]);
    }
}
