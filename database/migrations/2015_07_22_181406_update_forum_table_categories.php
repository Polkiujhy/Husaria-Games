<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateForumTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('parent_category', 'category_id');

        });
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('subtitle', 'description');

        });

        Schema::table('forum_categories', function (Blueprint $table) {
            $table->integer('category_id')->default(0)->change();
            $table->string('description')->nullable()->change();
            $table->integer('weight')->default(0)->change();

            $table->boolean('enable_threads')->default(0);
            $table->boolean('private')->default(0);

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
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('description', 'subtitle');
        });
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->renameColumn('category_id', 'parent_category');

        });
        Schema::table('forum_categories', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at', 'enable_threads', 'private']);
        });
    }
}
