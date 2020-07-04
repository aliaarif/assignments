<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
use App\News;
use App\User;

class NewsTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
    for($i = 1; $i <= 17; $i++){
      $title = $faker->sentence();
      $category = Category::inRandomOrder()->where('type', 'news')->first();
      $user = User::find(1); //Admin
      $news = new News;
      $news->title = $title;
      $news->image = 'storage/images/news/news-'.$i.'.jpg';
      $news->body = $faker->paragraph.$faker->paragraph.$faker->paragraph.$faker->paragraph.$faker->paragraph.$faker->paragraph.$faker->paragraph;
      $news->slug = Str::slug($title, '-');
      $news->category_id = $category->id;
      $news->featured = mt_rand(0, 1);
      $news->top_featured = mt_rand(0, 1);
      $news->created_by = $user->profile->name;
      $news->created_by_avatar = 'storage/images/avatars/avatar-1.png';
      $news->save();
    }
  }
}