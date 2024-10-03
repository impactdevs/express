@extends('layout.mainlayout_admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            @component('admin/components.breadcrumb')
                @slot('li_1') Admins @endslot
                @slot('li_2') Home @endslot
                @slot('li_4') Admin @endslot
            @endcomponent

            <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Add Admin</a>

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
                                        @foreach($admins as $index => $admin)
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
