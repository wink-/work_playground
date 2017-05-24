<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('analyses', function (Blueprint $table) {
                $table->increments('ID');
                $table->string('RecordName');
                $table->string('FormName');
                $table->dateTime('Date');
                $table->string('Value1');
                $table->string('Value2');
                $table->string('Value3');
                $table->string('Value4');
                $table->string('Value5');
                $table->string('Value6');
                $table->string('Value7');
                $table->string('Value8');
                $table->string('Value9');
                $table->string('Value10');
                $table->string('Value11');
                $table->string('Value12');
                $table->string('Value13');
                $table->string('Value14');
                $table->string('Value15');
                $table->string('Value16');
                $table->string('Value17');
                $table->string('Value18');
                $table->string('Value19');
                $table->string('Value20');
                $table->string('EmpCode');
                $table->dateTime('TimeStamp');
                $table->string('DeleteVistible');
                $table->string('IDy');
                $table->string('ActValue1');
                $table->string('ActValue2');
                $table->string('ActValue3');
                $table->string('ActValue4');
                $table->string('ActValue5');
                $table->string('ActValue6');
                $table->string('ActValue7');
                $table->string('ActValue8');
                $table->string('ActValue9');
                $table->string('ActValue10');
                $table->string('ActValue11');
                $table->string('ActValue12');
                $table->string('ActValue13');
                $table->string('ActValue14');
                $table->string('ActValue15');
                $table->string('ActValue16');
                $table->string('ActValue17');
                $table->string('ActValue18');
                $table->string('ActValue19');
                $table->string('ActValue20');

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
        Schema::drop('analyses');
    }
}
