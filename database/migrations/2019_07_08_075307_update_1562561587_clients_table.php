<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1562561587ClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            if(Schema::hasColumn('clients', 'gender')) {
                $table->dropColumn('gender');
            }
            
        });
Schema::table('clients', function (Blueprint $table) {
            
if (!Schema::hasColumn('clients', 'gender')) {
                $table->enum('gender', array('male', 'female'))->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('gender');
            
        });
Schema::table('clients', function (Blueprint $table) {
                        $table->enum('gender', array('mail', 'femail'))->nullable();
                
        });

    }
}
