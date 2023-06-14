<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Uom;
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
        Schema::create('master_data_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('serial_number', 10);
            $table->string('item_name', 100)->nullable();
            $table->foreignIdFor(Brand::class)->cascadeOnDelete();
            $table->foreignIdFor(Uom::class)->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->cascadeOnDelete();
            $table->bigInteger('price')->unsigned();
            $table->integer('stock')->default(0)->nullable();
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
        Schema::dropIfExists('master_data_barangs');
    }
};
