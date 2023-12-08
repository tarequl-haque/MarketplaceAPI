<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProyectsHasFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      


        Schema::table('proyect_has_files', function (Blueprint $table) {  
          
            $table->foreign('file_id') 
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')->on('files');


            $table->foreign('project_id')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('project_id')->on('projects');     
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
