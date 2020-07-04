<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
    $category = new Category;
    $category->name = 'Students';
    $category->type = 'blogs';
    $category->save();
    
    $category = new Category;
    $category->name = 'Teachers';
    $category->type = 'blogs';
    $category->save();
    
    $category = new Category;
    $category->name = 'Parents';
    $category->type = 'blogs';
    $category->save();
    
    $category = new Category;
    $category->name = 'Transports';
    $category->type = 'blogs';
    $category->save();
    
    $category = new Category;
    $category->name = 'Wings';
    $category->type = 'blogs';
    $category->save();

    $category = new Category;
    $category->name = 'Posts';
    $category->type = 'posts';
    $category->save();
    
    $category = new Category;
    $category->name = 'Studies';
    $category->type = 'informations';
    $category->save();
    
    $category = new Category;
    $category->name = 'Events';
    $category->type = 'informations';
    $category->save();
    
    $category = new Category;
    $category->name = 'Anuals';
    $category->type = 'informations';
    $category->save();
    
    $category = new Category;
    $category->name = 'Fees';
    $category->type = 'informations';
    $category->save();
    
    $category = new Category;
    $category->name = 'Extras';
    $category->type = 'informations';
    $category->save();
    
    $category = new Category;
    $category->name = 'Studies 2';
    $category->type = 'news';
    $category->save();
    
    $category = new Category;
    $category->name = 'Events 2';
    $category->type = 'news';
    $category->save();
    
    $category = new Category;
    $category->name = 'Anuals 2';
    $category->type = 'news';
    $category->save();
    
    $category = new Category;
    $category->name = 'Fees 2';
    $category->type = 'news';
    $category->save();
    
    $category = new Category;
    $category->name = 'Extras 2';
    $category->type = 'news';
    $category->save();
    
}
}
