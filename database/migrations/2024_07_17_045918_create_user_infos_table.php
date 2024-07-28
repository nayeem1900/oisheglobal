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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('nid');
            $table->string('passport')->nullable();
            $table->string('image')->nullable();
            $table->integer('user_id');
            $table->string('address');
            $table->integer('country_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('agent_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
