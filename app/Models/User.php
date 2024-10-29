<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $userable_type
 * @property int $userable_id
 *
 * @property Employer $employer
 * @property Freelancer $freelancer
 *
 * @package App\Models
 */

class User extends Authenticatable implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory, Notifiable;

    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'userable_type',
        'userable_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'userable_id' => 'int'
        ];
    }

    public const createRules = [
        'name' => ['required', 'string', 'min:1', 'max:255'],
        'email' => ['required', 'email', 'min:1', 'max:255', 'unique:users'],
        'email_verified_at' => ['nullable', 'date', 'after_or_equal:1970-01-01 00:00:01', 'before_or_equal:2038-01-19 03:14:07'],
        'password' => ['required', 'string', 'min:1', 'max:255'],
        'remember_token' => ['nullable', 'string', 'min:1', 'max:100'],
        'userable_type' => ['required', 'string', 'min:1', 'max:255'],
        'userable_id' => ['required', 'integer', 'min:0', 'max:18446744073709551615']
    ];

    public const updateRules = [
        'name' => ['string', 'min:1', 'max:255'],
        'email' => ['email', 'min:1', 'max:255', 'unique:users'],
        'email_verified_at' => ['nullable', 'date', 'after_or_equal:1970-01-01 00:00:01', 'before_or_equal:2038-01-19 03:14:07'],
        'password' => ['string', 'min:1', 'max:255'],
        'remember_token' => ['nullable', 'string', 'min:1', 'max:100'],
        'userable_type' => ['string', 'min:1', 'max:255'],
        'userable_id' => ['integer', 'min:0', 'max:18446744073709551615']
    ];

    public function employer(): HasOne
    {
        return $this->hasOne(Employer::class);
    }

    public function freelancer(): HasOne
    {
        return $this->hasOne(Freelancer::class);
    }
}
