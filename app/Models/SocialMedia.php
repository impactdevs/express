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
 * @property int $freelancer
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
		'freelancer' => 'int'
	];

	protected $fillable = [
		'freelancer',
		'platform',
		'handle'
	]; 

	const validators = [
		'freelancer' => ['required', 'exists:freelancers,id'],
		'platform' => ['required', 'string', 'min:1', 'max:30'],
		'handle' => ['required', 'string', 'min:1', 'max:255']
	];


	const updateValidators = [
		'freelancer' => ['exists:freelancers,id'],
		'platform' => ['string', 'min:1', 'max:30'],
		'handle' => ['string', 'min:1', 'max:255']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class, 'freelancer');
	}
}
