<?php namespace GestorImagenes\Http\Controllers;



class UsuarioController extends Controller {

	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getEditarPerfil()
	{
		return 'editando perfil';
		//return view('usuario.actualizar');
	}

	public function postEditarPerfil()
	{
		return 'editando perfil';
	}
	public function missingMethod($parameters = array())
	{
		abort(404);
	}


}