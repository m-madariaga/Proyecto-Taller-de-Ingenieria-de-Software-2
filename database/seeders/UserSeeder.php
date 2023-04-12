<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
            $user->name             = 'admin demo';
            $user->email            = 'admin@test.cl';
            $user->password         = bcrypt('asdf1234');
            $user->tipo_de_cuenta   = 1;
        $user->save();

        $user = new User();
            $user->name             = 'analista demo';
            $user->email            = 'analista@test.cl';
            $user->password         = bcrypt('asdf1234');
            $user->tipo_de_cuenta   = 2;
        $user->save();

        $user = new User();
            $user->name             = 'trabajador demo';
            $user->email            = 'trabajador@test.cl';
            $user->password         = bcrypt('asdf1234');
            $user->tipo_de_cuenta   = 3;
        $user->save();
        
    }
}
