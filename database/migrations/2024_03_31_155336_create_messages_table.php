<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //"subject","message","sender_id","recepient_id"
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("sender_id");
            $table->integer("recepient_id");
            $table->string("subject");
            $table->text("message");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
