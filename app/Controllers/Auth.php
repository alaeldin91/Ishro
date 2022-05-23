<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Services;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{

	protected $format = 'json';

	// function login Admin
	public function loginUser()
	{
		/**
		 * JWT claim types
		 * https://auth0.com/docs/tokens/concepts/jwt-claims#reserved-claims
		 */



		// $username = $json->username;
		//$password = $this->input->get_var('password');
		$userModel = new UserModel();


		$user = $userModel->where('password', '1234')->findAll();
	       if ($user) {
			$key = Services::getSecretKey();
			$payload = [
				'aud' => 'alaeldinmusa@gmail.com',
				'iat' => 1356999524,
				'nbf' => 1357000000,

			];



			$jwt = JWT::encode($payload, $key);
			$response = [
				'message' => 'Login Succesful',

				'token' => $jwt
			];

			return  view("appadmin");
		
	}
}
}