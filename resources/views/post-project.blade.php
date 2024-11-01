<?php $page = 'post-project'; ?>
@extends('layout.mainlayout')
@section('content')
{{--   <h1 class="text-center mt-2">Post a Project</h1>--}}

    <!-- Page Content -->
    <div class="content content-page">
        <div class="container">
            <div class="row">
                @include('layout.partials.nav-employer')
                <div class="col-xl-9 col-lg-8">
                    <div class="page-title">
                        <h3>Post a Project</h3>
                    </div>
                    <div class="select-project mb-4">
                        <form action="project-conformation">
                            <div class="title-box widget-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Basic Details</h4>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Project Title</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Project Category</label>
                                            <select class="form-control select">
                                                <option value="0">Select</option>
                                                <option value="1">Category</option>
                                                <option value="2">Project</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Project Duration</label>
                                            <select class="form-control select">
                                                <option>1-3 Week</option>
                                                <option>1 Month</option>
                                                <option>Less then a month</option>
                                                <option>More then a month</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 ">
                                        <div class="mb-3">
                                            <label class="focus-label">Deadline Date</label>
                                            <div class="cal-icon">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="Choose">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Freelancer Type</label>
                                            <select class="form-control select">
                                                <option value="0">Select</option>
                                                <option value="1">Full Time</option>
                                                <option value="2">Part Time</option>
                                                <option value="3">Project Based</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Freelancer Level</label>
                                            <select class="form-control select">
                                                <option>Basic</option>
                                                <option>Intermediate</option>
                                                <option>Professional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Tags</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 my-3">
                                        <h4>Skills</h4>
                                    </div>
                                    <!-- Skills Content -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="title-content p-0">
                                            <div class="title-detail">
                                                <h3>Skill Set</h3>
                                                <div class="mb-3">
                                                    <input type="text" data-role="tagsinput"
                                                        class="input-tags form-control" name="services" value="Web Design"
                                                        id="services"
                                                        placeholder="UX, UI, App Design, Wireframing, Branding">
                                                    <p class="text-muted mb-0">Enter skills for needed for project, for best
                                                        result add 5 or more Skills</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 my-3">
                                        <h4>Budget</h4>
                                    </div>
                                    <div class="buget-img">
                                        <ul>
                                            <li>
                                                <div class="hours-rate active">
                                                    <div class="hours-rate-img">
                                                        <label class="customize-radio">
                                                            <input type="radio" name="fixed" class="hoursradio" checked>
                                                            <img src="{{ URL::asset('/assets/img/icon/check-success.svg') }}"
                                                                alt="img" class="success-check">
                                                            <img src="{{ URL::asset('/assets/img/icon/hourly.svg') }}"
                                                                alt="img">
                                                            <span class="d-block">Hourly Rate</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="fixed-rate">
                                                    <div class="hours-rate-img">
                                                        <label class="customize-radio">
                                                            <input type="radio" name="fixed" class="fixedradio">
                                                            <img src="{{ URL::asset('/assets/img/icon/check-success.svg') }}"
                                                                alt="img" class="success-check">
                                                            <img src="{{ URL::asset('/assets/img/icon/fixed.svg') }}"
                                                                alt="img">
                                                            <span class="d-block">Fixed budget</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hours-rates">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12">
                                                <div class="mb-3">
                                                    <label class="focus-label">From ($)</label>
                                                    <input type="text" class="form-control " placeholder="15">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 ">
                                                <div class="mb-3">
                                                    <label class="focus-label">To ($)</label>
                                                    <input type="text" class="form-control " placeholder="250">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fixed-rates d-none">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="mb-3">
                                                    <label class="focus-label">Enter Price ($)</label>
                                                    <input type="text" class="form-control " placeholder="15">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="col-lg-12 my-3">--}}
{{--                                        <h4>Attachment</h4>--}}
{{--                                        <p>You can attach more than 1 files to 10 files, Size of the Document should be--}}
{{--                                            Below 2MB </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="attach-file">--}}
{{--                                            <i class="fa fa-pdf"></i>--}}
{{--                                            Attach file--}}
{{--                                            <input type="file">--}}
{{--                                        </div>--}}
{{--                                        <div class="filename">--}}
{{--                                            <ul>--}}
{{--                                                <li>--}}
{{--                                                    <h6>Filename 1 <a href="javascript:void(0);" class="file-close"><i--}}
{{--                                                                class="fa fa-close"></i></a></h6>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <h6>Filename 2 <a href="javascript:void(0);" class="file-close"><i--}}
{{--                                                                class="fa fa-close"></i></a></h6>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <h6>Filename 3 <a href="javascript:void(0);" class="file-close"><i--}}
{{--                                                                class="fa fa-close"></i></a></h6>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-lg-12 my-3">
                                        <h4>Other Requirement</h4>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Languages</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Language Fluency</label>
                                            <select class="form-control select">
                                                <option>Basic</option>
                                                <option>Intermediate</option>
                                                <option>Professional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="focus-label">Write Description of Projects</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <!-- /Skills Content -->
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-end">
                                        <div class="btn-item">
                                            <button type="submit" class="btn next-btn">Post Project</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Project Title -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
