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
            $table->string('payment_status', 100)->default('Menunggu Pembayaran')->after('camp_id');
            $table->string('midtrans_url')->nullable()->after('payment_status');
            $table->string('midtrans_booking_code')->nullable()->after('midtrans_url');
            // $table->after('camp_id', function ($table) {
            // });
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
