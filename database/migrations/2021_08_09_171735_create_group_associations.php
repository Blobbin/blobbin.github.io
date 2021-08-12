<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupAssociations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
            $table->foreignId('user_id')->contrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('group_id')->contrained('group')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

            // Composite primary, these are always unique we we cannot add the same user multiple times.
            $table->primary(['user_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_user');
    }
}
