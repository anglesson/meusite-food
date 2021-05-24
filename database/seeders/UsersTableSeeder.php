<?php

namespace Database\Seeders;

use App\Models\{
    Tenant,
    User
};
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();
        $tenant1 = Tenant::first();
        $tenant2 = Tenant::first();

        $tenant->users()->create([
            'name' => 'Anglesson Araujo',
            'email' => 'anglesson@outlook.com',
            'password' => bcrypt('@Meusite2021'),
        ]);
        
        $tenant1->users()->create([
            'name' => 'Jefferson Ramos',
            'email' => 'jefferson.ramos@outlook.com',
            'password' => bcrypt('@Meusite2021'),
        ]);

        $tenant2->users()->create([
            'name' => 'Roberto Vieira',
            'email' => 'roberto.vieira@outlook.com',
            'password' => bcrypt('@Meusite2021'),
        ]);
    }
}
