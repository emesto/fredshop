<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration {

	public function up()
	{
		Schema::create('blog_comments', function(Blueprint $table)
		{
			$table->increments('id');

      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users');

      $table->unsignedInteger('blog_post_id');
      $table->foreign('blog_post_id')->references('id')->on('blog_posts');

      $table->longText('content');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('blog_comments');
	}

}
