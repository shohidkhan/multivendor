<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model {
    use HasFactory;
    protected $guarded = [];
    public function VendorBusinessDetail() {
        return $this->hasOne(VendorBusinessDetail::class);
    }

    public function Vendor() {
        return $this->hasOne(Admin::class, 'vendor_id');
    }

    public function VendorBankDetail() {
        return $this->hasOne(VendorBankDetail::class);
    }
}
