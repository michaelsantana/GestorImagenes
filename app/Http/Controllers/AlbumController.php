<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex()
	{
		return 'mostrando albunes del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearAlbum()
	{
		//return view('home');
		return 'formulario de crear Albums';
	}

	public function postCrearAlbum()
	{
		return 'almacenando Album';
	}

	public function getActualizarAlbum()
	{
		//return view('home');
		return 'formulario de actualizar Albums';
	}

	public function postActualizarAlbum()
	{
		return 'actualizando Album';
	}

	public function getEliminarAlbum()
	{
		//return view('home');
		return 'formulario de eliminar Albums';
	}

	public function postEliminarAlbum()
	{
		return 'eliminar  Album';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}