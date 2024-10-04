<?php $page = 'user-active'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content report-box container-fluid">

            @component('admin/components.breadcrumb')
                @slot('li_1')
                    Freelancer
                @endslot
                @slot('li_2')
                    Home
                @endslot
                @slot('li_3')
                    Freelancer
                @endslot
                @slot('li_4')
                    Add User
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
                                <h3 class="page-title">Active Freelancer</h3>
                                <p>Total <span>25</span> Freelancer </p>
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
                                            <th>Freelancer</th>
                                            <th>Expertise</th>
                                            <th>Verified</th>
                                            <th>Account Balance </th>
                                            <th>Joined Date</th>
                                            <th>Last Login</th>
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
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-12.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Janet Paden</a></h5>
                                                        <p> georgewells@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Frontend Developer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 text-success"></i>Email</td>
                                            <td>$7,763.05</td>
                                            <td>18 April 2022</td>
                                            <td>12 Feb 2021</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-13.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Floyd Lewis</a></h5>
                                                        <p> floydlewis@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Graphic Designer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 email-check"></i>Email</td>
                                            <td>$6,763.05</td>
                                            <td>11 Sep 2022</td>
                                            <td>30 Mar 2019</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label"
                                                                for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-14.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Andrew Glover</a></h5>
                                                        <p>Andrewglover@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>PHP Developer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 text-success"></i>Email</td>
                                            <td>$2,763.05</td>
                                            <td>25 May 2022</td>
                                            <td>27 Jun 2022</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label"
                                                                for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
                                            <td>Graphic Designer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 email-check"></i>Email</td>
                                            <td>$6,763.05</td>
                                            <td>11 Sep 2022</td>
                                            <td>30 Mar 2019</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label"
                                                                for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
                                            <td>PHP Developer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 text-success"></i>Email</td>
                                            <td>$2,763.05</td>
                                            <td>25 May 2022</td>
                                            <td>27 Jun 2022</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label"
                                                                for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
                                            <td>
                                                <div class="table-avatar user-profile">
                                                    <a href="{{ url('admin/profile') }}"><img
                                                            class="avatar-img rounded-circle "
                                                            src="{{ URL::asset('/assets_admin/img/profiles/avatar-14.jpg') }}"
                                                            alt="User Image"></a>
                                                    <div>
                                                        <h5><a href="{{ url('admin/profile') }}">Janet Paden</a></h5>
                                                        <p> georgewells@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Frontend Developer</td>
                                            <td class="verify-mail"><i data-feather="check-circle"
                                                    class="me-1 text-success"></i>Email</td>
                                            <td>$7,763.05</td>
                                            <td>18 April 2022</td>
                                            <td>12 Feb 2021</td>
                                            <td class="three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link user-active-btn"
                                                    data-bs-toggle="dropdown">Active</a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <h4>Change Status</h4>
                                                    <form action="#">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio1"
                                                                name="optradio" value="option1" checked>
                                                            <label class="form-check-label" for="radio1">Active</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" id="radio2"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label"
                                                                for="radio2">Inactive</label>
                                                        </div>
                                                        <div class="form-check border-bottom-0">
                                                            <input type="radio" class="form-check-input" id="radio3"
                                                                name="optradio" value="option2">
                                                            <label class="form-check-label" for="radio2">Suspend
                                                                User</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-primary apply-user mt-3">Apply</button>
                                                        <button type="submit"
                                                            class="btn btn-primary reset-user mt-3">Reset</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end three-dots">
                                                <a href="javascript:void(0);" class="dropdown-toggle nav-link"
                                                    data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu user-menu-list">
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-01.svg') }}"
                                                            alt="Img"> View Details</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-02.svg') }}"
                                                            alt="Img"> Transaction</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-03.svg') }}"
                                                            alt="Img"> Reset Password</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><img class="me-2 "
                                                            src="{{ URL::asset('/assets_admin/img/icon/icon-04.svg') }}"
                                                            alt="Img"> Suspend user</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit"
                                                            class="me-2"></i> Edit</a>
                                                    <a class="dropdown-item mb-0" href="javascript:void(0);"><i
                                                            data-feather="trash-2" class="me-2 text-danger"></i>
                                                        Delete</a>
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
