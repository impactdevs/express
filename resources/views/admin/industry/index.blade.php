<?php $page = 'industries'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Industries</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/index_admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Industries</li>
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
            <!-- Table of Industries -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Industry Name</th>
                                            <th>Description</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($industries as $key => $industry)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $industry->name }}</td>
                                                <td>{{ $industry->description }}</td>
                                                <td class="text-end">
                                                    <!-- Edit Industry Button -->
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit_industry_{{ $industry->id }}">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <!-- Delete Industry Button -->
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_industry_{{ $industry->id }}">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                    <!-- Delete Confirmation Modal -->
                                                    <div class="modal custom-modal fade"
                                                        id="delete_industry_{{ $industry->id }}" tabindex="-1"
                                                        role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="modal-icon text-center mb-3">
                                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                                    </div>
                                                                    <div class="modal-text text-center">
                                                                        <h2>Delete Industry</h2>
                                                                        <p>Are you sure you want to delete the industry
                                                                            "{{ $industry->name }}"?</p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <form
                                                                        action="{{ route('industries.destroy', $industry->id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Delete Confirmation Modal -->

                                                    <!-- Edit Industry Modal -->
                                                    <div class="modal fade custom-modal"
                                                        id="edit_industry_{{ $industry->id }}">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Industry</h4>
                                                                    <button type="button" class="close"
                                                                        data-bs-dismiss="modal">
                                                                        <span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal Body -->
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('industries.update', ['industry' => $industry->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <label>Industry Name</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name"
                                                                                value="{{ $industry->name }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Description</label>
                                                                            <textarea class="form-control" name="description" required>{{ $industry->description }}</textarea>
                                                                        </div>
                                                                        <div class="mt-4">
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-block">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

    <!-- Add Industry Modal -->
    <div class="modal fade custom-modal" id="add-industry">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Industry</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="{{ route('industries.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Industry Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Industry Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description" required></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Industry Modal -->
@endsection
