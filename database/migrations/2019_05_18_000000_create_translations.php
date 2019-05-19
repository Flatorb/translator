<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('translations', function (Blueprint $table) {
		    $table->bigIncrements('id');
		    $table->bigInteger('parent')->default(0);
		    $table->string('locale', 4);
		    $table->text('key')->nullable();
		    $table->text('value')->nullable();
		    $table->text('google')->nullable();
		    $table->timestamps();
		    $table->timestamp('deleted_at')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('translations');
    }
}
