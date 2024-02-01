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
        Schema::table('games', function (Blueprint $table) {
            // $table->unsignedBigInteger("type_id")->nullable()->after("id");
            // $table->foreign("type_id")->references("id")->on("categories")->nullOnDelete();

            $table->foreignId('type_id')->nullable()->after("id")->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropForeign('games_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
