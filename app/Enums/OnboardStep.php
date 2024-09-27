<?php

declare(strict_types=1);
namespace App\Enums;

enum OnboardStep: int
{
    case REGISTER_USER = 1;
    case PERSONAL_INFO = 2;
    case SKILLS = 3;
    case OTHER_INFO = 4;
    case SEND_EMAIL = 5;
}
