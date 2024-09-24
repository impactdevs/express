<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\CompanyVehicles;

use App\Enums\Version;
use App\Http\Requests\Api\v1_0\CompanyVehicles\CompanyVehicleDestroyRequest;
use App\Models\CompanyVehicle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Symfony\Component\HttpFoundation\Response;

final class CompaniesStoreRequest extends Controller
{
    public function __invoke(CompaniesStoreRequest $request): View
    {
        //        abort_unless(
        //            $version->greaterThanOrEqualsTo(Version::v1_0),
        //            Response::HTTP_NOT_FOUND
        //        );


        return view('');
    }
}
