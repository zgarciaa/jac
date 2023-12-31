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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->unique();
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('first_surname');
            $table->string('other_surname')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('people', function (Blueprint $table){
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP')->change();
            $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
