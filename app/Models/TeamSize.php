<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class TeamSize
 * 
 * @property int $id
 * @property string $size
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employer $employer
 *
 * @package App\Models
 */
class TeamSize extends Model
{
	protected $table = 'team_sizes';

	protected $fillable = [
		'size'
	]; 

	const createRules = [
		'size' => ['required', 'string', 'min:1', 'max:255']
	];


	const updateRules = [
		'size' => ['string', 'min:1', 'max:255']
	];

	public function employer(): HasOne
	{
		return $this->hasOne(Employer::class);
	}
}
