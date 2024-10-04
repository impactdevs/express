<?php

declare(strict_types=1);
namespace App\Enums;

enum SocialMediaPlatforms: string
{
    case FACEBOOK = 'facebook';
    case INSTAGRAM = 'instagram';
    case TWITTER = 'twitter';
    case LINKEDIN = 'linkedin';
    case PINTEREST = 'pinterest';
    case WEBSITE = 'website';
}
