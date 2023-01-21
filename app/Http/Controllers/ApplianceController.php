<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;

/**
 * Class ApplianceController
 * @package App\Http\Controllers
 */
class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appliances = Appliance::paginate();

        return view('appliance.index', compact('appliances'))
            ->with('i', (request()->input('page', 1) - 1) * $appliances->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appliance = new Appliance();
        return view('appliance.create', compact('appliance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Appliance::$rules);

        $appliance = Appliance::create($request->all());

        return redirect()->route('appliances.index')
            ->with('success', 'Appliance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appliance = Appliance::find($id);

        return view('appliance.show', compact('appliance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appliance = Appliance::find($id);

        return view('appliance.edit', compact('appliance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Appliance $appliance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appliance $appliance)
    {
        request()->validate(Appliance::$rules);

        $appliance->update($request->all());

        return redirect()->route('appliances.index')
            ->with('success', 'Appliance updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appliance = Appliance::find($id)->delete();

        return redirect()->route('appliances.index')
            ->with('success', 'Appliance deleted successfully');
    }
}
