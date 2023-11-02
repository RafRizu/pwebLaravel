<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $superadmin=User::create([
            'name'=> 'superadmin',
            'email'=>'superadmin@test.com', 'password'=>bcrypt('hehehehe')
        ]);
        $superadmin->assignRole('superadmin');
        $admin=User::create([
            'name'=> 'admin',
            'email'=>'admin@test.com', 'password'=>bcrypt('hehehehe')
        ]);
        $admin->assignRole('admin');
        $user=User::create([
            'name'=> 'user',
            'email'=>'user@test.com', 'password'=>bcrypt('hehehehe')
        ]);
        $admin->assignRole('user');


        // gweh
        $test=User::create([
            'name'=> 'RafRizu',
            'email'=>'thisrafi10@gmail.com', 'password'=>bcrypt('hehehehe')
        ]);
        $admin->assignRole('superadmin');
    }
}
