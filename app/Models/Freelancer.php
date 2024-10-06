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
 * Class Freelancer
 *
 * @property int $id
 * @property int $user_id
 * @property string $phone
 * @property string $job_type
 * @property string $job_title
 * @property Carbon $date_of_birth
 * @property string $description
 * @property string|null $profile_picture_path
 * @property int|null $country_id
 * @property string|null $state
 * @property string|null $city
 * @property string|null $zip_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Country|null $country
 * @property User $user
 * @property Collection|Certification[] $certifications
 * @property Collection|Education[] $education
 * @property Collection|Experience[] $experiences
 * @property Collection|Language[] $languages
 * @property Collection|Skill[] $skills
 * @property Collection|SocialMedia[] $social_media
 *
 * @package App\Models
 */
class Freelancer extends Model
{
	protected $table = 'freelancers';

	protected $casts = [
		'user_id' => 'int',
		'date_of_birth' => 'datetime',
		'country_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'phone',
		'job_type',
		'job_title',
		'date_of_birth',
		'description',
		'profile_picture_path',
		'country_id',
		'state',
		'city',
		'zip_code'
	];

	const createRules = [
		'user_id' => ['required', 'exists:users,id', 'unique:freelancers'],
		'phone' => ['required', 'string', 'min:1', 'max:20', 'regex:/^(\\+\\d{1,2}|0)\\d{10}$/'],
		'job_type' => ['required', 'string', 'min:1', 'max:50'],
		'job_title' => ['required', 'string', 'min:1', 'max:50'],
		'date_of_birth' => ['required', 'date'],
		'description' => ['required'],
		'profile_picture_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'country_id' => ['nullable', 'exists:countries,id'],
		'state' => ['nullable', 'string', 'min:1', 'max:255'],
		'city' => ['nullable', 'string', 'min:1', 'max:255'],
		'zip_code' => ['nullable', 'string', 'min:1', 'max:255']
	];

	const updateRules = [
		'user_id' => ['exists:users,id', 'unique:freelancers'],
		'phone' => ['string', 'min:1', 'max:20', 'regex:/^(\\+\\d{1,2}|0)\\d{10}$/'],
		'job_type' => ['string', 'min:1', 'max:50'],
		'job_title' => ['string', 'min:1', 'max:50'],
		'date_of_birth' => ['date'],
		'description' => [],
		'profile_picture_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'country_id' => ['nullable', 'exists:countries,id'],
		'state' => ['nullable', 'string', 'min:1', 'max:255'],
		'city' => ['nullable', 'string', 'min:1', 'max:255'],
		'zip_code' => ['nullable', 'string', 'min:1', 'max:255']
	];

	public function country(): BelongsTo
	{
		return $this->belongsTo(Country::class);
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function certifications(): HasMany
	{
		return $this->hasMany(Certification::class);
	}

	public function education(): HasMany
	{
		return $this->hasMany(Education::class);
	}

	public function experiences(): HasMany
	{
		return $this->hasMany(Experience::class);
	}

	public function languages(): HasMany
	{
		return $this->hasMany(Language::class);
	}

	public function skills(): HasMany
	{
		return $this->hasMany(Skill::class);
	}

	public function social_media(): HasMany
	{
		return $this->hasMany(SocialMedia::class);
	}
}
