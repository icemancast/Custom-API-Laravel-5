<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Vehicle;

class VehiclesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vehicles = Vehicle::all();

    return response()->json([
      'data' => $vehicles,
      'code' => 200
    ], 200);
	}

}
