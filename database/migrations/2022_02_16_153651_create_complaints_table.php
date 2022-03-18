<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger("user_id");
            $table-> string("ticketId");
            $table ->string("subject");
            $table ->string("category");
            $table ->string("initiator");
            $table ->string("description");
            $table ->string('agent');
            $table->timestamps();

            $table -> index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
