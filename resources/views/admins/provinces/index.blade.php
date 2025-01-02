@extends('admins.layouts.app')

@section('title')
Danh sách tỉnh thành
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- <h4 class="card-title">Real Chart</h4> -->
        <a href="{{route('provinces.create')}}" class="btn btn-info d-none d-lg-block m-l-15 text-white">
            <i class="fa fa-plus-circle"></i> Create New</a>
        <div class="demo-container overflow-auto" style="height:400px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th>Deadline</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provinces as $province)
                                    <tr>
                                        <td>{{$province->id}}</td>
                                        <td>{{$province->name}}</td>
                                        <td>May 15, 2015</td>
                                        <td><input type="submit" class="btn btn-sm btn-primary" value="Edit"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    Swal.fire({
        title: "Drag me!",
        icon: "success",
        draggable: true
    });
</script>
@endsection