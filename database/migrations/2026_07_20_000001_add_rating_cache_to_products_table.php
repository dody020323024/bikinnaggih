<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('rating_cache', 3, 2)->nullable()->after('is_active');
            $table->integer('reviews_count')->default(0)->after('rating_cache');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['rating_cache', 'reviews_count']);
        });
    }
};
