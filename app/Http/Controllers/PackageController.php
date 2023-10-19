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
        return response()->json($package, 200);
    }

    public function find()
    {
        $package = $this->PackageService->find();
        return response()->json($package, 200);
    }

    public function insert(PackageRequest $request)
    {
        $package = $this->PackageService->create($request->all());
        return response()->json($package, 201);
    }
}