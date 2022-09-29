<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactHasGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_has_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_contact');
            $table->foreign('id_contact')->references('id')->on('contacts');
            $table->unsignedBigInteger('id_group');
            $table->foreign('id_group')->references('id')->on('groups');
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
        Schema::dropIfExists('contact_has_groups');
    }
}
