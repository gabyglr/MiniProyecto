<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::table('imagens', function (Blueprint $table) {
        $table->foreignId('producto_id')->constrained()->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('imagens', function (Blueprint $table) {
        $table->dropForeign(['producto_id']);
        $table->dropColumn('producto_id');
    });
}

};
