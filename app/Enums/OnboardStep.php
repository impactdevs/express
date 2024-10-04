<?php

declare(strict_types=1);
namespace App\Enums;

enum OnboardStep: int
{
    case REGISTER_USER = 1;
    case PERSONAL_INFO = 2;
    case EMPLOYER_INFO = 3;
    case SKILLS = 4;
    case OTHER_INFO = 5;
    case SEND_EMAIL = 6;
}
