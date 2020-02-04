<?php
namespace App\Traits;

use Illuminate\Support\Collection;

trait ApiResponser{
    private function successResponse($data, $code){
        return response()->json($data,$code);
    }

    protected function errorResponse($mesage,$code)
    {
        return response()->json(['error'=>$mesage,'code'=>$code],$code);
    }

    protected function showAll(Collection $collection,$code = 200)
    {
        return $this->successResponse(['data'=>$collection],$code);
    }

    protected function showOne($instance,$code = 200)
    {
        return $this->successResponse(['data'=>$instance],$code);
    }

}
