<?php


namespace App\Repositories;

interface PackageRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function put(array $data, $id);
    public function patch(array $data, $id);
    public function delete($id);
}