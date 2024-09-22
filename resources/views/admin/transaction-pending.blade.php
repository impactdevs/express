<?php $page = 'transaction-pending'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content report-box container-fluid">

            @component('admin/components.breadcrumb')
                @slot('li_1')
                    Transactions
                @endslot
                @slot('li_2')
                    Home
                @endslot
                @slot('li_3')
                    Transactions
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-sm-12">
                    @component('admin/components.settings')
                    @endcomponent

                    <!-- Active User Header -->
                    <div class="page-header user-active">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Pending</h3>
                                <p>Total <span>57</span> Transaction</p>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0);" class="btn export-btn me-1">
                                    <img src="{{ URL::asset('/assets_admin/img/export.svg') }}" alt=""> Export
                                </a>
                                <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                                    <i class="fas fa-filter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Active User Header -->

                    @component('admin/components.search-filter')
                    @endcomponent

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="select-all">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </th>
                                            <th>Order</th>
                                            <th>User</th>
                                            <th>Details</th>
                                            <th>Tnx By</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#24586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                        <p> georgewells@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Withdraw Funds</h5>
                                                        <p> Apr 25, 2022</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>PayPal</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-danger">- 5,165,000 USD</h5>
                                                        <p> Balance : 6,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#44586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-11.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Floyd Lewis</a></h5>
                                                        <p> floydlewis@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Deposit Funds</h5>
                                                        <p> Jun 15, 2012</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>PayPal</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-success">+ 3,335.006 USD</h5>
                                                        <p> Balance : 2,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#14586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-16.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Andrew Glover</a></h5>
                                                        <p>Andrewglover@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Withdraw Funds</h5>
                                                        <p> May 21, 2022</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>Bank Transfer</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-danger">- 5,165,000 USD</h5>
                                                        <p> Balance : 6,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#24586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-14.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="javascript:void(0);">Janet Paden</a></h5>
                                                        <p> georgewells@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Withdraw Funds</h5>
                                                        <p> Apr 25, 2022</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>PayPal</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-danger">- 5,165,000 USD</h5>
                                                        <p> Balance : 6,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#44586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-15.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Floyd Lewis</a></h5>
                                                        <p> floydlewis@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Deposit Funds</h5>
                                                        <p> Jun 15, 2012</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>PayPal</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-success">+ 3,335.006 USD</h5>
                                                        <p> Balance : 2,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td>#14586414</td>
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-16.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Andrew Glover</a></h5>
                                                        <p>Andrewglover@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5>Withdraw Funds</h5>
                                                        <p> May 21, 2022</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="content-user">
                                                <p>Bank Transfer</p>
                                            </td>
                                            <td>
                                                <div class="table-avatar content-user">
                                                    <div>
                                                        <h5 class="text-danger">- 5,165,000 USD</h5>
                                                        <p> Balance : 6,335.006 USD</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="pending">Pending</a>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#transaction-category"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="{{ url('admin/user-profile') }}"><img
                                                            class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-05.svg') }}"
                                                            alt="Img"> User Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-06.svg') }}"
                                                            alt="Img"> Approve</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-07.svg') }}"
                                                            alt="Img"> Reject </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
    @component('admin/components.modal-popup')
    @endcomponent
@endsection