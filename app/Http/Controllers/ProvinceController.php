<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('admins.provinces.index')->with('provinces', $provinces);
    }
    public function create()
    {
        return view('admins.provinces.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Province::create($request->all());
        return redirect()->route('provinces.index')->with('success', 'thêm tỉnh thành thành công');
    }
}
