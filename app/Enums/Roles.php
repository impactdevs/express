<?php

declare(strict_types=1);

namespace App\Enums;

enum  Roles: string
{
    case ADMIN = "admin";
    case FREELANCER = "freelancer";
    case EMPLOYER = 'employer';
}
