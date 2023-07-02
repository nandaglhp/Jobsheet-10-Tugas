<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $keyword = $request->get('search');
    $query = Mahasiswa::query();

    if ($keyword) {
        $query->where('Nama', 'LIKE', "%$keyword%");
    }
    $mahasiswas = $query->paginate(3);
    // dd($mahasiswas);
    // $mahasiswas = Mahasiswa::with('kelas')->get();
    // $paginate = Mahasiswa::orderBy('Nim', 'asc')->paginate(3);
    return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $validated =  $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg.svg,pdf',
            'kelas_id' => 'required',
            'Jurusan' => 'required',
        ]);


        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            $path = 'storage/gambar_mhs/';
            $file->move($path, $fileName);
            $validated['foto'] = $path . $fileName;
        }

        $fileName = $request->file('foto')->getClientOriginalName();
        $mahasiswa = new Mahasiswa;
            $mahasiswa->Nim = $request->get('Nim');
            $mahasiswa->Nama =  $request->get('Nama');
            $mahasiswa->foto =  $fileName;
            $mahasiswa->kelas_id =  $request->get('kelas_id');
            $mahasiswa->Jurusan =  $request->get('Jurusan');
            $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $Nim)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        $Mahasiswa = Mahasiswa::find($Nim);
        return view('mahasiswa.detail', compact('Mahasiswa'));
        $validated =  $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg.svg,pdf',
            'kelas_id' => 'required',
            'Jurusan' => 'required',
        ]);
        if($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('gambar_mhs','public');
        }
        Mahasiswa::detail($validated);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $Nim)
    {
        // $Mahasiswa = Mahasiswa::find($Nim);
        $Mahasiswa = Mahasiswa::with('kelas')->where('nim', $Nim)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.edit', compact('Mahasiswa','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Nim)
    {
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg.svg,pdf',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);
        Mahasiswa::find($Nim)->update($request->all());
        return redirect()->route('mahasiswa.index')
            ->with('succes', 'Mahasiswa Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Nim)
    {
        Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswa.index')
            -> with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function nilai($Nim){
        $Mahasiswas = Mahasiswa::find($Nim)->first();
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $Nim)->get();
        $matakuliah = MataKuliah::whereIn('id',$nilai->pluck('matakuliah_id'))->get();
        return view('mahasiswa.nilai', compact(['nilai','Mahasiswas', 'matakuliah']));
    }

    public function cetak_pdf($Nim){
        $Mahasiswas = Mahasiswa::find($Nim)->first();
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $Nim)->get();
        $matakuliah = MataKuliah::whereIn('id',$nilai->pluck('matakuliah_id'))->get();
        $pdf = PDF::loadview('mahasiswa.cetak_pdf', ['mahasiswa' => $Mahasiswas, 'nilai' => $nilai]);
        return $pdf->stream();
    }
}
