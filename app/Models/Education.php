<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Education
 * 
 * @property int $id
 * @property int $freelancer
 * @property string $degree
 * @property string $university_name
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Education extends Model
{
	protected $table = 'education';

	protected $casts = [
		'freelancer' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'freelancer',
		'degree',
		'university_name',
		'start_date',
		'end_date'
	]; 

	const validators = [
		'freelancer' => ['required', 'exists:freelancers,id'],
		'degree' => ['required', 'string', 'min:1', 'max:50'],
		'university_name' => ['required', 'string', 'min:1', 'max:255'],
		'start_date' => ['required', 'date'],
		'end_date' => ['required', 'date']
	];


	const updateValidators = [
		'freelancer' => ['exists:freelancers,id'],
		'degree' => ['string', 'min:1', 'max:50'],
		'university_name' => ['string', 'min:1', 'max:255'],
		'start_date' => ['date'],
		'end_date' => ['date']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class, 'freelancer');
	}
}
