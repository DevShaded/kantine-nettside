<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('day_of_week');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_published');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
