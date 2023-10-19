<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PackageService;
use App\Http\Requests\PackageRequest;

class PackageController extends Controller
{
    protected $PackageService;

    public function __construct(PackageService $PackageService)
    {
        $this->PackageService = $PackageService;
    }

    public function index()
    {
        $package = $this->PackageService->all();
        return $package;
    }

    public function find($PackageId)
    {
        $package = $this->PackageService->find($PackageId);
        return $package;
    }

    public function insert(PackageRequest $request)
    {

        $package = $this->PackageService->create($request->all());
        return $package;
    }

    public function put(PackageRequest $request, $PackageId)
    {
        $package = $this->PackageService->put($request->all(), $PackageId);
        return $package;
    }

    public function patch(PackageRequest $request, $PackageId)
    {
        $package = $this->PackageService->patch($request->all(), $PackageId);
        return $package;
    }

    public function delete($PackageId)
    {
        $package = $this->PackageService->delete($PackageId);
        return $package;
    }
}