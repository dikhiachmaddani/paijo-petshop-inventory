<?php

use App\Models\MasterDataBarang;
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
        Schema::create('terima_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('supplier');
            $table->foreignIdFor(MasterDataBarang::class)->cascadeOnDelete();
            $table->bigInteger('price')->unsigned();
            $table->integer('stock')->default(0);
            $table->string('remarks');
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
        Schema::dropIfExists('terima_barangs');
    }
};
