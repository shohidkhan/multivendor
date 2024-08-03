<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('vendor_business_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string("shop_name")->nullable();
            $table->string("shop_email")->nullable();
            $table->string("shop_country")->nullable();
            $table->string("shop_city")->nullable();
            $table->string("shop_address")->nullable();
            $table->string("shop_pincode")->nullable();
            $table->string("shop_number")->nullable();
            $table->string("shop_license_number")->nullable();
            $table->string("shop_mobile_number")->nullable();
            $table->string("shop_website_url")->nullable();
            $table->string("shop_facebook_url")->nullable();
            $table->string("shop_instagram_url")->nullable();
            $table->string("shop_twitter_url")->nullable();
            $table->string("shop_youtube_url")->nullable();
            $table->string("shop_whatsapp_number")->nullable();
            $table->string("gst_number")->nullable();
            $table->string("pan_number")->nullable();
            $table->string("nid_front")->nullable();
            $table->string("nid_back")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('vendor_business_details');
    }
};
