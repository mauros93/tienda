<?php namespace App\Controllers;

class Home extends BaseController
{
	public function nosotros()
	{
		return view('acerca');
	}

	public function blog()
	{
		return view('blog');
	}

	

}
