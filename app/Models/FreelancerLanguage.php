<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FreelancerLanguage
 *
 * @property int $id
 * @property int|null $freelancer_id
 * @property int $language_id
 * @property string $level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Freelancer|null $freelancer
 * @property Language $language
 *
 * @package App\Models
 */
class FreelancerLanguage extends Model
{
	protected $table = 'freelancer_languages';

	protected $casts = [
		'freelancer_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'freelancer_id',
		'language_id',
		'level'
	];

	public const createRules = [
		'freelancer_id' => ['nullable', 'exists:freelancers,id'],
		'language_id' => ['required', 'exists:languages,id'],
		'level' => ['required', 'string', 'min:1', 'max:30']
	];


	public const updateRules = [
		'freelancer_id' => ['nullable', 'exists:freelancers,id'],
		'language_id' => ['exists:languages,id'],
		'level' => ['string', 'min:1', 'max:30']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class);
	}

	public function language(): BelongsTo
	{
		return $this->belongsTo(Language::class);
	}
}
