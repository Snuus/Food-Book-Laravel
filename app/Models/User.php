<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;




class User extends Authenticatable

{
    use Notifiable;

	protected $table = 'user';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int'
	];

	protected $hidden = [
        'password', 'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'first_name',
		'last_name',
		'email',
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function recipes()
	{
		return $this->hasMany(Recipe::class);
	}
}
