<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Freelancer[] $freelancers
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';

	protected $fillable = [
		'name'
	]; 

	public const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255', 'unique:languages']
	];

	public const updateRules = [
		'name' => ['string', 'min:1', 'max:255', 'unique:languages']
	];

	public function freelancers(): BelongsToMany
	{
		return $this->belongsToMany(Freelancer::class, 'freelancer_languages')
					->withPivot('id', 'level')
					->withTimestamps();
	}
}
