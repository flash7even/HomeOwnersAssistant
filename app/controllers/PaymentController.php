<?php

class PaymentController extends BaseController{
	public function form()
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

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