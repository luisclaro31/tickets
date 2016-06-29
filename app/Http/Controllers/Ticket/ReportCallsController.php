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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Requestt $request)
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

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
		return view('ticket.report.index', compact('results', 'reports', 'id', 'query', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
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
