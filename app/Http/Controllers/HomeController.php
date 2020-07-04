<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['test', 'customBinarySearch']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function customBinarySearch($arr, $value) {
        // Set the left side pointer to 0.
        $left = 0;
        // Set the right side pointer to the length of the arr -1.
        $right = count($arr) - 1;
     
        while ($left <= $right) {
          // Set the initial midpoint to the rounded down value of half the length of the arr.
          $midpoint = (int) floor(($left + $right) / 2);
     
          if ($arr[$midpoint] < $value) {
            // The midpoint value is less than the value.
            $left = $midpoint + 1;
          } elseif ($arr[$midpoint] > $value) {
            // The midpoint value is greater than the value.
            $right = $midpoint - 1;
          } else {
            // This is the key we are looking for.
            return $midpoint;
          }
        }
        // The value was not found.
        return NULL;
    }


   public function test(){
    // Generate an arr.
    $arr = range(0, 4); // [0,1,2,3]
 
    // Searching for each value.

    foreach ($arr as $key => $value) {
        echo '<h1>'.var_export($this->customBinarySearch($arr, $value) === $value, TRUE).PHP_EOL.'</h1>';
    }

    echo '<h1>***</h1>';
 
    // Search for values outside of the arr.

    echo '<h1 style="color:green">'.var_export($this->customBinarySearch($arr, -1) === NULL, TRUE).PHP_EOL.'</h1>'; 

    echo '<h1 style="color:green">'.var_export($this->customBinarySearch($arr, 5) === NULL, TRUE).PHP_EOL.'</h1>'; 


  // Search for values inside of the arr.

    echo '<h1 style="color:red">'.var_export($this->customBinarySearch($arr, 0) === NULL, FALSE).PHP_EOL.'</h1>'; 

    echo '<h1 style="color:red">'.var_export($this->customBinarySearch($array, 1) === NULL, FALSE).PHP_EOL.'</h1>'; 

    echo '<h1 style="color:red">'.var_export($this->customBinarySearch($array, 2) === NULL, FALSE).PHP_EOL.'</h1>'; 

    echo '<h1 style="color:red">'.var_export($this->customBinarySearch($array, 3) === NULL, FALSE).PHP_EOL.'</h1>'; 

    }
}
