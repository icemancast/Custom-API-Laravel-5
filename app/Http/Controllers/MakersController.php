<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Maker;
use App\Http\Requests\CreateMakerRequest;

class MakersController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$makers = Maker::all();

		return response()->json(['data' => $makers], 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$maker = Maker::find($id);

		if( !$maker ) {
			return response()->json([
				'message' => 'Maker not found',
				'code' => 404
			], 404);
		}

		return response()->json(['data' => $maker], 200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMakerRequest $request)
	{
		$values = $request->only(['name', 'phone']);

		Maker::create($values);

		return response()->json([
			'message' => 'Maker correctly added',
			'code' => 201
			], 201);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

}
