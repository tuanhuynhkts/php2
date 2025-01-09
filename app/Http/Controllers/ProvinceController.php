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




    // Hiển thị form chỉnh sửa tỉnh
    public function edit($id)
    {
        $province = Province::findOrFail($id);

        return view('admins.provinces.edit', compact('province'));
    }

    // Cập nhật dữ liệu tỉnh
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $province = Province::findOrFail($id);
        $province->update($request->all());

        return redirect()->route('provinces.index')->with('success', 'Cập nhật tỉnh thành công');
    }

    // Xóa tỉnh
    public function destroy($id)
    {
        $province = Province::findOrFail($id);
        $province->delete();

        return redirect()->route('provinces.index')->with('success', 'Xóa tỉnh thành công');
    }
}
