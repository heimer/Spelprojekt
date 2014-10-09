<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = array('username' => 'required','password' => 'required');

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$attempt = Auth::attempt([
				'username' => $input['username'],
				'password' => $input['password']
				]);

			if($attempt) return Redirect::intended('home')->with('message', 'Du har loggat in.'); //if attempt pass, go where the user intended to go, otherwise, go to index.
			return Redirect::to('/')->with('message', 'Fel användarnamn eller lösenord');	
		}
		return Redirect::to('/')->withInput()->withErrors($validation)->with('message', 'Fel inträffade');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
