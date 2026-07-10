<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JadwalController extends Controller
{
    public function index()
    {
        $user = Session::get('user');

        $dates = Jadwal::where('id_user', $user->id_user)
                        ->pluck('date');

        return view('jadwal', compact('dates'));
    }

    public function get(Request $request)
    {
        $jadwal = Jadwal::where('date', $request->date)
            ->where('id_user', Session::get('user')->id_user)
            ->select(
                'id_jadwal',
                'title',
                'date',
                'start_time',
                'end_time',
                'type'
            )
            ->get();

        return response()->json($jadwal);
    }

    public function getdates()
    {
        $user = Session::get('user');
        
        $dates = Jadwal::where('id_user', $user->id_user)
            ->pluck('date')
            ->toArray();
        
        return response()->json($dates);
    }

    public function store(Request $request)
    {
        $user = Session::get('user');
        
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'type' => 'required'
        ]);

        Jadwal::create([
            'id_user' => $user->id_user,
            'title' => $request->name,
            'date' => $request->tanggal,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'type' => $request->type
        ]);

        return redirect()->route('jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function show($id)
    {
        $jadwal = Jadwal::where('id_jadwal',$id)
            ->where('id_user', Session::get('user')->id_user)
            ->firstOrFail();

        return response()->json($jadwal);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'type' => 'required'
        ]);


        $jadwal = Jadwal::findOrFail($id);


        $jadwal->update([
            'title' => $request->name,
            'date' => $request->tanggal,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'type' => $request->type
        ]);


        return redirect()
            ->route('jadwal')
            ->with('success','Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();

        return redirect()->back()
            ->with('success', 'Jadwal berhasil dihapus');
    }
}
