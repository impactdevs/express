<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Language
 * 
 * @property int $id
 * @property int $freelancer_id
 * @property string $name
 * @property string $level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Freelancer $freelancer
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';

	protected $casts = [
		'freelancer_id' => 'int'
	];

	protected $fillable = [
		'freelancer_id',
		'name',
		'level'
	]; 

	const createRules = [
		'freelancer_id' => ['required', 'exists:freelancers,id'],
		'name' => ['required', 'string', 'min:1', 'max:255'],
		'level' => ['required', 'string', 'min:1', 'max:30']
	];


	const updateRules = [
		'freelancer_id' => ['exists:freelancers,id'],
		'name' => ['string', 'min:1', 'max:255'],
		'level' => ['string', 'min:1', 'max:30']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class);
	}
}
