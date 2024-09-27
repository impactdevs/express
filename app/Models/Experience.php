<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Experience
 * 
 * @property int $id
 * @property int $freelancer
 * @property string $organisation
 * @property string $position
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Experience extends Model
{
	protected $table = 'experience';

	protected $casts = [
		'freelancer' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'freelancer',
		'organisation',
		'position',
		'start_date',
		'end_date'
	]; 

	const validators = [
		'freelancer' => ['required', 'exists:freelancers,id'],
		'organisation' => ['required', 'string', 'min:1', 'max:255'],
		'position' => ['required', 'string', 'min:1', 'max:255'],
		'start_date' => ['required', 'date'],
		'end_date' => ['required', 'date']
	];


	const updateValidators = [
		'freelancer' => ['exists:freelancers,id'],
		'organisation' => ['string', 'min:1', 'max:255'],
		'position' => ['string', 'min:1', 'max:255'],
		'start_date' => ['date'],
		'end_date' => ['date']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class, 'freelancer');
	}
}
