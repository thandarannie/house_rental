<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=['manage-house','manage-rent','manage-township','manage-type,manage-user'];
        foreach ($permissions as $permission) 
        {
            Permission::create(['name'=>$permission]);
            # code...
        }
            
    }
}
