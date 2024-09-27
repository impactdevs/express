<?php

declare(strict_types=1);
namespace App\Enums;

enum JobTypes: string
{
    case FULL_TIME = "Full Time";
    case PART_TIME = "Part Time";
    case HOURLY = "Hourly";
}
