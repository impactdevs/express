@extends('layout.mainlayout_admin')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            @component('admin/components.breadcrumb')
                @slot('li_1') Admins @endslot
                @slot('li_2') Home @endslot
                @slot('li_4') Create Admin @endslot
            @endcomponent

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create Admin</button>
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
