<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;
use App\Http\Controllers\EmployeController;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employes::all();
        return view ('employes.index')->with('employes', $employes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Employes::create($input);
        return redirect('employes')->with('flash_message', 'Employé ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employes = Employes::find($id);
        return view ('employes.show')->with('employes', $employes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employes = Employes::find($id);
        return view ('employes.edit')->with('employes', $employes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employes = Employes::find($id);
        $input = $request->all();
        $employes->update($input);
        return redirect('employes')->with('flash_message', 'Mis à jour reussi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Employes::destroy($id);
        return redirect('employes')->with('flash_message', 'Suppression reussi!');
    }
}
