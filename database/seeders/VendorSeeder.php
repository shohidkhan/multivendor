<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $vendorInsert = [
            "id" => 1,
            "name" => "John Doe",
            "mobile" => "01883633212",
            "email" => "john@doe.com",
            "country" => "Bangladesh",
            "city" => "Dhaka",
            "address" => "Zigatola",
            "pincode" => "1205",
            "status" => 0,
        ];

        Vendor::insert($vendorInsert);
    }
}
