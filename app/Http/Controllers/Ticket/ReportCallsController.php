<?php namespace Tickets\Http\Controllers\Ticket;

use Illuminate\Support\Facades\DB;
use Tickets\Call;
use Tickets\Http\Requests;
use Tickets\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Tickets\Student;

class ReportCallsController extends Controller {

	public function __construct()
	{
		$this->vola = Student::with('Category')
				->WhereIn('category_id', [ 3, 4, 5])
				->Where('state', '=', 0)
				->paginate();
		$this->cred = Student::with('Category')
				->WhereIn('category_id', [ 1, 2])
				->Where('state', '=', 0)
				->paginate();
		$this->insc = Student::with('Category')
				->WhereIn('category_id', [ 6, 7])
				->Where('state', '=', 0)
				->paginate();
		$this->dr = Student::with('Category')
				->WhereIn('category_id', [ 8])
				->Where('state', '=', 0)
				->paginate();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Call::select(['user_id','student_id', DB::raw('COUNT(student_id) as total_calls')])
				->with('user')
				->groupBy('user_id')
				->orderBy('total_calls', 'DECS')
				->paginate(10);
		return view('ticket.report.index', compact('results', 'vola','cred','insc','dr'));
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
		//
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
