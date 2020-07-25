<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use DB;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->string('gname', 50)->nullable(false);
            $table->string('mname', 50)->nullable(false);
            $table->string('lname', 50)->nullable(false);
            $table->string('fname', 100)->nullable(false);
            $table->string('aadhaar', 12)->nullable(false);
            $table->string('address1', 150)->nullable(false);
            $table->string('pincode', 6)->nullable(false);
            $table->date('dob')->nullable(false);
        });
        DB::statement("ALTER TABLE voters ADD photo MEDIUMBLOB NOT NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voters');
    }
}
