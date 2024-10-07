<?php

/**
 * DB generated Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 *
 * @package App\Models
 */
class Skill extends Model
{
	protected $table = 'skills';

	protected $fillable = [
		'name'
	];

	public const createRules = [
		'name' => ['required', 'string', 'min:1', 'max:255', 'unique:skills']
	];

	public const updateRules = [
		'name' => ['string', 'min:1', 'max:255', 'unique:skills']
	];
}
