<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('slug');
            $table->float('price', 8,2);
            $table->float('original_price', 8,2)->default(0);
            $table->string('excerpt');
            $table->longText('description');
            $table->longText('features')->nullable();
            $table->float('rating', 8,2)->nullable();
            $table->string('thumb')->nullable();
            $table->char('is_new', 1)->default(1)->comment('0=old, 1=new');
            $table->char('enable_flag', 1)->default(1)->comment('0=disabled, 1=enabled');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('course_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
