<?php namespace Tickets\Http\Controllers\Ticket;

use Tickets\Category;
use Tickets\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

use Tickets\Http\Requests\CreateCallRequest;
use Tickets\Http\Requests;
use Tickets\Student;
use Tickets\Call;

class CallStudentController extends Controller {

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

	public function index()
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$results = Student::with('Category', 'Call','Call.User')
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function frills()
	{
		$vm 	= $this->vm;
		$ic_cr 	= $this->ic_cr;
		$ec_cn	= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg		= $this->sd_dg;
		$dr		= $this->dr;

		$results = $this->vm;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function credit()
	{
		$vm 	= $this->vm;
		$ic_cr 	= $this->ic_cr;
		$ec_cn	= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg		= $this->sd_dg;
		$dr		= $this->dr;

		$results = $this->ic_cr;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function certified()
	{
		$vm 	= $this->vm;
		$ic_cr 	= $this->ic_cr;
		$ec_cn	= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg		= $this->sd_dg;
		$dr		= $this->dr;

		$results = $this->ec_cn;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function registrations()
	{
		$vm 	= $this->vm;
		$ic_cr 	= $this->ic_cr;
		$ec_cn	= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg		= $this->sd_dg;
		$dr		= $this->dr;

		$results = $this->in_aet_re_tr;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function others()
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$results = $this->sd_dg;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	public function dr()
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$results = $this->dr;

		return view('ticket.call.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCallRequest $request)
	{
		$query = Call::studentid($request->get('student_id'))->get();
		$id = 0;
		foreach($query as $querys)
		{
			$id = $querys->id;
		}
		if($id == 0)
		{
			$results = Call::create($request->all());
			$message = 'El Ticket #' . $results->student_id . ' Fue Llamado Con Exito';
		}
		else
		{
			$results = Call::findOrFail($id);
			$results->delete();

			$results = Call::create($request->all());

			$message = 'El Ticket # '. $results->student_id . ' Fue Eliminado y Fue Llamado Con Exito';
		}

		Session::flash('message', $message);
		return \Redirect::back();
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
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$category = Category::orderBy('id', 'ASC')->lists('description', 'id');

		$results_student = Student::findOrFail($id);

		return view('ticket.call.edit', compact('results_student', 'category', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$student = Student::findOrFail($id);
		$student->fill(Request::all());
		$student->save();
		return Redirect::route('ticket.call.index');
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
