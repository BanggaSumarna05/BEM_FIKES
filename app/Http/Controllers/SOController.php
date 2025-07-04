<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan_so;
use App\Models\value_so;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SOController extends Controller
{
    public function json()
{
    $data = value_so::with('jabatanSo')->get();
    $index = 1;

    return DataTables::of($data)
        ->addColumn('DT_RowIndex', function () use (&$index) {
            return $index++;
        })
        ->addColumn('photo', function ($valueSo) {
            return $valueSo->photo; // kirim path foto saja, akan di-render di blade
        })
        ->addColumn('action', function ($valueSo) {
            $editUrl = url('/superadmin/SO/edit/' . $valueSo->id);
            $deleteUrl = url('/superadmin/SO/destroy/' . $valueSo->id);
            return '<a href="' . $editUrl . '" class="btn btn-primary">Edit</a> ' .
                   '<a href="#" class="btn btn-danger delete-value-so" data-url="' . $deleteUrl . '">Delete</a>';
        })
        ->rawColumns(['action'])
        ->toJson();
}


    public function index()
    {
        return view('superadmin.SO.index');
    }

    public function create()
    {
        return view('superadmin.SO.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'name_jabatan' => 'required',
        'name_value_so' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Simpan jabatan
    $jabatan = jabatan_so::create([
        'name_jabatan' => $request->input('name_jabatan')
    ]);

    // Proses upload foto
    if ($request->hasFile('photo')) {
    $photoPath = $request->file('photo')->store('struktur_organisasi', 'public');
} else {
    $photoPath = null;
}



    // Simpan value_so
    value_so::create([
    'name_value_so' => $request->name_value_so,
    'jabatan_so_id' => $jabatan->id,
    'photo' => $photoPath,
]);


    return redirect('/superadmin/SO')->with('success', 'Organizational structure created successfully.');
}



    public function show($id) {}

    public function edit($id)
    {
        $jabatanSo = jabatan_so::find($id);
        $valueSo = value_so::where('jabatan_so_id', $id)->first();

        if ($jabatanSo && $valueSo) {
            $jabatanSos = jabatan_so::all();
            return view('superadmin.SO.edit', compact('jabatanSo', 'valueSo', 'jabatanSos'));
        } else {
            return redirect()->back()->with('error', 'Data not found.');
        }
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name_jabatan' => 'required',
        'name_value_so' => 'required',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $jabatanSo = jabatan_so::find($id);
    if ($jabatanSo) {
        $jabatanSo->update([
            'name_jabatan' => $request->input('name_jabatan')
        ]);
    }

    $valueSo = value_so::where('jabatan_so_id', $id)->first();

    if ($valueSo) {
        $data = [
            'name_value_so' => $request->input('name_value_so'),
        ];

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('struktur_organisasi', 'public');
            $data['photo'] = $photoPath;
        }

        $valueSo->update($data);
    }

    return redirect('/superadmin/SO')->with('success', 'Organizational structure updated successfully.');
}

    public function destroy($id)
    {
        $valueSo = value_so::where('jabatan_so_id', $id)->first();
        if ($valueSo && $valueSo->photo && Storage::disk('public')->exists($valueSo->photo)) {
            Storage::disk('public')->delete($valueSo->photo);
        }

        $deletedValue = value_so::where('jabatan_so_id', $id)->delete();
        $deletedJabatan = jabatan_so::destroy($id);

        if ($deletedJabatan || $deletedValue) {
            return response()->json(['message' => 'Organizational structure deleted successfully.']);
        } else {
            return response()->json(['error' => 'Failed to delete organizational structure.']);
        }
    }
}
