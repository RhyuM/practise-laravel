<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);

        $admin = factory(App\Admin::class)->create([
            'first_name' => 'KZ',
            'last_name' => 'Ramos',
            'middle_name' => 'Valle',
            'email' => 'bac@gmail.com',
            'password' => bcrypt('ryanmags23'),
            'role' => 'BAC',
            'remember_token' => Str::random(1),
        ]);

        $admin = factory(App\Admin::class)->create([
            'first_name' =>'Eva' ,
            'last_name' => 'Ortiga',
            'middle_name' => 'Bahian',
            'email' => 'twg@gmail.com',
            'password' => bcrypt('ryanmags23'),
            'role' => 'BAC',
            'remember_token' => Str::random(1),
        ]);

        $user = factory(App\User::class)->create([
            'first_name' => 'Ryan',
            'last_name' => 'Maglangit',
            'middle_name' => 'Magsayo',
            'email' => 'ryanmaglangit6@gmail.com',
            'password' => bcrypt('ryanmags23'),
            'company_name' => 'Salusciens',
            'address' => 'Matangad',
            'philgeps_certificate' => asset('dist/img/avatar2.png'),
            'account_status' => '1',
            'remember_token' => Str::random(1),
        ]);

    }
}
