<?php

class ContactUsController extends BaseController {

	/**
	 * Contact us page.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		return View::make('frontend/pages/contact-us');
	}

	/**
	 * Contact us form processing page.
	 *
	 * @return Redirect
	 */
	public function postIndex()
	{
		// Declare the rules for the form validation
		$rules = array(
			'name'        => 'required',
			'email'       => 'required|email',
			'content'     => 'required',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails())
		{
			return Redirect::route('contact-us')->withErrors($validator);
		}
		
		// Test de presence de l'email de l'administrateur dans la config
		if(!isset(Config::get('mail.from')['address']))
		{
			Session::flash('warning', 'Désolé mais il y a un problème de messagerie, veuillez en informer l\'administrateur du site');
			return Redirect::route('contact-us');
		}

	        // Mise en queue de l'email à l'administrateur
	        Mail::queue('emails.contact', Input::all(), function($m)
	        {
	            	$m->to(Config::get('mail.from')['address'], 'Contact site')->subject('Contact sur le site');
	        });
	
	        Session::flash('success', 'Votre message a bien été envoyé à l\'administrateur du site');
	        return Redirect::home();
	}

}
