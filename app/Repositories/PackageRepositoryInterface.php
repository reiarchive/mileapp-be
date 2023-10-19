<?php


namespace App\Repositories;

interface PackageRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function find($id);
    public function put($id, array $data);
    public function patch($id, array $data);
    public function delete($id);
}