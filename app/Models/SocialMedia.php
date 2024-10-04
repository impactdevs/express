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
 * @property int|null $freelancer
 * @property int|null $employer
 * @property string $platform
 * @property string $handle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class SocialMedia extends Model
{
	protected $table = 'social_media';

	protected $casts = [
		'freelancer' => 'int',
		'employer' => 'int'
	];

	protected $fillable = [
		'freelancer',
		'employer',
		'platform',
		'handle'
	]; 

	const createRules = [
		'freelancer' => ['nullable', 'exists:freelancers,id'],
		'employer' => ['nullable', 'exists:employers,id'],
		'platform' => ['required', 'string', 'min:1', 'max:30'],
		'handle' => ['required', 'string', 'min:1', 'max:255']
	];


	const updateRules = [
		'freelancer' => ['nullable', 'exists:freelancers,id'],
		'employer' => ['nullable', 'exists:employers,id'],
		'platform' => ['string', 'min:1', 'max:30'],
		'handle' => ['string', 'min:1', 'max:255']
	];

	public function employer(): BelongsTo
	{
		return $this->belongsTo(Employer::class, 'employer');
	}

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class, 'freelancer');
	}
}
