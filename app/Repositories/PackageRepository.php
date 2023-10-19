<?php
namespace App\Repositories;

use App\Exceptions\AppException;
use App\Models\PackageModel;
use Illuminate\Http\Response;

class PackageRepository implements PackageRepositoryInterface
{

    private $package;

    public function __construct(PackageModel $package)
    {
        $this->package = $package;
    }

    public function all()
    {
        try {
            $package = $this->package->all();

            return response()->json($package, Response::HTTP_OK);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function find($id)
    {
        try {
            $package = $this->package->where(["transaction_id" => $id])->get();

            if ($package->isEmpty()) {
                return response()->json(['message' => "Package Not Found"], Response::HTTP_OK);
            }

            return response()->json($package, Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    public function create(array $data)
    {

        try {

            $exists = $this->package->where("transaction_id", $data['transaction_id'])->count();
            if ($exists > 0) {
                return response()->json(['message' => "Package Duplicate"], Response::HTTP_BAD_REQUEST);
            }

            $package = $this->package->create($data);

            if (!$package) {
                throw new \Exception("Package was not created");
            }

            return response()->json(['message' => "Package created"], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function put(array $data, $id)
    {

        try {
            $package = $this->package->updateOrCreate(
                ['transaction_id' => $id],
                $data
            );

            if ($package) {
                return response()->json(['message' => "Package updated successfully"], Response::HTTP_OK);
            }

            throw new \Exception("Package failed updated");

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function patch(array $data, $id)
    {
        try {
            $package = $this->package->where("transaction_id", $id)->first();

            if (!$package) {
                return response()->json(['message' => "Package not found"], Response::HTTP_OK);
            }

            $package->update($data);

            return response()->json(['message' => "Package updated successfully"], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function delete($id)
    {
        try {
            $package = $this->package->where("transaction_id", $id)->delete();

            if ($package > 0) {
                return response()->json(['message' => "Package deleted"], Response::HTTP_OK);
            }

            return response()->json(['message' => "Package not found"], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
