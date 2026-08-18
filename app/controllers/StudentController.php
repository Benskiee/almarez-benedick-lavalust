<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
	private $valid_student_id = 'MCC2024-00023';
	public function index()
	{
		$this->call->view('student_home');
	}

	public function confirm()
	{
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		$data['error'] = $_SESSION['confirm_error'] ?? null;
		unset($_SESSION['confirm_error']);

		$this->call->view('student_confirm', $data);
	}
	public function verify()
	{
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		$submitted_id = trim($_POST['student_id'] ?? '');

		if ($submitted_id === $this->valid_student_id) {
			$_SESSION['student_access'] = true;
			redirect('student/profile');
		} else {
			$_SESSION['confirm_error'] = 'Incorrect Student ID. Please try again.';
			redirect('student/confirm');
		}
	}

	public function profile()
{
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	$student = [
		'student_id' => 'MCC2024-00023',
		'name'       => 'Benedick Almarez',
		'course'     => 'BS Information Technology',
		'year'       => '3rd Year',
		'section'    => '3-F1',
		'email'      => 'almarezbenedick@gmail.com',
	];
	unset($_SESSION['student_access']);

	$this->call->view('student_profile', $student);
}
}