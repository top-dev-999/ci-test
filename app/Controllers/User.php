<?php

namespace App\Controllers;

class User extends BaseController
{
	public function __construct() {
	}
	public function edit($id)
	{
		$userModel = new \App\Models\UserModel();
		$user = $userModel->find($id);
		$data['user'] = $user;
		return view('users/edit', $data);
	}

	public function create() {
		return view('users/create');
	}

	public function remove($id)
	{
		$user = new \App\Models\UserModel();
		$user->delete($id);
		return redirect('/');
	}

	public function add() 
	{
		$firstname = $this->request->getPost('firstname');
		$lastname = $this->request->getPost('lastname');
		$birthday = $this->request->getPost('birthday');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$gender = $this->request->getPost('gender');
		$address = $this->request->getPost('address');
		
		$data = [
			'firstname' => $firstname,
			'lastname' => $lastname,
			'birthday' => $birthday,
			'email' => $email,
			'password' => $password,
			'gender' => $gender,
			'address' => $address
		];
		$user = new \App\Models\UserModel();
		$user->insert($data);
		return redirect('/');
	}

	public function save($id) 
	{
		$firstname = $this->request->getPost('firstname');
		$lastname = $this->request->getPost('lastname');
		$birthday = $this->request->getPost('birthday');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$gender = $this->request->getPost('gender');
		$address = $this->request->getPost('address');
		
		$data = [
			'firstname' => $firstname,
			'lastname' => $lastname,
			'birthday' => $birthday,
			'email' => $email,
			'password' => $password,
			'gender' => $gender,
			'address' => $address
		];

		$user = new \App\Models\UserModel();
		$user->update($id, $data);

		return redirect('/');
	}
}
