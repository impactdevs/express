<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $abbr
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currencies';

	protected $fillable = [
		'name',
		'symbol',
		'abbr'
	]; 

	public const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255', 'unique:currencies'],
		'symbol' => ['required', 'string', 'min:1', 'max:255'],
		'abbr' => ['required', 'string', 'min:1', 'max:255']
	];

	public const updateRules = [
		'name' => ['string', 'min:1', 'max:255', 'unique:currencies'],
		'symbol' => ['string', 'min:1', 'max:255'],
		'abbr' => ['string', 'min:1', 'max:255']
	];
}
