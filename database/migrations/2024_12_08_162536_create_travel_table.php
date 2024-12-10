<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('truck_id');
            $table->date('date');
            $table->string('city');
            $table->string('company');
            $table->integer('km');
            $table->string('connect_disconnect');
            $table->string('trailer_nr');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->index('truck_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel');
    }
}
