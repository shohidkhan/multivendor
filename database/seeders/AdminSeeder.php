<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $AdminInsert = [
            'id' => 2,
            "name" => "John Doe",
            "type" => "vendor",
            "mobile" => "01883633212",
            "email" => "john@doe.com",
            "password" => '$2a$12$WGvXBOW.Z1WPwdcYjkqDpukBZb1oo.mLJT9Bu/12XZt722YJS.Blq',
            "vendor_id" => 1,
            "status" => 0,
            "image" => "",
        ];
        Admin::insert($AdminInsert);
    }
}
