<?php

class ContactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Contact::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email_address = Input::get('email_address');
		$description = Input::get('description');

		Contact::create(array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email_address' => $email_address,
			'description' => $description
		));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Contact::find($id);
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
		$contact = Contact::find($id);

		$first_name = Input::get('first_name');
		$last_name = Input::get('last_name');
		$email_address = Input::get('email_address');
		$description = Input::get('description');

	  $contact->first_name    = $first_name;
	  $contact->last_name     = $last_name;
	  $contact->email_address   = $email_address;
	  $contact->description = $description;
		
		$contact->save();
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