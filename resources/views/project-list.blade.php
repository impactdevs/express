<?php $page = 'project-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Project List
        @endslot
        @slot('li_2')
            Home
        @endslot
        @slot('li_3')
            Project
        @endslot
    @endcomponent
    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Search Filter -->
                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Category
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Developer (25)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> UI Developer (62)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> React Developer (46)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> .Net Developer (37)
                                        </label>
                                    </div>
                                    <div id="collapseOnes" class="collapse" data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> UI Developer (62)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> React Developer (46)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> .Net Developer (37)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="showmore mt-2">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOnes"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="feather-plus me-1"></i>Show More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapsproject" aria-expanded="true" aria-controls="collapseOne">
                                        Project Type
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapsproject" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>Fixed (6)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>Hourly (7)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                        Project Duration
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapseOne1" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> 1-3 Weeks (4)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> 1 Month (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Less than 3 Months (2)
                                        </label>
                                    </div>


                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseskills" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Skills
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapseskills" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> After Effects (6)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Android Developer (7)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Backend Developer (7)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Computer Operator (1)
                                        </label>
                                    </div>
                                    <div id="collapseOnes1" class="collapse" data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> After Effects (6)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Android Developer (7)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Backend Developer (7)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Computer Operator (1)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="showmore mt-2">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOnes1"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="feather-plus me-1"></i>Show More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapselanguage" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Languages
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapselanguage" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> English (5)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Arabic (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>German (1)
                                        </label>
                                    </div>

                                    <div id="collapseOnes2" class="collapse" data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> English (5)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Arabic (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>German (1)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="showmore mt-2">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOnes2"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="feather-plus me-1"></i>Show More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapselanguagea" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Freelancer Type
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapselanguagea" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>Full Time (3)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> Part Time (4)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>Project Based (2)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapselocation" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Location
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h4>
                                <div id="collapselocation" class="collapse show" data-bs-parent="#accordionExample1">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>USA (25)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span> IND (62)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>UK (46)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_time">
                                            <span class="checkmark"></span>AUS (37)
                                        </label>
                                    </div>
                                    <div id="collapseOnes3" class="collapse" data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> IND (62)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>UK (46)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>AUS (37)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="showmore mt-2">
                                        <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseOnes3"
                                            aria-expanded="true" aria-controls="collapseOne"><i
                                                class="feather-plus me-1"></i>Show More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-search">
                                <button type="button" class="btn btn-primary">Search</button>
                                <button type="button" class="btn btn-block">Reset</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                </div>
                <!-- /Search Filter -->
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="sort-tab develop-list-select">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="freelance-view">
                                        <h4>Found 9 Results</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
                                <div class="sort-by">
                                    <select class=" select">
                                        <option>Relevance</option>
                                        <option>Rating</option>
                                        <option>Popular</option>
                                        <option>Latest</option>
                                        <option>Free</option>
                                    </select>
                                </div>
                                <ul class="list-grid d-flex align-items-center">
                                    <li><a href="{{url('project')}}"><i class="fas fa-th-large"></i></a></li>
                                    <li><a href="{{url('project-list')}}" class="favour-active"><i class="fas fa-list"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="list-book-mark book-mark favour-book">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/default-logo.svg') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>Website Designer Required For Directory Theme</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>Los Angels
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted just now
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>1 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$35-$350</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/company/img-1.png') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>Create desktop applications with source PHP</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>Florida, USA
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted 1 day ago
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>76 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$40-$350</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/company/img-2.png') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>PHP, Javascript Projects for Beginners</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>Alabama, USA
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted 15 days ago
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>15 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$45-$650</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/company/img-3.png') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>Swift / SwiftUI Developer for B2B iOS apps</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>Texas, USA
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted 2 months ago
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>44 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$100-$700</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/company/img-4.png') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>Full-stack Developer to help us to build our</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>Kansas, USA
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted 3 months ago
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>36 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$100-$700</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" project-list-card">
                                    <a href="javascript:void(0);" class="add-fav-list"><i
                                            class="fa-regular fa-heart"></i></a>
                                    <div class="company-detail-image">
                                        <img src="{{ URL::asset('/assets/img/company/img-5.png') }}" class="img-fluid"
                                            alt="logo">
                                    </div>
                                    <div>
                                        <div class="company-title">
                                            <p>UI/UX Developer</p>
                                            <h4>Website Designer Required For Directory Theme</h4>
                                        </div>
                                        <div class="company-splits">
                                            <div>
                                                <div class="company-address">
                                                    <ul>
                                                        <li>
                                                            <i class="feather-map-pin"></i>California, USA
                                                        </li>
                                                        <li>
                                                            <i class="feather-calendar"></i>Posted 1 months ago
                                                        </li>
                                                        <li>
                                                            <i class="feather-file-2"></i>6 Proposal
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="company-description">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim ipsam consequuntur magni dolores eos
                                                        qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="company-description">
                                                    <div class="tags">
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">After
                                                                Effects</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Illustrator</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">HTML</span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="badge badge-pill badge-design">Whiteboard</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="company-split-price">
                                                <h5>$10-$70</h5>
                                                <h6>Price : Fixed</h6>
                                                <a href="{{ url('project-details') }}" class="btn btn-submits">Submit
                                                    Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="paginations list-pagination">
                                    <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
                                    <li class="page-item"><a href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a href="javascript:void(0);">...</a></li>
                                    <li class="page-item"><a href="javascript:void(0);">10</a></li>
                                    <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
