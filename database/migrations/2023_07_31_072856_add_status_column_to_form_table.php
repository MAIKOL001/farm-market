<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnToFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            // Add the new 'status' column to the 'form' table
            $table->string('status')->nullable(); // Modify the column type as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form', function (Blueprint $table) {
            // If you ever need to rollback this migration, this code will be executed
            // to drop the 'status' column.
            $table->dropColumn('status');
        });
    }
}
