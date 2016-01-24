<?php namespace Tickets\Http\Controllers;

use Tickets\Student;

class HomeController extends Controller {


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

		$this->vola = Student::with('Category')
				->WhereIn('category_id', [ 3, 4, 5])
				->Where('state', '=', 0)
				->paginate();
		$this->cred = Student::with('Category')
				->WhereIn('category_id', [ 1, 2])
				->Where('state', '=', 0)
				->paginate();
		$this->insc = Student::with('Category')
				->WhereIn('category_id', [ 6, 7,9,10,11])
				->Where('state', '=', 0)
				->paginate();
		$this->dr = Student::with('Category')
				->WhereIn('category_id', [ 8])
				->Where('state', '=', 0)
				->paginate();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->get();
		return view('ticket.home', compact('results', 'vola','cred','insc','dr'));
	}

}
