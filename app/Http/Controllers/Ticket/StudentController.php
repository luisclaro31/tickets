<?php namespace Tickets\Http\Controllers\Ticket;

use Tickets\Category;
use Tickets\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

use Tickets\Http\Requests\CreateStudentRequest;
use Tickets\Http\Requests\EditStudentRequest;
use Tickets\Http\Requests;
use Tickets\Student;

class StudentController extends Controller {

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

		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->paginate(10);
		return view('ticket.student.index', compact('results', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;

		$category = Category::orderBy('id', 'ASC')->lists('description', 'id');

		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->paginate(2);
		return view('ticket.student.create', compact('results', 'category', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateStudentRequest $request)
	{
		$results_create_student = Student::create($request->all());

		Session::flash('message', $results_create_student->full_name . ' Creado Con Exito');
		return Redirect::route('ticket.student.create');
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

		if (Request::ajax()){
			return response()->json([
					'id'				=> $results_student->id,
					'full_name'			=> $results_student->full_name,
					'identification'	=> $results_student->identification,
			]);
		}

		return view('ticket.student.edit', compact('results_student', 'category', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditStudentRequest $request, $id)
	{
		$student = Student::findOrFail($id);
		$student->fill($request->all());
		$student->save();
		Session::flash('message', $student->full_name . ' Modificado Con Exito');
		return Redirect::route('ticket.student.create');

		//return \Redirect::back();
		//Actualizacion con ajax o funcinal a un
		//$student = Student::findOrFail($id);
		//$student->fill(Request::all());
		//$student->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$results = Student::findOrFail($id);
		$results->delete();

		$message = 'El Registro '. $results->full_name . ' Fue Eliminado Con Exito ';

		if (Request::ajax()){
			return response()->json([
					'id'		=> 	$results->id,
					'message'	=>	$message
			]);
		}

		Session::flash('message', $message);
		return redirect()->route('ticket.student.index');
	}

}
