<?php



namespace Database\Seeders;



use Illuminate\Database\Seeder;

use App\Models\User;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class CreateAdminUserSeeder extends Seeder

{



    public function run()

    {
        //DB::table('users')->delete();

        $user = User::create([

            'name' => 'Ali Zafer',

            'email' => 'ali@gmail.com',

            'password' => bcrypt('12345678'),

            'role_id' => ['1'],


        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
