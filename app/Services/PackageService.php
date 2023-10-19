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

    public function put($id, array $data) {
        return $this->PackageRepository->put($id, $data);
    }

    public function patch($id, array $data) {
        return $this->PackageRepository->patch($id, $data);
    }

    public function delete($id) {
        return $this->PackageRepository->delete($id);
    }
}
