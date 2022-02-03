<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentStatusAndMidtransUrlAndMidtransBookingCodeInCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->after('camp_id', function ($table) {
                $table->string('payment_status', 100)->default('Menunggu');
                $table->string('midtrans_url')->nullable();
                $table->string('midtrans_booking_code')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
        $table->dropColumn(['payment_status','midtrans_url','midtrans_booking_code']);
        });
    }
}
