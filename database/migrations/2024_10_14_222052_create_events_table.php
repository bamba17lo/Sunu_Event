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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('region_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_event_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('eventName');
            $table->date('eventDate');
            $table->time('startTime');
            $table->time('endTime');
            $table->text('description');
            $table->string('capacity');
            $table->string('status');
            $table->string('lieu');
            $table->string('media1');
            $table->string('media2');
            $table->string('media3');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
