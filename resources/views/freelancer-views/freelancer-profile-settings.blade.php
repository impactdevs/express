<?php $page = 'freelancer-profile-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content content-page">
        <div class="container">
            <div class="row">
                @include('layout.partials.nav-freelancer')
                <div class="col-xl-9 col-lg-8">
                    <div class="pro-pos">
                        <div class="setting-content">
                            <form action="freelancer-profile">
                                <div class="card">
                                    <div class="pro-head">
                                        <h3>Profile Setting</h3>
                                    </div>
                                    <div class="pro-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-row pro-pad pt-0 ps-0">
                                                    <div class="input-block col-md-6 pro-pic">
                                                        <label class="form-label">Profile Picture</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="upload-images freelancer-pic-box">
                                                                <img src="{{ URL::asset('/assets/img/icon/user-img.svg') }}"
                                                                    alt="" id="blah">
                                                            </div>
                                                            <div class="ms-3 freelancer-pic-upload">
                                                                <label class="file-upload image-upbtn">
                                                                    Upload Image <input type="file" id="imgInp">
                                                                </label>
                                                                <p>Max Image size 300*300</p>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Job Title</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type of Job</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="pro-head">
                                        <h4 class="pro-titles mb-0">Overview</h4>
                                    </div>
                                    <div class="pro-body">
                                        <div class="row">
                                            <div class="input-block col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles mb-0">Skills</h4>
                                            </div>
                                            <div class="pro-body  skill-info">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <input type="text" class="form-control"
                                                            value="Front End Developer">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <select class="form-control select">
                                                            <option value="0">Basic</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <input type="text" class="form-control"
                                                            value="UI UX Designer">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <select class="form-control select">
                                                            <option value="0">Advanced</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <input type="text" class="form-control"
                                                            value="React Developer">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <select class="form-control select">
                                                            <option value="1">Intermediate</option>
                                                            <option value="0">Basic</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <input type="text" class="form-control"
                                                            value="React Developer">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <select class="form-control select">
                                                            <option value="1">Intermediate</option>
                                                            <option value="0">Basic</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1">
                                                        <a href="javascript:void(0);"
                                                            class="btn fund-btn skill-add add-btn-profile"><i
                                                                class="feather-plus"></i></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles without-border mb-0">Education</h4>
                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">Degree Name</label>
                                                        <input type="text" class="form-control" value="BE CSE">
                                                    </div>
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">University Name</label>
                                                        <input type="text" class="form-control" value="Brington">
                                                    </div>
                                                    <div class="col-md-3 input-block floating-icon">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="Choose">
                                                        <span><i class="feather-calendar"></i></span>
                                                    </div>
                                                    <div class="col-md-2 input-block floating-icon">
                                                        <label class="form-label">End Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="Choose">
                                                        <span><i class="feather-calendar"></i></span>

                                                    </div>
                                                    <div class="input-block col-lg-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                    <div id="education_add_row" class="w-100"></div>
                                                    <a href="javascript:void(0)"
                                                        class="add-btn-form add-edu w-100 d-block text-end"><i
                                                            class="feather-plus-circle me-2"></i>Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles without-border mb-0">Certification</h4>
                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Certification or Award</label>
                                                        <input type="text" class="form-control" value="Feast of UI">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Certified from</label>
                                                        <input type="text" class="form-control"
                                                            value="PSD Technologies">
                                                    </div>
                                                    <div class="col-lg-3 input-block floating-icon">
                                                        <label class="form-label">Year</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="Choose">
                                                        <span><i class="feather-calendar"></i></span>
                                                    </div>
                                                    <div class="input-block col-lg-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                    <div id="certi_add_row" class=" w-100"></div>
                                                    <a href="javascript:void(0)"
                                                        class="add-btn-form add-certi w-100 d-block text-end"><i
                                                            class="feather-plus-circle me-2"></i>Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles without-border mb-0">Experience</h4>
                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">Company Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">Position</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-3 input-block floating-icon">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="Choose">
                                                        <span><i class="feather-calendar"></i></span>
                                                    </div>
                                                    <div class="col-md-2 input-block floating-icon">
                                                        <label class="form-label">End Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="Choose">
                                                        <span><i class="feather-calendar"></i></span>
                                                    </div>
                                                    <div class="input-block col-lg-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                    <div id="exp_add_row" class=" w-100"></div>
                                                    <a href="javascript:void(0)"
                                                        class="add-btn-form add-exp w-100 d-block text-end"><i
                                                            class="feather-plus-circle me-2"></i>Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles mb-0">Language</h4>

                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <label class="form-label">Language</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <label class="form-label">Language Fluency</label>
                                                        <select class="form-control select">
                                                            <option value="0">Select</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <label class="form-label">Language</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <label class="form-label">Language Fluency</label>
                                                        <select class="form-control select">
                                                            <option value="0">Select</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <label class="form-label">Language</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <label class="form-label">Language Fluency</label>
                                                        <select class="form-control select">
                                                            <option value="0">Select</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1 mb-0">
                                                        <a href="javascript:void(0);" class="btn trash-icon"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-md-6">
                                                        <label class="form-label">Language</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-md-5">
                                                        <label class="form-label">Language Fluency</label>
                                                        <select class="form-control select">
                                                            <option value="0">Select</option>
                                                            <option value="1">Intermediate</option>
                                                            <option value="2">Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-block col-md-1 mb-0">
                                                        <a href="javascript:void(0)"
                                                            class="btn fund-btn lang-add add-btn-profile mb-0"><i
                                                                class="feather-plus"></i></a>
                                                    </div>
                                                    <div id="lang_add_row" class=" w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 w-100">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles mb-0">Social Media</h4>

                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Facebook</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Instagram </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">LinkedIn</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Behance</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Pinterest </label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-4">
                                                        <label class="form-label">Twitter</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card flex-fill mb-3">
                                            <div class="pro-head">
                                                <h4 class="pro-titles mb-0">Personal Website</h4>

                                            </div>
                                            <div class="pro-body  ">
                                                <div class="form-row align-items-center skill-cont">
                                                    <div class="input-block col-lg-12">
                                                        <label class="form-label">Website Url</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">State / Province</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-lg-3">
                                                        <label class="form-label">ZIP / Post Code</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-block col-md-3">
                                                        <label class="form-label">Country</label>
                                                        <select class="form-control select">
                                                            <option value="0">Select</option>
                                                            <option value="1">USA</option>
                                                            <option value="2">UK</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h4 class="mb-3">Working Hours</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block d-flex">
                                        <div class="form-check form-switch d-inline-block work-check position-relative">
                                            <input type="checkbox" class="form-check-input" id="check_hour"
                                                checked="">
                                        </div>
                                        <label class="form-label ms-2">Same Every Day</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-hour" style="">
                                        <div class="other-info-list">
                                            <ul>
                                                <li class="active-hour">Mon</li>
                                                <li class="active-hour">Tue</li>
                                                <li class="active-hour">Wed</li>
                                                <li class="active-hour">Thr</li>
                                                <li class="active-hour">Fri</li>
                                                <li>Sat</li>
                                                <li>Sun</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="check-hour" style="display: none;">
                                        <div class="col-md-12">
                                            <h4>Select Days</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="active-hour m-0">Mon</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="active-hour m-0">Tue</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="active-hour m-0">Wed</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="active-hour m-0">Thur</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="active-hour m-0">Fri</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="m-0">Fri</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-1">
                                                        <div class="other-info-list">
                                                            <ul>
                                                                <li class="m-0">Sun</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">Start Time </label>
                                                            <input type="text" class="form-control" value="8:00">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-block">
                                                            <label class="form-label">End Time </label>
                                                            <input type="text" class="form-control" value="20:00">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card text-end border-0">
                                    <div class="pro-body">
                                        <button class="btn btn-secondary click-btn btn-plan">Cancel</button>
                                        <button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection