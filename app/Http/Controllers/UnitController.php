<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Unit\UnitRequest;
use App\Models\Unit;

/**
 * Class UnitController
 * @package App\Http\Controllers
 */
class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::oldest('name')->paginate();
        return view('units.index', compact('units'));
    }

    public function edit(Unit $unit)
    {
        return view('units.edit', ['unit' => $unit]);
    }

    public function update(UnitRequest $request, Unit $unit)
    {
        $data = $request->validated();
        $unit->update($data);

        return redirect()
            ->route('units.index')
            ->with('message', 'Единица успешно изменена');
    }
}
