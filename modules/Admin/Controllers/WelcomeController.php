<?php namespace Modules\Admin\Controllers;
use Modules\Common\Models\User;
use Auth;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $user = new User;

		// $user->name = 'admin';
		// $user->email='admin@admin.com';
		// $user->password=password_hash('123', PASSWORD_BCRYPT);
		// $user->save();
		dump(Auth::user());
		// Auth::attempt(['email' => 'admin@admin.com', 'password' => '123']);
		return view('welcome');
	}

}
