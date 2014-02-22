<?php

class DepartmentApiController extends BaseController {

	public function index()
	{
		return Department::all();
	}

	public function store()
	{
		return Department::create(Input::all());
	}

	public function show($id)
	{
		return Department::find($id);
	}

	public function update($id)
	{
		$d = Department::find($id);
		$d->update(Input::all());
		$d->save();
		return $d;
	}

	public function destroy($id)
	{
		return Department::destroy($id);
	}

}
