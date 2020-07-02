<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $role_id
 * 
 * @property Role $role
 * @property Collection|Recipe[] $recipes
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;

	protected $casts = [
		'role_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'first_name',
		'last_name',
		'email',
		'role_id'
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
