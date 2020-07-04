<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
    for($i = 1; $i <= 50; $i++){
      $title = $faker->sentence();
      $postTypes = ['Studies', 'Socials', 'MPS'];
      $category = Category::inRandomOrder()->where('type', 'posts')->first();
      $user = User::inRandomOrder()->whereBetween('id', [1, 110])->first();
      $post = new Post;
      $post->title = $title;
      $post->image = 'storage/images/posts/post-'.$i.'.jpg';
      $post->body = $faker->paragraph;
      $post->slug = Str::slug($title, '-');
      $post->category_id = $category->id;
      $post->type = $postTypes[mt_rand(0, 2)];
      $post->friends_only = mt_rand(0, 1);
      $post->created_by = $user->profile->name;
      $post->created_by_avatar = 'storage/images/avatars/avatar-1.png';
      $post->save();
    }  
  }
}