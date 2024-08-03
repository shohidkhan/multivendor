<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable {
    use HasFactory;
    protected $guard = 'admin';
    protected $guarded = [];

    public function VendorBusinessDetail() {
        return $this->hasOne(VendorBusinessDetail::class);
    }

    public function VendorPersonalDetail() {
        return $this->hasOne(Vendor::class);
    }

    public function VendorBankDetail() {
        return $this->hasOne(VendorBankDetail::class);
    }
}
