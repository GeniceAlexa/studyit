<?php

namespace App\Http\Controllers;

use App\Models\MateriFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Aktivitas;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class MateriFileController extends Controller
{
    public function index()
    {
        $user = Session::get('user');

        $files = MateriFile::where(
            'id_user',
            $user->id_user
        )->get();

        return view('materifile', compact('files'));
    }
        
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file'
        ]);

        $path = $request->file('file')->store('materi', 'public');

        $user = Session::get('user');

        $materi = MateriFile::create([
            'id_user'=>$user->id_user,
            'id_rooms'=>null,
            'title'=>$request->title,
            'file_path'=>$path
        ]);


        // simpan aktivitas
        Aktivitas::create([
            'id_user' => $user->id_user,
            'jenis' => 'materi',
            'deskripsi' => $user->name . ' mengunggah materi ' . $request->title,
            'icon' => 'materi.png'
        ]);

        return redirect()->back()->with('success', 'File berhasil diupload');
    }

    public function destroy($id)
    {
        $file = MateriFile::findOrFail($id);

        // hapus file fisik dari storage
        Storage::disk('public')->delete($file->file_path);

        // hapus dari database
        $file->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus');
    }
}
