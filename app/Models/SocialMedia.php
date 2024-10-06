<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class SocialMedia
 * 
 * @property int $id
 * @property int|null $freelancer_id
 * @property int|null $employer_id
 * @property string $platform
 * @property string $handle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employer|null $employer
 * @property Freelancer|null $freelancer
 *
 * @package App\Models
 */
class SocialMedia extends Model
{
	protected $table = 'social_media';

	protected $casts = [
		'freelancer_id' => 'int',
		'employer_id' => 'int'
	];

	protected $fillable = [
		'freelancer_id',
		'employer_id',
		'platform',
		'handle'
	]; 

	const createRules = [
		'freelancer_id' => ['nullable', 'exists:freelancers,id'],
		'employer_id' => ['nullable', 'exists:employers,id'],
		'platform' => ['required', 'string', 'min:1', 'max:30'],
		'handle' => ['required', 'string', 'min:1', 'max:255']
	];


	const updateRules = [
		'freelancer_id' => ['nullable', 'exists:freelancers,id'],
		'employer_id' => ['nullable', 'exists:employers,id'],
		'platform' => ['string', 'min:1', 'max:30'],
		'handle' => ['string', 'min:1', 'max:255']
	];

	public function employer(): BelongsTo
	{
		return $this->belongsTo(Employer::class);
	}

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class);
	}
}
