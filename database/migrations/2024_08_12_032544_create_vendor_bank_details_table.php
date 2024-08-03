<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('vendor_bank_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string("bank_name")->nullable();
            $table->string("account_name")->nullable();
            $table->string("account_number")->nullable();
            $table->string("branch_name")->nullable();
            $table->string("branch_address")->nullable();
            $table->string("ifsc_code")->nullable();
            $table->string("upi_id")->nullable();
            $table->string("account_type")->nullable();
            $table->string("account_status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('vendor_bank_details');
    }
};
