<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForumCategoryBooleans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('private', 'is_private');
        });
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('enable_threads', 'accepts_threads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('accepts_threads', 'enable_threads');
        });
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('is_private', 'private');
        });
    }
}
