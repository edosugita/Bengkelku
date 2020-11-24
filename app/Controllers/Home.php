<?php

namespace App\Controllers;

use App\Models\BengkelModel;
use App\Models\UserModel;
use App\Models\UserUpload;
use Config\App;

class Home extends BaseController
{
	protected $model;
	protected $bengkelModel;

	public function __construct()
	{
		$this->model = new UserUpload();
		$this->bengkelModel = new BengkelModel();
	}

	public function index()
	{
		$keyword = $this->request->getVar('keyword');

		if ($keyword) {
			$bengkel = $this->bengkelModel->search($keyword);
		} else {
			$bengkel = $this->bengkelModel;
		}

		$data = [
			'title' => 'bengkelku.id',
			'bengkel' => $bengkel->paginate(50, 'bengkel'),
			'pager' => $this->bengkelModel->pager,

		];

		return view('pages/home', $data);
	}

	public function login()
	{
		$data = [
			'title' => 'Login'
		];

		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]'
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (!$this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			} else {
				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))->first();
				$this->setUserSession($user);

				return redirect()->to('/');
			}
		}

		return view('pages/login', $data);
	}

	private function setUserSession($user)
	{
		$data = [
			'id' => $user['id'],
			'namadepan' => $user['nama_depan'],
			'namabelakang' => $user['nama_belakang'],
			'number' => $user['number'],
			'alamat' => $user['alamat'],
			'email' => $user['email'],
			'picture' => $user['picture'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register()
	{
		$data = [
			'title' => 'Register'
		];

		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			$rules = [
				'namadepan' => 'required|min_length[3]|max_length[20]',
				'namabelakang' => 'required|min_length[3]|max_length[20]',
				'number' => 'required|min_length[10]|max_length[13]',
				'alamat' => 'required',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password2' => 'matches[password]'
			];

			if (!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
				$model = new UserModel();

				$newData = [
					'nama_depan' => $this->request->getVar('namadepan'),
					'nama_belakang' => $this->request->getVar('namabelakang'),
					'number' => $this->request->getVar('number'),
					'alamat' => $this->request->getVar('alamat'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				];

				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/login');
			}
		}

		return view('pages/register', $data);
	}

	public function profile()
	{
		$data = [
			'title' => 'Profile',
		];

		return view('pages/profile', $data);
	}

	public function update()
	{
		helper(['form']);

		$rules = [
			'fileupload' => 'uploaded[fileupload]|mime_in[fileupload,image/jpg,image/jpeg,image/gif,image/png]|max_size[fileupload,2048]'
		];

		if (!$this->validate($rules)) {
			$data['validation'] = $this->validator;
		} else {
			$newData = $this->request->getFile('fileupload');

			$namaFile = $newData->getRandomName();
			$newData->move('assets/img', $namaFile);
			$file = [
				'id' => session()->get('id'),
				'email' => $this->request->getVar('email'),
				'picture' => $namaFile
			];

			$this->model->save($file);
			$session = session();
			$session->setFlashdata('success', 'Successful Upload');

			$user = $this->model->where('email', $this->request->getVar('email'))->first();
			$this->setUserSession($user);
			return redirect()->to('/profile');
		}
	}

	public function save()
	{
		helper(['form']);
		$rules = [
			'namadepan' => 'max_length[20]',
			'namabelakang' => 'max_length[20]',
			'number' => 'max_length[13]',
			'email' => 'max_length[50]',
		];

		if (!$this->validate($rules)) {
			$data['validation'] = $this->validator;
		} else {
			$newData = [
				'id' => session()->get('id'),
				'nama_depan' => $this->request->getVar('namadepan'),
				'nama_belakang' => $this->request->getVar('namabelakang'),
				'number' => $this->request->getVar('number'),
				'alamat' => $this->request->getVar('alamat'),
				'email' => $this->request->getVar('email'),
			];

			$this->model->save($newData);
			$session = session();
			$session->setFlashdata('success', 'Successful Upload');

			$user = $this->model->where('email', $this->request->getVar('email'))->first();
			$this->setUserSession($user);
			return redirect()->to('/profile');
		}
	}

	public function detail($slug)
	{

		$data = [
			'title' => 'Detail',
			'bengkel' => $this->bengkelModel->getBengkel($slug)
		];

		return view('pages/detail', $data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
