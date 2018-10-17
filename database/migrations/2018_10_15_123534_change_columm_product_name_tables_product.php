<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColummProductNameTablesProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // cach 1
        // Schema::table('products', function (Blueprint $table) {
        //     $table->string('product_name', 50);
        // });

        //cach 2
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_name', 70)->change();
            $table->unique('product_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //cach 1
        // if(Schema::hasColumn('products', 'product_name')) {
        //     Schema::table('products', function (Blueprint $table) {
        //         $table->dropColumn('product_name');
        //     });
        // }
    }
}
