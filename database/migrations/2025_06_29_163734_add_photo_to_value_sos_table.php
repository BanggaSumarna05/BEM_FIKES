<?php

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
    // Contoh migration
Schema::table('value_sos', function (Blueprint $table) {
    $table->string('photo')->nullable();
});

}

public function down()
{
    Schema::table('value_sos', function (Blueprint $table) {
        $table->dropColumn('photo');
    });
}
};
