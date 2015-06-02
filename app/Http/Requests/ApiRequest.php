<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApiRequest extends Request {

  public function response(array $errors)
  {
    return response()->json(['message' => $errors, 'code' => 422], 422);
  }

}