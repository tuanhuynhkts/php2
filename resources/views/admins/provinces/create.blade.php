@extends('admins.layouts.app')
@section('title')
Thêm mới tỉnh thànhthành
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form class="mt-3" action="{{route('provinces.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <h5>Tên tỉnh thành <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="text" name="name" class="form-control" required data-validation-required-message="Khoản này không được để trống" aria-invalid="false">
                </div>
            </div>
            <div class="text-xs-right">
                <button type="submit" class="btn btn-info text-white">Them moi</button>
                <button type="reset" class="btn btn-inverse">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection