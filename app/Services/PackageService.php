<?php
namespace App\Services;

use App\Repositories\PackageRepositoryInterface;

class PackageService {
    protected $PackageRepository;

    public function __construct(PackageRepositoryInterface $PackageRepository) {
        $this->PackageRepository = $PackageRepository;
    }

    public function all() {
        return $this->PackageRepository->all();
    }

    public function find($id) {
        return $this->PackageRepository->find($id);
    }

    public function create(array $data) {
        return $this->PackageRepository->create($data);
    }

    public function put(array $data, $id) {
        return $this->PackageRepository->put($data, $id);
    }

    public function patch(array $data, $id) {
        return $this->PackageRepository->patch($data, $id);
    }

    public function delete($id) {
        return $this->PackageRepository->delete($id);
    }
}
