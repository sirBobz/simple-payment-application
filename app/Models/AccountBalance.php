<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:20:22 +0300.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountBalance
 * 
 * @property int $id
 * @property int $user_id
 * @property string $balance
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class AccountBalance extends Eloquent
{
	protected $connection = 'mysql';
	protected $table = 'account_balance';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'balance'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
