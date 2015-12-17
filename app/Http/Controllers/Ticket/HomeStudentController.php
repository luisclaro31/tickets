<?php namespace Tickets\Http\Controllers\Ticket;

use Carbon\Carbon;
use Tickets\Http\Requests;
use Tickets\Http\Controllers\Controller;

use Tickets\Call;
//use Illuminate\Http\Request;

class HomeStudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		$now = Carbon::now();
		$now = $now->format('l jS \\of F Y h:i:s A');

		$result = Call::orderBy('id', 'DECS')->first();
		$created_at = Carbon::parse($result->created_at);
		$endDate = $created_at->addSeconds(3);
		$created_atf = $endDate->format('l jS \\of F Y h:i:s A');

		$results = Call::with('User','Student', 'Student.Category')
				->orderBy('id', 'DECS')
				->paginate(6);
		return view('home.home', compact('results','created_atf','now'));
	}

	public function index()
	{
		return view('home.welcome');
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
