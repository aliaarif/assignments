<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SettingController extends Controller
{
	public function getAllSettings(Request $request){
		$mySettings  = Auth::user()->settings;
		return response()->json(['settings' => $mySettings], 200);
	}

	public function saveAllSettings($settingType, $settingValue){
		$settingType == 'menu_color' ? Auth::user()->settings->update([ 'menu_color' => $settingValue ]) : '';
		$settingType == 'navbar_color' ? Auth::user()->settings->update([ 'navbar_color' => $settingValue ]) : '';
		$settingValue = $settingValue == 'light' ? 0 : 1;
		$settingType == 'menu_dark' ? Auth::user()->settings->update([ 'menu_dark' => $settingValue]) : '';
		//$settingValue = $settingValue == 'no' ? 0 : 1;
		//$settingType == 'menu_collapsed' ? Auth::user()->settings->update([ 'menu_collapsed' => $settingValue]) : '';
		return response()->json(['status' => true, 'settingFlag' => $settingType], 200);	
	}
}
