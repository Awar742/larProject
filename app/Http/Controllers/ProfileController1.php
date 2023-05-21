<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\timetable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\php_DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController1 extends Controller
{
    /**
     * Display the timetable edit form.
     */
    public function edit(Request $request, $id): View
    {
        $timetable = Timetable::findOrFail($id);

        return view('timetable.edit', compact('timetable'));
    }

    /**
     * Update the timetable record.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $timetable = Timetable::findOrFail($id);

        $timetable->group = $request->input('group');
        $timetable->grafik = $request->input('grafik');

        $timetable->save();

        return redirect()->route('timetable.edit', $timetable->id)->with('status', 'Зміни збережено.');
    }
}
