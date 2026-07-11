<?php

namespace App\Http\Controllers;

use App\Models\reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ReminderController extends Controller
{
    public function index()
    {
        // otomatis nonaktif jika deadline lewat
        Reminder::where('id_user', session('user')->id_user)
            ->where('deadline', '<', now())
            ->update([
                'status' => 'inactive'
            ]);


        $reminders = Reminder::where('id_user', session('user')->id_user)
            ->orderBy('deadline', 'asc')
            ->get();


        return view('reminder', compact('reminders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'waktutanggal'=>'required'
        ]);


        Reminder::create([
            'id_user' => session('user')->id_user,
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'deadline' => $request->waktutanggal,
            'status' => 'active'
        ]);


        return redirect('/reminder');
    }

    public function update(Request $request, $id)
    {
        $reminder = Reminder::where('id_reminder',$id)
            ->where('id_user', session('user')->id_user)
            ->firstOrFail();

        $reminder->update([
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'deadline' => $request->waktutanggal,
        ]);

        return redirect('/reminder');
    }

    public function edit($id)
    {
        $reminder = Reminder::where('id_reminder',$id)
            ->where('id_user', session('user')->id_user)
            ->firstOrFail();

        return view('edit_reminder', compact('reminder'));
    }

    public function destroy($id)
    {
        $reminder = Reminder::where('id_reminder',$id)
        ->where('id_user', session('user')->id_user)
        ->firstOrFail();

        $reminder->delete();

        return redirect()->back()
            ->with('success','Reminder berhasil dihapus');
    }
}