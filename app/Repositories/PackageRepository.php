<?php
namespace App\Repositories;

use App\Models\PackageModel;

class PackageRepository implements PackageRepositoryInterface {

    private $package;

    public function __construct(PackageModel $package)
    {
        $this->package = $package;
    }

    public function all() {
        return $this->package->all();
    }

    public function find($id) {
        return $this->package->find($id);
    }

    public function create(array $data) {
        return $this->package->create($data);
    }

    public function put($id, array $data) {
        $model = $this->package->find($id);
        $model->update($data);
        return $model;
    }

    public function patch($id, array $data) {
        $model = $this->package->find($id);
        $model->update($data);
        return $model;
    }

    public function delete($id) {
        return $this->package->destroy($id);
    }
}
