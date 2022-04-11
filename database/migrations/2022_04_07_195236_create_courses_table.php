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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->text('pic')->nullable();
            $table->text('content')->nullable();
            $table->string('video', 255)->nullable();
            $table->string('status', 100)->nullable();
            $table->boolean('publish')->nullable();
            $table->string('total_time', 100)->nullable();
            $table->string('support_time', 100)->nullable();
            $table->float('cost')->nullable();
            $table->float('ins_cost')->nullable();
            $table->float('ins_pish')->nullable();
            $table->float('ins_count')->nullable()->default(0);
            $table->float('off_cost')->nullable()->default(0);
            $table->float('gift_cost')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
