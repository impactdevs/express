<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class SubIndustry
 *
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string $description
 * @property int $industry_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Industry $industry
 * @property Collection|SubIndustrySkill[] $sub_industry_skills
 *
 * @package App\Models
 */
class SubIndustry extends Model
{
	protected $table = 'sub_industries';

	protected $casts = [
		'industry_id' => 'int'
	];

	protected $fillable = [
		'name',
		'logo',
		'description',
		'industry_id'
	];

	public const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['required', 'string', 'min:1', 'max:255'],
		'industry_id' => ['required', 'exists:industries,id']
	];


	public const updateRules = [
		'name' => ['string', 'min:1', 'max:255'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['string', 'min:1', 'max:255'],
		'industry_id' => ['exists:industries,id']
	];

	public function industry(): BelongsTo
	{
		return $this->belongsTo(Industry::class);
	}

	public function sub_industry_skills(): HasMany
	{
		return $this->hasMany(SubIndustrySkill::class);
	}
}
