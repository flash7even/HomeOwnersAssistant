<?php

class MaidController extends BaseController{

	public function details($id = -1)
	{
		$user = User::getCurrentUser();

		$param['maids'] = $user->maids;

		if($id != -1)
		{
			$param['maids'] = array(Maid::findOrFail($id));
			if($param['maids'][0]->user->id != $user->id)
			{
				throw new AccessDenied;
				
			}
		}

		return View::make('Maid.details', $param);
	}

	public function add()
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

		return View::make('Maid.add', $param);
	}

	public function addOnSubmit()
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

	public function edit($id)
	{
		$user = User::getCurrentUser();

		$param['renters'] = $user->renters;

		$param['maid'] = Maid::findOrFail($id);

		if($param['maid']->user->id != $user->id)
		{
			throw new AccessDenied;
			
		}

		return View::make('Maid.edit', $param);
	}

	public function editOnSubmit($id)
	{
		$user = User::getCurrentUser();

		$maid = Maid::findOrFail($id);

		if($maid->user->id != $user->id)
		{
			throw new AccessDenied;
			
		}

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