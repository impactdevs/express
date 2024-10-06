<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class SubIndustry
 * 
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string $description
 * @property int $industry
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class SubIndustry extends Model
{
	protected $table = 'sub_industries';

	protected $casts = [
		'industry' => 'int'
	];

	protected $fillable = [
		'name',
		'logo',
		'description',
		'industry'
	]; 

	const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['required', 'string', 'min:1', 'max:255'],
		'industry' => ['required', 'exists:industries,id']
	];


	const updateRules = [
		'name' => ['string', 'min:1', 'max:255'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['string', 'min:1', 'max:255'],
		'industry' => ['exists:industries,id']
	];

	public function industry(): BelongsTo
	{
		return $this->belongsTo(Industry::class, 'industry');
	}
}
