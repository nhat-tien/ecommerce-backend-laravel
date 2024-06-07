<?php

namespace App\Http\Interfaces;

use Illuminate\Http\Request;


interface AuthServiceInterface 
{
	/**
	* @return array
	*/
	public function login(Request $request): array;
    /**
     * @return array
     */
    public function register(Request $request): array;
    /**
     * @return array
     */
    public function logout(Request $request): array;
}
