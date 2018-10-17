<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:20:22 +0300.
 */

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $phone_number
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $account_balances
 * @property \Illuminate\Database\Eloquent\Collection $transactions
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

	protected $connection = 'mysql';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'phone_number',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function account_balances()
	{
		return $this->hasMany(\App\Models\AccountBalance::class);
	}

	public function transactions()
	{
		return $this->hasMany(\App\Models\Transaction::class);
	}
}
