<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('name')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropColumns('users', ['name']);
    }
};
