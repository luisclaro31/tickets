<?php namespace Tickets\Http\Controllers\Ticket;

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

		$results = Student::with('Category', 'Call','Call.User')
				//->WhereIn('category_id', [ 2, 3])
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results', 'vola','cred','insc','dr'));
	}

	public function frills()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Student::with('Category', 'Call','Call.User')
				->WhereIn('category_id', [ 3, 4, 5])
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results', 'vola','cred','insc','dr'));
	}

	public function credit()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Student::with('Category', 'Call','Call.User')
				->WhereIn('category_id', [ 1, 2])
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results', 'vola','cred','insc','dr'));
	}

	public function registrations()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Student::with('Category', 'Call','Call.User')
				->WhereIn('category_id', [ 6, 7])
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results', 'vola','cred','insc','dr'));
	}

	public function dr()
	{
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results = Student::with('Category', 'Call','Call.User')
				->WhereIn('category_id', [ 8])
				->Where('state', '=', 0)
				->orderBy('id', 'ASC')
				->paginate(10);
		return view('ticket.call.index', compact('results', 'vola','cred','insc','dr'));
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
		$query = Call::name($request->get('student_id'))->get();
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
		$vola = $this->vola;
		$cred = $this->cred;
		$insc = $this->insc;
		$dr = $this->dr;

		$results_student = Student::findOrFail($id);
		return view('ticket.call.edit', compact('results_student', 'vola','cred','insc','dr'));
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
