<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 17 Oct 2018 09:20:22 +0300.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $user_id
 * @property string $request_id
 * @property string $amount
 * @property string $third_party_trans_id
 * @property \Carbon\Carbon $transaction_time
 * @property string $account
 * @property string $account_name
 * @property string $paid_name
 * @property string $phone_number
 * @property string $account_balance
 * @property string $result_code
 * @property string $result_desc
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Transaction extends Eloquent
{
	protected $connection = 'mysql';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'transaction_time'
	];

	protected $fillable = [
		'user_id',
		'request_id',
		'amount',
		'third_party_trans_id',
		'transaction_time',
		'account',
		'account_name',
		'paid_name',
		'phone_number',
		'account_balance',
		'result_code',
		'result_desc',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
