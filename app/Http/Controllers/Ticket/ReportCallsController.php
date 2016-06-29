<?php namespace Tickets\Http\Controllers\Ticket;

use Carbon\Carbon;
use Illuminate\Http\Request as Requestt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Tickets\Call;
use Tickets\Http\Requests;
use Tickets\Http\Controllers\Controller;
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
				->WhereIn('category_id', [ 6, 7,9,10,11])
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
	public function index(Requestt $request)
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		//$now = Carbon::now();
		//$now = $now->toDateString();
		//$query = ['date' => $now];

		$query = Request::all();

		$reports = \DB::table('calls')
				->select(
					'calls.user_id',
					'users.full_name',
					'users.type_id',
					'students.category_id',
					'categories.description',
					DB::raw('COUNT(calls.user_id) as total_calls_category', 'COUNT(students.category_id) as total_category')
				)
				->where('users.type_id', 2)
				->groupBy('calls.user_id')
				->groupBy('students.category_id')
				->join('users', 'users.id', '=','calls.user_id')
				->join('students', 'students.id', '=','calls.student_id')
				->join('categories', 'categories.id', '=', 'students.category_id')
				->get();
		$id = 0;

		//$repor = Call::with('user')->date($request->get('date'))->

		$results = Call::with('user')
				->date($request->get('date'))
				->select(['user_id','student_id', DB::raw('COUNT(student_id) as total_calls')])
				->groupBy('user_id')
				->orderBy('total_calls', 'DECS')
				->paginate(10);
		return view('ticket.report.index', compact('results', 'reports', 'id', 'query', 'vola','cred','insc','dr'));
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
