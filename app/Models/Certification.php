<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Certification
 * 
 * @property int $id
 * @property int $freelancer_id
 * @property string $certification_type
 * @property string $certified_from
 * @property Carbon $certified_on
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Freelancer $freelancer
 *
 * @package App\Models
 */
class Certification extends Model
{
	protected $table = 'certifications';

	protected $casts = [
		'freelancer_id' => 'int',
		'certified_on' => 'datetime'
	];

	protected $fillable = [
		'freelancer_id',
		'certification_type',
		'certified_from',
		'certified_on'
	]; 

	const createRules = [
		'freelancer_id' => ['required', 'exists:freelancers,id'],
		'certification_type' => ['required', 'string', 'min:1', 'max:50'],
		'certified_from' => ['required', 'string', 'min:1', 'max:255'],
		'certified_on' => ['required', 'date']
	];


	const updateRules = [
		'freelancer_id' => ['exists:freelancers,id'],
		'certification_type' => ['string', 'min:1', 'max:50'],
		'certified_from' => ['string', 'min:1', 'max:255'],
		'certified_on' => ['date']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class);
	}
}
