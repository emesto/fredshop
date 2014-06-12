<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table)
		{
			$table->increments('id');

      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');

      $table->unsignedInteger('blog_category_id');
      $table->foreign('blog_category_id')->references('id')->on('blog_categories');

      $table->string('title');
      $table->longText('content');
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
		Schema::drop('blog_posts');
	}

}
