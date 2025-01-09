@extends('admins.layouts.app')
@section('title')
Chỉnh sửa tỉnh thành
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form class="mt-3" action="{{ route('provinces.update', $province->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <h5>Tên tỉnh thành <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="name" class="form-control" value="{{ $province->name }}" required data-validation-required-message="Khoản này không được để trống" aria-invalid="false">
                </div>
            </div>

            <div class="text-xs-right">
                <button type="submit" class="btn btn-info text-white">Cập nhật</button>
                <a href="{{ route('provinces.index') }}" class="btn btn-inverse">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection