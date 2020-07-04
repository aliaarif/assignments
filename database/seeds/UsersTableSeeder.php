<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Role;
use App\Friendship;
use App\Standard;
use App\Section;


class UsersTableSeeder extends Seeder
{
  public function run(Faker $faker){
    $genders = ['Male', 'Female', 'Other'];
    
    $name_Admin = $faker->name;
    $gender_Admin = $genders[mt_rand(0, 1)];
    $role_Admin = Role::where('name', 'Admin')->first();
    $admin = new User;
    $admin->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $admin->role_id = $role_Admin->id;
    $admin->email = 'admin@example.com';
    $admin->password = bcrypt('password');
    $admin->remember_token = Str::random(10);
    $admin->email_verified_at = now();
    //$admin->utype = 'Admin';
    $admin->save();
    $admin->roles()->attach($role_Admin);
    $admin->profile()->create([
      'name' => $name_Admin,
      'role' => $role_Admin->name,
      'slug' => Str::slug($name_Admin, '-'),
      'ucode' => $admin->ucode,
      'utype' => 'Admin',
      'user_id' => $admin->id,
      'gender' => $gender_Admin,
      'avatar' => 'storage/images/avatars/avatar-1.png',
      'profile_bg' => 'storage/images/avatars/bg/profile-bg.png'
    ]);
    $admin->settings()->create([
      'user_id' => $admin->id,
      'ucode' => $admin->ucode
    ]);
    Friendship::create([
      'requester' => $admin->id,
      'requested' => 1,
      'status' => true
    ]);


    $name_user = $faker->name;
    $gender_user = $genders[mt_rand(0, 1)];
    $role_user = Role::where('name', 'User')->first();
    //$standard = Standard::inRandomOrder()->first();
    //$section = Section::inRandomOrder()->first();
    $user = new User;
    $user->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
    $user->role_id = $role_user->id;
    //$user->standard_id = $standard->id;
    //$user->section_id = $section->id;
    $user->email = 'user@example.com';
    $user->password = bcrypt('password');
    $user->remember_token = Str::random(10);
    $user->email_verified_at = now();
    //$user->utype = 'User';
    $user->save();
    $user->roles()->attach($role_user);
    $user->profile()->create([
      'name' => $name_user,
      'role' => $role_user->name,
      'slug' => Str::slug($name_user, '-'),
      'ucode' => $user->ucode,
      'utype' => 'User',
      'user_id' => $user->id,
      'standard_id' => $user->standard_id,
      'section_id' => $user->section_id,
      'gender' => $gender_user,
      'avatar' => 'storage/images/avatars/avatar-1.png',
      'profile_bg' => 'storage/images/avatars/bg/profile-bg.png'
    ]);
    $user->settings()->create([
      'user_id' => $user->id,
      'ucode' => $user->ucode
    ]);
    Friendship::create([
      'requester' => $user->id,
      'requested' => 1,
      'status' => true
    ]);




    for($i = 2; $i <= 10; $i++){
      $name_user = $faker->name;
      $gender_user = $genders[mt_rand(0, 1)];
      $role_user = Role::where('name', 'User')->first();
      //$standard = Standard::inRandomOrder()->first();
      //$section = Section::inRandomOrder()->first();
      $user = new User;
      $user->ucode = 'ucodel'.mt_rand(1234567891, 9999999999);
      $user->role_id = $role_user->id;
      $user->standard_id = mt_rand(1, 12);
      //$user->section_id = $section->id;
      $user->email = $faker->unique()->safeEmail;
      $user->password = bcrypt('password');
      $user->remember_token = Str::random(10);
      $user->email_verified_at = now();
      //$user->utype = 'User';
      $user->save();
      $user->roles()->attach($role_user);
      $user->profile()->create([
        'name' => $name_user,
        'role' => $role_user->name,
        'slug' => Str::slug($name_user, '-'),
        'ucode' => $user->ucode,
        'utype' => 'User',
        'user_id' => $user->id,
        'standard_id' => $user->standard_id,
        'section_id' => $user->section_id,
        'gender' => $gender_user,
        'avatar' => 'storage/images/avatars/avatar-1.png',
        'profile_bg' => 'storage/images/avatars/bg/profile-bg.png'
      ]);
      $user->settings()->create([
        'user_id' => $user->id,
        'ucode' => $user->ucode
      ]);
      Friendship::create([
        'requester' => $user->id,
        'requested' => 1,
        'status' => true
      ]);
    }

  }
}
