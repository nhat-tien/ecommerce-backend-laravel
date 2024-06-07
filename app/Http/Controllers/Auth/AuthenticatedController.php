<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AuthServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthenticatedController extends Controller
{
	public function __construct(AuthServiceInterface $auth) {}
	/**
	*
	* @return Response
	*/	
	public function login(Request $request): Response
	{
		$response = $this->auth->login($request);

		return response()->json($response, $response->code);	
	}

	public function register(Request $request): Response
	{
		$response = $this->auth->register($request);

		return response()->json($response, $response->code);	
	}

}
