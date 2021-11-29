<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();

            $table->string('index')->default('1');
            $table->string('name')->unique();
            $table->string('address');
            $table->string('phone_number');
            $table->string('link_facebook');
            $table->string('link_twitter');
            $table->string('link_instagram');
            $table->text('about');
            $table->text('about2')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deserunt aspernatur impedit illo neque delectus cum culpa sequi harum aut voluptatibus iusto a magnam nihil quo, aperiam accusamus animi dolore exercitationem labore. Blanditiis doloribus culpa at soluta nam placeat, consequatur ducimus adipisci, debitis voluptate odio explicabo a minima animi? Distinctio.');

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
        Schema::dropIfExists('about_us');
    }
}
