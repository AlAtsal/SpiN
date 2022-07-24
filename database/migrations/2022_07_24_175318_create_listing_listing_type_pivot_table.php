<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingListingTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_listing_type', function (Blueprint $table) {
            $table->unsignedBigInteger('listing_id')->index();
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
            $table->unsignedBigInteger('listing_type_id')->index();
            $table->foreign('listing_type_id')->references('id')->on('listing_types')->onDelete('cascade');
            $table->primary(['listing_id', 'listing_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_listing_type');
    }
}
