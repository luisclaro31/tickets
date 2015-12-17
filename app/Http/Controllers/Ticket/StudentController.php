<?php namespace Tickets\Http\Controllers\Ticket;

use Tickets\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

use Tickets\Http\Requests\CreateStudentRequest;
use Tickets\Http\Requests\EditStudentRequest;
use Tickets\Http\Requests;
use Tickets\Student;

class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->paginate(10);
		return view('ticket.student.index', compact('results'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'DECS')
				->paginate(2);
		return view('ticket.student.create', compact('results'));
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
		$results_student = Student::findOrFail($id);

		if (Request::ajax()){
			return response()->json([
					'id'				=> $results_student->id,
					'full_name'			=> $results_student->full_name,
					'identification'	=> $results_student->identification,
			]);
		}

		return view('ticket.student.edit', compact('results_student'));
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
