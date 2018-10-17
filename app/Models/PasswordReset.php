<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:20:22 +0300.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PasswordReset
 * 
 * @property int $id
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class PasswordReset extends Eloquent
{
	protected $connection = 'mysql';
	public $timestamps = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'email',
		'token'
	];
}
