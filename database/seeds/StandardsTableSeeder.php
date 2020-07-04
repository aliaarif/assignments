<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Standard;
use App\User;
use App\Profile;
use App\Friendship;

class StandardsTableSeeder extends Seeder
{
  public function run(Faker $faker){
    $sections = ['A', 'B', 'C', 'D', 'E', 'F'];

    for($i = 1; $i <= 12; $i++){
      $teacher = Profile::where('role', 'Teacher')->inRandomOrder()->first();
      $standard = new Standard;
      $standard->standard_name = 'Class '.$i;
      $standard->teacher_id = mt_rand(101, 110);
      $standard->save();

      $students = User::where('standard_id', $standard->id)->get();

      foreach ($students as  $student) {
       Friendship::create([
        'requester' => $standard->teacher_id,
        'requested' => $student->id,
        'status' => true
      ]);
     }
     



     for($j = 1; $j <= 2; $j++){
      $teacher = Profile::where('role', 'Teacher')->inRandomOrder()->first();
      $standard->sections()->create([
        'standard_id' => $standard->id,
        'teacher_id' => $teacher->user_id,
        'section_name' => 'Section '.$j.$sections[mt_rand(0, 4)]
      ]);
    }




  }

}
}
