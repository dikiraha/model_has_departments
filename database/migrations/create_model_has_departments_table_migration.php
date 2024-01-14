<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHasDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.model_has_departments', function (Blueprint $table) {
            $table->unsignedBigInteger('model_id');
            $table->string('model_type');
            $table->unsignedBigInteger('department_id');

            $table->primary(['model_id', 'model_type', 'department_id']);

            $table->index(['model_id', 'model_type']);

            $table->foreign('model_id')
                ->references('id')
                ->on('public.users')
                ->onDelete('cascade');

            $table->foreign('department_id')
                ->references('id')
                ->on('public.departments')
                ->onDelete('cascade');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public.model_has_departments');
    }
}
