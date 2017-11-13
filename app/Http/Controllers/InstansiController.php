<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;

class InstansiController extends Controller
{
  
    
        public function index()
        {
            $instansis = Instansi::all();
            return view('instansis.index', compact('instansis'));
        }
    
        public function create()
        {
            return view('instansis.create');
        }
    
        public function store(Request $request)
        {
            Instansi::create([
                'name_instansi' => request('name_instansi'),
                'deskripsi'     => request('deskripsi')
            ]);

            return redirect()->route('instansi.index');
        }
    
        public function edit(Instansi $instansi)
        {
            return view('instansis.edit',compact('instansi'));
        }
    
        public function update(Request $request, Instansi $instansi)
        {
            $instansi->update([
                'name_instansi' => request('name_instansi'),
                'deskripsi'     => request('deskripsi')
            ]);
            return redirect()->route('instansi.index');
        }
    
        public function search(Request $request) {
            $query = $request->get('q');
            $results = Instansi::where('name_instansi', 'LIKE', '%' . $query . '%')
            ->paginate((env('PER_PAGE')));
            return view('instansis.result', compact('results', 'query'));
        }
    
        public function destroy(Instansi $instansi)
        {
            $instansi->delete();
            return redirect()->route('instansi.index');
        }
}
