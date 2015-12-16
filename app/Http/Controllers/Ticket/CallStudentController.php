<?php namespace Tickets\Http\Controllers\Ticket;

use Tickets\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

use Tickets\Http\Requests\CreateCallRequest;
use Tickets\Http\Requests;
use Tickets\Student;
use Tickets\Call;
//use Illuminate\Http\Request;

class CallStudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$results = Student::with('Category')
				->where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results'));
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
		$results_create_call = Call::create($request->all());

		Session::flash('message', 'El Ticket #' .$results_create_call->student_id . ' Fue Llamado Con Exito');
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
		$results_student = Student::findOrFail($id);
		return view('ticket.call.edit', compact('results_student'));
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
