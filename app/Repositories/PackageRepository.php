<?php
namespace App\Repositories;

use App\Models\PackageModel;

class PackageRepository implements PackageRepositoryInterface {
    public function all() {
        return PackageModel::all();
    }

    public function find($id) {
        return PackageModel::find($id);
    }

    public function create(array $data) {
        return PackageModel::create($data);
    }

    public function put($id, array $data) {
        $model = PackageModel::find($id);
        $model->update($data);
        return $model;
    }

    public function patch($id, array $data) {
        $model = PackageModel::find($id);
        $model->update($data);
        return $model;
    }

    public function delete($id) {
        return PackageModel::destroy($id);
    }
}
