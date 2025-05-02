<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('core_databases', function (Blueprint $table) {
            $table->id();
            $table->string('db_type');
            $table->string('db_host');
            $table->string('db_username');
            $table->string('db_password');
            $table->string('db_name');
            $table->string('db_port');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('core_databases');
    }
};
