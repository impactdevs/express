<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobType
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class JobType extends Model
{
	protected $table = 'job_types';

	protected $fillable = [
		'name'
	]; 

	const validators = [
		'name' => ['required', 'string', 'min:1', 'max:255']
	];

	const updateValidators = [
		'name' => ['string', 'min:1', 'max:255']
	];
}
