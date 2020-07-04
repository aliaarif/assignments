<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Locality extends Model
{
	use SoftDeletes;
	
	protected $guarded = [];
	
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];
	
	//protected $appends=['published', 'created', 'updated', 'deleted'];
	
	// public function getPublishedAttribute(){
		// 	return Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']) )->toDayDateTimeString();
		// }
		
		public function getCreatedAtAttribute(){
			return Carbon::createFromTimeStamp(strtotime($this->attributes['created_at']) )->toDayDateTimeString();
		}
		
		public function getUpdatedAtAttribute(){
			return Carbon::createFromTimeStamp(strtotime($this->attributes['updated_at']) )->toDayDateTimeString();
		}
		
		public function getDeletedAtAttribute(){
			return Carbon::createFromTimeStamp(strtotime($this->attributes['deleted_at']) )->toDayDateTimeString();
		}
		
		public function country(){
			return $this->belongsTo('App\Country');
		}
		
		public function state(){
			return $this->belongsTo('App\State');
		}
		
		public function district(){
			return $this->belongsTo('App\District');
		}
		
		public function city(){
			return $this->belongsTo('App\City');
		}
		
	}
	