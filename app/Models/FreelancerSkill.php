<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class FreelancerSkill
 *
 * @property int $id
 * @property int $freelancer_id
 * @property int $skill_id
 * @property string $level
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Freelancer $freelancer
 * @property Skill $skill
 *
 * @package App\Models
 */
class FreelancerSkill extends Model
{
	protected $table = 'freelancer_skills';

	protected $casts = [
		'freelancer_id' => 'int',
		'skill_id' => 'int'
	];

	protected $fillable = [
		'freelancer_id',
		'skill_id',
		'level'
	];

	public const createRules = [
		'freelancer_id' => ['required', 'exists:freelancers,id'],
		'skill_id' => ['required', 'exists:skills,id'],
		'level' => ['required', 'string', 'min:1', 'max:20']
	];


	public const updateRules = [
		'freelancer_id' => ['exists:freelancers,id'],
		'skill_id' => ['exists:skills,id'],
		'level' => ['string', 'min:1', 'max:20']
	];

	public function freelancer(): BelongsTo
	{
		return $this->belongsTo(Freelancer::class);
	}

	public function skill(): BelongsTo
	{
		return $this->belongsTo(Skill::class);
	}
}
