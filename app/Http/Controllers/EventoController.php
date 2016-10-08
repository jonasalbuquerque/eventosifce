<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventos = Evento::orderBy('id', 'asc')->paginate(10);

		return view('eventos.index', compact('eventos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('eventos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$evento = new Evento();
		$evento->nome = $request->nome;
		$evento->data = $request->data;
		$evento->vagas = $request->vagas;
		$evento->admin_id = Auth::user()->id;
		
		$evento->save();

		return redirect()->route('eventos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$evento = Evento::findOrFail($id);

		return view('eventos.show', compact('evento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$evento = Evento::findOrFail($id);

		return view('eventos.edit', compact('evento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$evento = Evento::findOrFail($id);

		

		$evento->save();

		return redirect()->route('eventos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$evento = Evento::findOrFail($id);
		$evento->delete();

		return redirect()->route('eventos.index')->with('message', 'Item deleted successfully.');
	}

}
