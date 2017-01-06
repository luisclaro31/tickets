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

		$this->vm = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [3, 4])
				->Where('state', '=', 0)
				->paginate(10);
		$this->ic_cr = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [1, 2])
				->Where('state', '=', 0)
				->paginate(10);
		$this->ec_cn = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [5, 6])
				->Where('state', '=', 0)
				->paginate(10);
		$this->in_aet_re_tr = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [7, 8, 9, 10])
				->Where('state', '=', 0)
				->paginate(10);
		$this->sd_dg = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [11, 12])
				->Where('state', '=', 0)
				->paginate(10);
		$this->dr = Student::with('Category', 'Call', 'Call.User')
				->WhereIn('category_id', [13])
				->Where('state', '=', 0)
				->paginate(10);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->get();
		return view('ticket.home', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

}
