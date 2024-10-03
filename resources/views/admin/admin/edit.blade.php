@extends('layout.mainlayout_admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            @component('admin/components.breadcrumb')
                @slot('li_1') Admins @endslot
                @slot('li_2') Home @endslot
                @slot('li_4') Edit Admin @endslot
            @endcomponent

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{ $admin->name }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $admin->email }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Password <small>(Leave blank to keep current password)</small></label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Admin</button>
                                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
