<?php

class PaymentController extends BaseController{

	public function index($month = -1, $year = -1)
	{
		if($month == -1)
		{
			$month = date('m');
		}

		if($year == -1)
		{
			$year = date('Y');
		}

		$user = User::getCurrentUser();
		$param['payments'] = Payment::where('month', '=', $month)->where('year', '=', $year)->get();
		$param['month'] = date("F", mktime(null, null, null, $month));
		$param['year'] = $year;

		$param['next']['month'] = $month + 1;
		$param['next']['year'] = $year;

		if($param['next']['month'] == 13)
		{
			$param['next']['month'] = 1;
			$param['next']['year']++;
		}

		$param['prev']['month'] = $month - 1;
		$param['prev']['year'] = $year;

		if($param['prev']['month'] == 0)
		{
			$param['prev']['month'] = 12;
			$param['prev']['year']--;
		}

		return View::make('Payment.index', $param);
	}

	public function form()
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

		
		$param['id'] = Input::get('id');
		

		return View::make('Payment.form', $param);
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$payment = new Payment;

		$renter = Renter::findOrFail(Input::get('renter'));

		$payment->renter()->associate($renter);

		$payment->month = Input::get('month');

		$payment->year = Input::get('year');

		$payment->amount = Input::get('amount');

		$payment->user()->associate($user);

		$payment->save();

		return View::make('Success.success');
	}
}