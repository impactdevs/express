<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Freelancer[] $freelancers
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';

	protected $fillable = [
		'name',
		'code'
	]; 

	const validators = [
		'name' => ['required', 'string', 'min:1', 'max:255'],
		'code' => ['required', 'string', 'min:1', 'max:255', 'unique:countries']
	];

	const updateValidators = [
		'name' => ['string', 'min:1', 'max:255'],
		'code' => ['string', 'min:1', 'max:255', 'unique:countries']
	];

	public function freelancers(): HasMany
	{
		return $this->hasMany(Freelancer::class, 'country');
	}
}
