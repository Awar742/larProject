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
        $timetable = timetable::findOrFail($id);

        return view('profile.newEdit', ['user' => $request->user(),]);
    }

    /**
     * Update the timetable record.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $timetable = timetable::findOrFail($id);

        $timetable->date = $request->input('date');
        $timetable->queue_1 = $request->input('queue_1');
        $timetable->queue_2 = $request->input('queue_2');
        $timetable->queue_3 = $request->input('queue_3');
        $timetable->queue_4 = $request->input('queue_4');


        $timetable->save();

        return redirect()->route('profile.newEdit', $timetable->id)->with('status', 'Зміни збережено.');
    }
}
