@extends('layout.mainlayout_admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
          <!-- Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Employers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/index_admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Employers</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <!-- Add Industry button -->
                        <a href="javascript:void(0);" class="btn me-2 add-button" data-bs-toggle="modal"
                            data-bs-target="#add-industry">
                            <i class="fas fa-plus"></i>
                        </a>
                        <!-- Filter button -->
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--Header-->

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Email Verified</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employers as $index => $admin)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    @if($admin->email_verified_at)
                                                        <span class="badge bg-success">Verified</span>
                                                    @else
                                                        <span class="badge bg-danger">Not Verified</span>
                                                    @endif
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-sm btn-secondary me-2">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
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
