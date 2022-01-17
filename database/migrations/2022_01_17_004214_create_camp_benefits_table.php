<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();

            //Cara Ke - 1
            // $table->bigInteger('camp_id')->unsigned();
            //atau
            // $table->unsignedBigInteger('camp_id');

            //Cara Ke - 2
            $table->foreignId('camp_id')->constrained('camps');

            $table->string('name');
            $table->timestamps();
            $table->softDeletes();

            //Cara ke-1
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
