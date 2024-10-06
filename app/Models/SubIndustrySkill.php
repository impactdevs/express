<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class SubIndustrySkill
 *
 * @property int $id
 * @property int $industry_id
 * @property int $sub_industry_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Industry $industry
 * @property SubIndustry $sub_industry
 *
 * @package App\Models
 */
class SubIndustrySkill extends Model
{
	protected $table = 'sub_industry_skills';

	protected $casts = [
		'industry_id' => 'int',
		'sub_industry_id' => 'int'
	];

	protected $fillable = [
		'industry_id',
		'sub_industry_id'
	];

	public const createRules = [
		'industry_id' => ['required', 'exists:industries,id'],
		'sub_industry_id' => ['required', 'exists:sub_industries,id']
	];


	public const updateRules = [
		'industry_id' => ['exists:industries,id'],
		'sub_industry_id' => ['exists:sub_industries,id']
	];

	public function industry(): BelongsTo
	{
		return $this->belongsTo(Industry::class);
	}

	public function sub_industry(): BelongsTo
	{
		return $this->belongsTo(SubIndustry::class);
	}
}
