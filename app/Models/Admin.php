<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Admin extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Inverse relationship for the polymorphic association
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
