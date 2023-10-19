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
        return response()->json($package);
    }

    public function find($PackageId)
    {
        $package = $this->PackageService->find($PackageId);
        return response()->json($package);
    }

    public function insert(PackageRequest $request)
    {
        $package = $this->PackageService->create($request->all());
        return response()->json($package, 201);
    }

    public function put(PackageRequest $request, $PackageId)
    {
        $package = $this->PackageService->put($PackageId, $request->all());
        return response()->json($package);
    }

    public function patch(PackageRequest $request, $PackageId)
    {
        $package = $this->PackageService->patch($PackageId, $request->all());
        return response()->json($package);
    }

    public function delete($PackageId)
    {
        $package = $this->PackageService->delete($PackageId);
        return response()->json($package);
    }
}