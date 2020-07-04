<?php
use App\User;
use App\Category;
use App\Post;
use App\Information;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    $genders = ['Male', 'Female', 'Other'];
    
    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'slug' => Str::slug($name, '-'),
        'gender' => $genders[mt_rand(0, 1)],
        'avatar' => 'storage/images/avatars/avatar.png',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Post::class, function (Faker $faker, $image) {
    $title = $faker->name;
    $category = Category::inRandomOrder()->take(1)->where('type', 'blogs')->get('id');
    $filepathPublic = public_path('storage/images/posts');
    if(!File::exists($filepathPublic)){
        File::makeDirectory($filepathPublic);
    }
    return [
        'title' => $title,
        'image' => $faker->image($filepathPublic,1200,600) ,
        'body' => $faker->paragraph,
        'slug' => Str::slug($title, '-'),
        'category_id' => $category[0]->id
    ];
});

$factory->define(Information::class, function (Faker $faker, $image) {
    $title = $faker->name;
    $category = Category::inRandomOrder()->take(1)->where('type', 'informations')->get('id');
    $filepathPublic = public_path('storage/images/informations');
    if(!File::exists($filepathPublic)){
        File::makeDirectory($filepathPublic);
    }
    return [
        'title' => $title,
        'image' => $faker->image($filepathPublic,1200,600) ,
        'body' => $faker->paragraph,
        'slug' => Str::slug($title, '-'),
        'category_id' => $category[0]->id
    ];
});


