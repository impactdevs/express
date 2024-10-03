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
 * Class Employer
 * 
 * @property int $id
 * @property int $user
 * @property string $company_name
 * @property string $tagline
 * @property string $company_owner_name
 * @property string $phone
 * @property int $industry
 * @property int $team_size
 * @property Carbon $established_on
 * @property string $description
 * @property string|null $profile_picture_path
 * @property string|null $working_hours
 * @property string|null $kyc_document_name
 * @property string|null $kyc_document_path
 * @property int|null $country
 * @property string|null $state
 * @property string|null $city
 * @property string|null $zip_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SocialMedia[] $social_media
 *
 * @package App\Models
 */
class Employer extends Model
{
	protected $table = 'employers';

	protected $casts = [
		'user' => 'int',
		'industry' => 'int',
		'team_size' => 'int',
		'established_on' => 'datetime',
		'country' => 'int'
	];

	protected $fillable = [
		'user',
		'company_name',
		'tagline',
		'company_owner_name',
		'phone',
		'industry',
		'team_size',
		'established_on',
		'description',
		'profile_picture_path',
		'working_hours',
		'kyc_document_name',
		'kyc_document_path',
		'country',
		'state',
		'city',
		'zip_code'
	]; 

	const createRules = [
		'user' => ['required', 'exists:users,id', 'unique:employers'],
		'company_name' => ['required', 'string', 'min:1', 'max:255'],
		'tagline' => ['required', 'string', 'min:1', 'max:255'],
		'company_owner_name' => ['required', 'string', 'min:1', 'max:255'],
		'phone' => ['required', 'string', 'min:1', 'max:20'],
		'industry' => ['required', 'exists:industries,id', 'unique:employers'],
		'team_size' => ['required', 'exists:team_sizes,id', 'unique:employers'],
		'established_on' => ['required', 'date'],
		'description' => ['required'],
		'profile_picture_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'working_hours' => ['nullable', 'string', 'min:1', 'max:255'],
		'kyc_document_name' => ['nullable', 'string', 'min:1', 'max:255'],
		'kyc_document_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'country' => ['nullable', 'exists:countries,id'],
		'state' => ['nullable', 'string', 'min:1', 'max:255'],
		'city' => ['nullable', 'string', 'min:1', 'max:255'],
		'zip_code' => ['nullable', 'string', 'min:1', 'max:255']
	];

	const updateRules = [
		'user' => ['exists:users,id', 'unique:employers'],
		'company_name' => ['string', 'min:1', 'max:255'],
		'tagline' => ['string', 'min:1', 'max:255'],
		'company_owner_name' => ['string', 'min:1', 'max:255'],
		'phone' => ['string', 'min:1', 'max:20'],
		'industry' => ['exists:industries,id', 'unique:employers'],
		'team_size' => ['exists:team_sizes,id', 'unique:employers'],
		'established_on' => ['date'],
		'description' => [],
		'profile_picture_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'working_hours' => ['nullable', 'string', 'min:1', 'max:255'],
		'kyc_document_name' => ['nullable', 'string', 'min:1', 'max:255'],
		'kyc_document_path' => ['nullable', 'string', 'min:1', 'max:255'],
		'country' => ['nullable', 'exists:countries,id'],
		'state' => ['nullable', 'string', 'min:1', 'max:255'],
		'city' => ['nullable', 'string', 'min:1', 'max:255'],
		'zip_code' => ['nullable', 'string', 'min:1', 'max:255']
	];

	public function country(): BelongsTo
	{
		return $this->belongsTo(Country::class, 'country');
	}

	public function industry(): BelongsTo
	{
		return $this->belongsTo(Industry::class, 'industry');
	}

	public function team_size(): BelongsTo
	{
		return $this->belongsTo(TeamSize::class, 'team_size');
	}

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class, 'user');
	}

	public function social_media(): HasMany
	{
		return $this->hasMany(SocialMedia::class, 'employer');
	}
}
