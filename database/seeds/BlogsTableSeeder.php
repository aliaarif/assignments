<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
use App\Blog;
use App\User;

class BlogsTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
    for($i = 1; $i <= 17; $i++){
      $title = $faker->sentence();
      $category = Category::inRandomOrder()->where('type', 'blogs')->first();
      $user = User::find(1); //Admin
      $blog = new Blog;
      $blog->title = $title;
      $blog->image = 'storage/images/blogs/blog-'.$i.'.jpg';
      $blog->body = $faker->paragraph.$faker->paragraph.$faker->paragraph;
      $blog->slug = Str::slug($title, '-');
      $blog->category_id = $category->id;
      $blog->featured = mt_rand(0, 1);
      $blog->top_featured = mt_rand(0, 1);
      $blog->created_by = $user->profile->name;
      $blog->created_by_avatar = 'storage/images/avatars/avatar-1.png';
      $blog->save();
    }  
  }
}