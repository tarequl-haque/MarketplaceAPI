<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyFilesTableTypeFileToEnum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**There is a limitation on Laravel 8: we can not change from string to enum
         * The solution today is drop the field and created it again with the chosen type
         */
       /* Schema::table('files', function (Blueprint $table) {
            $table->enum('type_file', ['jpg', 'png','pdf'])->change();
        });*/
        
        Schema::table('files', function (Blueprint $table) {
            $table->dropColumn('type_file'); // enum column
        });

        Schema::table('files', function (Blueprint $table) {
            $table->string('name');
            $table->enum('type_file', ['jpg', 'png','pdf']);
            $table->string('path');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function (Blueprint $table) {
            //
        });
    }
}
