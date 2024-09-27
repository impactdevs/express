<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Skill
 * 
 * @property int $id
 * @property int $freelancer
 * @property string $level
 * @property string $skill
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Skill extends Model
{
	protected $table = 'skills';

	protected $casts = [
		'freelancer' => 'int'
	];

	protected $fillable = [
		'freelancer',
		'level',
		'skill'
	]; 

	const validators = [
		'freelancer' => ['required', 'exists:freelancers,id'],
		'level' => ['required', 'string', 'min:1', 'max:20'],
		'skill' => ['required', 'string', 'min:1', 'max:50']
	];


	const updateValidators = [
		'freelancer' => ['exists:freelancers,id'],
		'level' => ['string', 'min:1', 'max:20'],
		'skill' => ['string', 'min:1', 'max:50']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class, 'freelancer');
	}
}
