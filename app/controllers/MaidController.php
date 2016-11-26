<?php

class MaidController extends BaseController{

	public function index()
	{
		$user = User::getCurrentUser();

		$id = Input::get('id');

		$param['maids'] = $user->maids;

		if(!empty($id))
		{
			$param['maids'] = array(Maid::findOrFail($id));
		}

		return View::make('Maid.index', $param);
	}

	public function form()
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

		return View::make('Maid.form', $param);
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$maid = new Maid;

		$maid->name = Input::get('name');

		$maid->nid = Input::get('nid');

		$maid->user()->associate($user);

		$maid->save();

		$renter = Renter::findOrFail(Input::get('renter'));

		$maid->renters()->detach();

		$renter->maids()->detach();

		$maid->renters()->save($renter);

		return View::make('Success.success');
	}

	public function editform()
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

		$param['maid'] = Maid::findOrFail(Input::get('id'));

		return View::make('Maid.editform', $param);
	}

	public function edit()
	{
		$user = User::getCurrentUser();

		$maid = Maid::findOrFail(Input::get('id'));

		$maid->name = Input::get('name');

		$maid->nid = Input::get('nid');

		$maid->user()->associate($user);

		$maid->save();

		$renter = Renter::findOrFail(Input::get('renter'));

		$maid->renters()->detach();

		$renter->maids()->detach();

		$maid->renters()->save($renter);

		return View::make('Success.success');
	}
}