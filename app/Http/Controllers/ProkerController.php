<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proker;
use Yajra\DataTables\DataTables;

class ProkerController extends Controller
{
    public function json()
{
    $data = Proker::all();
    $index = 1;
    return DataTables::of($data)
        ->addColumn('DT_RowIndex', function () use (&$index) {
            return $index++;
        })
        ->addColumn('action', function ($proker) {
            $editUrl = url('/superadmin/proker/edit/' . $proker->id);
            $deleteUrl = url('/superadmin/proker/destroy/' . $proker->id);
            return '
                <a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                <a href="#" class="btn btn-sm btn-danger delete-proker" data-url="' . $deleteUrl . '">Delete</a>';
        })
        ->rawColumns(['action'])
        ->toJson();
}

    public function index()
    {
        return view('superadmin.proker.index');
    }

    public function create()
    {
        return view('superadmin.proker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'proker' => 'nullable|string',
        ]);

        Proker::create($request->only('nama_divisi', 'proker'));

        return redirect('/superadmin/proker')->with('success', 'Proker berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $proker = Proker::findOrFail($id);
        return view('superadmin.proker.edit', compact('proker'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'proker' => 'nullable|string',
        ]);

        $proker = Proker::findOrFail($id);
        $proker->update($request->only('nama_divisi', 'proker'));

        return redirect('/superadmin/proker')->with('success', 'Proker berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $proker = Proker::findOrFail($id);
        $proker->delete();

        return response()->json(['success' => 'Proker berhasil dihapus!']);
    }
}
