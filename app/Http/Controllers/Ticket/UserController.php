<?php namespace Tickets\Http\Controllers\Ticket;

use Illuminate\Support\Facades\Redirect;

use Tickets\Http\Controllers\Controller;

use Tickets\Http\Requests\EditUserRequest;
use Tickets\Student;
use Tickets\User;

class UserController extends Controller {

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
		//
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
		$vm 			= $this->vm;
		$ic_cr 			= $this->ic_cr;
		$ec_cn			= $this->ec_cn;
		$in_aet_re_tr	= $this->in_aet_re_tr;
		$sd_dg			= $this->sd_dg;
		$dr				= $this->dr;


		$result = User::findOrFail($id);
		return view('ticket.user.edit', compact('result', 'vm', 'ic_cr', 'ec_cn', 'in_aet_re_tr', 'sd_dg', 'dr'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
		$result = User::findOrFail($id);
		$result->fill($request->all());
		$result->save();
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
