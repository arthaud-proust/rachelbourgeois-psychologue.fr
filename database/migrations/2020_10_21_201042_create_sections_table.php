<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->boolean('anchor')->default(false); // If this section should appear in nav
            $table->boolean('appointement_before')->default(false); // If should show appointementCard before
            $table->unsignedInteger('order');
            $table->string('type'); // Types: text/cards/list
            $table->string('title');
            $table->text('content');
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
