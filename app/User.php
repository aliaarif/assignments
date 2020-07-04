<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Traits\Friendable;

class User extends Authenticatable
{
	use Notifiable, SoftDeletes, Friendable;
	
	protected $guarded = [];
	
	protected $casts = ['email_verified_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'];
	
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


	protected $hidden = ['password', 'remember_token'];


	public function role()
	{
		return $this->belongsTo('App\Role');
	}

	public function roleName()
	{
		return strtolower($this->role);
	}


	public function profile()
	{
		return $this->hasOne('App\Profile');
	}

	public function roles()
	{
		return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
	}

	public function hasAnyRole($roles)
	{
		if(is_array($roles)) 
		{
			foreach ($roles as $role) 
			{
				if($this->hasRole($role))
				{
					return true;
				}
			}
		} else {
			if($this->hasRole($roles))
			{
				return true;
			}}

			return false;
		}

		public function hasRole($role) {
			if($this->roles()->where('name', $role)->first()) {
				return true;
			}
			return false;
		}

		public function tests(){
			return $this->belognsToMany('App\Test');
		}

		public function lang_pairs(){
			return $this->hasMany('App\LanguagePair');
		}


		public function settings(){
			return $this->hasOne('App\Setting');
		}

		public function hasAnyRoles($roles, $current){
			return in_array($current, $roles) ? true : false;
		}


		public function verifyUser()
		{
			return $this->hasOne('App\VerifyUser');
		}

		public function section()
		{
			return $this->hasOne('App\Section');
		}

		public function standard()
		{
			return $this->hasOne('App\Standard');
		}

		// public function attendances(){
		// 	return $this->hasMany('App\Attendance');
		// }

		public function department()
		{
			return $this->belongsTo('App\Department');
		}

    /**
     * Get the attendance of the user.
     */
    public function present()
    {
    	return $this->hasMany('App\Attendance')->where('attendance', 'Present');
    }

    /**
     * Get the attendance of the user.
     */
    public function attendance()
    {
    	return $this->hasMany('App\Attendance');
    }

}

