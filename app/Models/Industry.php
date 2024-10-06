<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Industry
 * 
 * @property int $id
 * @property string $name
 * @property string|null $logo
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Employer $employer
 * @property Collection|SubIndustry[] $sub_industries
 *
 * @package App\Models
 */
class Industry extends Model
{
	protected $table = 'industries';

	protected $fillable = [
		'name',
		'logo',
		'description'
	]; 

	const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255', 'unique:industries'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['required', 'string', 'min:1', 'max:255']
	];

	const updateRules = [
		'name' => ['string', 'min:1', 'max:255', 'unique:industries'],
		'logo' => ['nullable', 'string', 'min:1', 'max:255'],
		'description' => ['string', 'min:1', 'max:255']
	];

	public function employer(): HasOne
	{
		return $this->hasOne(Employer::class);
	}

	public function sub_industries(): HasMany
	{
		return $this->hasMany(SubIndustry::class);
	}
}
