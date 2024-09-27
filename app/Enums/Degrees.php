<?php

declare(strict_types=1);
namespace App\Enums;

enum Degrees: string
{
    case BACHELOR = "Bachelor's Degree";
    case MASTER = "Master's Degree";
    case PHD = "PhD";
}
