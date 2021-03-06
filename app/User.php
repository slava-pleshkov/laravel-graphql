<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasApiTokens, Notifiable;

	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function posts()
	{
		return $this->hasMany('App\Post');
	}
}