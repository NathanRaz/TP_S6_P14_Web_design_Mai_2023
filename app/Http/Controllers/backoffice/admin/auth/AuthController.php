<?php

namespace App\Http\Controllers\backoffice\admin\auth;

use App\Constantes\Constante;
use App\Http\Controllers\Controller;
use App\Http\Requests\auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function login() : View {
		$data = Constante::createData (
			"Se connecter", "user", $user, 'pages.backoffice.auth.login', Constante::DEFAULT_NAVBAR
		);
		return \view (Constante::DEFAULT_PAGE, $data);
	}
	
    public function doLogin(LoginRequest $request) : RedirectResponse {
		$credentials = $request->validated ();
		if (Auth::attempt ($credentials)) {
			$request->session ()->regenerate ();
			return redirect ()->intended (route ('backoffice.contents.index'));
		}
		
		return back ()->with('error', 'Vérifier que vos identifiants sont correctes!!!')->onlyInput ('email');
    }
	
	public function logout() {
		Auth::logout ();
		return redirect ()->route ('login')->with ('success', 'Vous êtes maintenant déconnecté');
	}
	
}
