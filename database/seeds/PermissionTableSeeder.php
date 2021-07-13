<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'brand-list',
            'brand-create',
            'brand-edit',
            'brand-delete',
            'contact-list',
            'contact-delete',
            'model-list',
            'model-create',
            'model-edit',
            'model-delete',
            'repaired-car-list',
            'repaired-car-status-edit',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'service-list',
            'service-create',
            'service-edit',
            'service-delete',
            'setting-list',
            'setting-edit',
            'slider-list',
            'slider-create',
            'slider-edit',
            'slider-delete',
            'static-page-list',
            'static-page-edit',
            'testimonial-list',
            'testimonial-create',
            'testimonial-edit',
            'testimonial-delete',
            'year-list',
            'year-create',
            'year-edit',
            'year-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
