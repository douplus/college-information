<?php

class DepartmentApiController extends BaseController {

	public function getIndex()
	{
		return Department::all();
	}

}
