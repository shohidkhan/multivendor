<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorBankDetail extends Model {
    use HasFactory;
    protected $guarded = [];

    //RELATIONSHIP
    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
