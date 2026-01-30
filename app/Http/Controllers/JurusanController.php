<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255|unique:jurusans',
            'deskripsi' => 'nullable|string'
        ], [
            'nama_jurusan.unique' => 'Nama jurusan sudah ada'
        ]);

        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        
        $request->validate([
            'nama_jurusan' => 'required|string|max:255|unique:jurusans,nama_jurusan,' . $id,
            'deskripsi' => 'nullable|string'
        ], [
            'nama_jurusan.unique' => 'Nama jurusan sudah ada'
        ]);

        $jurusan->update($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        Jurusan::findOrFail($id)->delete();
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }

    public function insert()
    {
        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = 'RPL';
        $jurusan->deskripsi = 'Rekayasa Perangkat Lunak';
        $jurusan->save();

        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = 'TKJ';
        $jurusan->deskripsi = 'Teknik Komputer dan Jaringan';
        $jurusan->save();

        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = 'TKR';
        $jurusan->deskripsi = 'Teknik Kendaraan Ringan';
        $jurusan->save();

        return "Data berhasil ditambahkan!";
    }

    public function massassignment()
    {
        Jurusan::create([
            'nama_jurusan' => 'MM',
            'deskripsi' => 'Multimedia',
        ]);
        Jurusan::create([
            'nama_jurusan' => 'AKL',
            'deskripsi' => 'Akuntansi dan Keuangan Lembaga',
        ]);

        return "Data berhasil ditambahkan dengan mass assignment!";
    }

    public function massUpdate()
    {
        Jurusan::where('id', 1)->update([
            'nama_jurusan' => 'RPL UPDATE',
            'deskripsi' => 'Rekayasa Perangkat Lunak Updated',
        ]);

        return "Data berhasil diupdate";
    }

    public function delete()
    {
        Jurusan::find(1)->delete();
        return "Data berhasil dihapus!";
    }

    public function massDelete()
    {
        Jurusan::whereIn('id', [2, 3])->delete();
        return "Data berhasil dihapus dengan mass delete!";
    }

    public function all()
    {
        $jurusans = Jurusan::all();
        foreach($jurusans as $jurusan){
            echo("Nama Jurusan: " . $jurusan->nama_jurusan) . "<br>";
            echo("Deskripsi: " . $jurusan->deskripsi) . "<br>";
            echo("---") . "<br>";
        }
    }
}
