@if (Route::is(['bid-fees']))
    <!-- The Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Bid Fees</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Fee Name">
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea rows="5" class="form-control" placeholder="Enter Info"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" class="form-control" placeholder="Enter Value">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /The Modal -->

    <!-- The Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Bid Fees</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="Bidding on projects  ">
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea rows="6" class="form-control">Freelancers are able to bid for free up to their monthly allocation of bids provided by their membership package. Optional upgrades to promote a bid will incur additional costs.</textarea>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" class="form-control" value="FREE">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /The Modal -->
@endif
@if (Route::is(['projects']))
    <!-- Category Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Projects</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control"
                                value="Website Designer Required For Directory Theme">
                        </div>
                        <div class="form-group">
                            <label>Budget</label>
                            <input type="text" class="form-control" value="$2222">
                        </div>
                        <div class="form-group">
                            <label>Technology</label>
                            <input type="text" class="form-control" value="Angler">
                        </div>
                        <div class="form-group">
                            <label>Technology</label>
                            <input type="text" class="form-control" value="AMAZE TECH">
                        </div>
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" value="20-01-2022">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" value="20-02-2022">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Modal -->
@endif
@if (Route::is(['providers']))
    <!-- Category Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header flex-wrap">
                    <h4 class="modal-title">Edit Provider</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" value="Focused Holistic Hardware">
                        </div>
                        <div class="form-group">
                            <label>Primary Contact</label>
                            <input type="text" class="form-control" value="Emily Smith">
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" value="https://focusedhardware.de">
                        </div>
                        <div class="form-group">
                            <label>Total Projects</label>
                            <input type="text" class="form-control" value="120">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-select">
                                <option selected>Enabled</option>
                                <option>Disable</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Category Modal -->
@endif
@if (Route::is(['skills']))
    <!-- The Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Skill</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Skill Name</label>
                            <input type="text" class="form-control" placeholder="2D Design">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" placeholder="2d-design">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /The Modal -->

    <!-- The Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header flex-wrap">
                    <h4 class="modal-title">Edit Skills</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Skill Name</label>
                            <input type="text" class="form-control" value="Graphics & Design">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" value="Design a Website Mockup">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /The Modal -->
@endif
@if (Route::is(['sub-category']))
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Sub Categories</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label>Select A Parent Category</label>
                            <select class="form-select form-control">
                                <option>Select A Parent Category</option>
                                <option>Graphics & Design</option>
                                <option>Graphics & Design</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <input type="text" class="form-control" placeholder="Create a Sub Category">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Sub Categories</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label>Select A Parent Category</label>
                            <select class="form-select form-control">
                                <option>Select A Parent Category</option>
                                <option selected>Graphics & Design</option>
                                <option>Web Design</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <input type="text" class="form-control" value="Design a Banner">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
@endif
@if (Route::is(['tax-types']))
    <!-- Add Tax Modal -->
    <div id="add_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Tax</h5>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control form-select">
                                <option>Pending</option>
                                <option>Approved</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Tax Modal -->

    <!-- Edit Tax Modal -->
    <div id="edit_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tax</h5>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="VAT" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                            <input class="form-control" value="14%" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control form-select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Tax Modal -->

    <!-- Delete Tax Modal -->
    <div class="modal custom-modal fade" id="delete_tax" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-icon text-center mb-3">
                        <i class="fas fa-trash-alt text-danger"></i>
                    </div>
                    <div class="modal-text text-center">
                        <h2>Delete Tax</h2>
                        <p>Are you sure want to delete?</p>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Tax Modal -->
@endif
@if (Route::is([
        'bid-fees',
        'categories',
        'contest-entry-fees',
        'contests-fees',
        'deposit',
        'deposit-cancelled',
        'deposit-completed',
        'deposit-hold',
        'deposit-pending',
        'earning-employer',
        'earning-freelancer',
        'employe-list',
        'freelance-list',
        'profile-transactions',
        'activities',
        'project-bidding',
        'project-earnings',
        'project-invoices',
        'projects-fees',
        'projects',
        'providers',
        'reports',
        'roles',
        'skills',
        'sub-category',
        'subscripe-freelancer',
        'subscription',
        'transaction',
        'transaction-deposit',
        'transaction-withdraw',
        'transaction-pending',
        'transaction-onhold',
        'transaction-completed',
        'users',
        'user-active',
        'user-inactive',
        'user-suspended',
        'user-administrator',
        'view-price-employe',
        'view-price-freelance',
        'withdrawn-cancelled',
        'withdrawn-completed',
        'withdrawn-pending',
        'withdrawn',
    ]))
    <!--Delete modal-->
    <div class="modal custom-modal fade" id="delete_category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Delete modal-->
@endif
@if (Route::is(['view-price-freelance']))
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="add-plan-freelance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap add-plan-head">
                    <h4 class="modal-title">Add Plan</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body add-plan">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Plan Name <span>*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Plan Type <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Plan Amount <span>*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bidding Credits <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No of Projects <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bidding visibility <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Featured Service <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Plan Description <span>*</span></label>
                                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Status <span>*</span></label>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="status_1" class="check" checked>
                                        <label for="status_1" class="checktoggle"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plan-btn text-center">
                            <button type="submit" class="btn btn-primary remove-form">Close</button>
                            <button type="submit" class="btn btn-primary save-form">Save Plan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
@endif
@if (Route::is([
        'employe-list',
        'freelance-list',
        'subscripe-freelancer',
        'subscription',
        'view-price-employe',
        'view-price-employe',
    ]))
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="add-plan-employe">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-wrap add-plan-head">
                    <h4 class="modal-title">Add Plan</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body add-plan">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Plan Name <span>*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Plan Type <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Plan Amount <span>*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Project Credits <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No of Projects <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Project Visibility <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Featured Service <span>*</span></label>
                                    <select class="form-control form-select">
                                        <option>Select</option>
                                        <option>Frontend Developer</option>
                                        <option>Graphic Designer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Plan Description <span>*</span></label>
                                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status <span>*</span></label>
                                <div class="status-toggle d-flex justify-content-between align-items-center">
                                    <input type="checkbox" id="status_1" class="check" checked>
                                    <label for="status_1" class="checktoggle"></label>
                                </div>
                            </div>
                        </div>
                        <div class="plan-btn text-center">
                            <button type="submit" class="btn btn-primary remove-form">Close</button>
                            <button type="submit" class="btn btn-primary save-form">Save Plan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="{{ URL::asset('/assets_admin/img/logo-small.png') }}" alt="">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->
@endif
@if (Route::is(['categories']))
    <!-- The Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" placeholder="Enter Category Name">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->

    <!-- Edit Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" value="Graphic & Design">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
@endif
@if (Route::is(['contest-entry-fees']))
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Contest Entry Fees</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Fee Name">
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" class="form-control" placeholder="Enter Value">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Contest Entry Fees</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="Highlight Entry">
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" class="form-control" value="$30.00">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
@endif
@if (Route::is(['contests-fees', 'projects-fees']))
    <!-- Category Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $li_1 }}</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Fee Name">
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea rows="5" class="form-control" placeholder="Enter Info"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" class="form-control" placeholder="Enter Value">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Category Modal -->
    @if (Route::is(['projects-fees']))
        <!-- Edit Modal -->
        <div class="modal fade custom-modal" id="edit-category">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Project Fees</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="Featured">
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea rows="5" class="form-control">Featured projects attract more,higher-quality bids. </textarea>
                            </div>
                            <div class="form-group">
                                <label>Value</label>
                                <input type="text" class="form-control" value="$450.00">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Modal -->
    @endif
    @if (!Route::is(['projects-fees']))
        <!-- Edit Modal -->
        <div class="modal fade custom-modal" id="edit-category">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Contests Fees</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="Posting a Contest    ">
                            </div>
                            <div class="form-group">
                                <label>Info</label>
                                <textarea rows="5" class="form-control">Free to post a contest and receive entries. A monetary prize must be paid upfront to release as payment for work provided. Optional contest upgrades incur additional costs. Employers are eligible for a 100% money back guarantee.    </textarea>
                            </div>
                            <div class="form-group">
                                <label>Value</label>
                                <input type="text" class="form-control" value="Free">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Modal -->
    @endif
@endif
@if (Route::is(['users']))
    <!-- Add Modal -->
    <div class="modal fade transaction-modal" id="transaction-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="transaction-group">
                        <div class="head-transaction">
                            <h4>Transaction</h4>
                            <p> #TNX24586414</p>
                        </div>
                        <div class="complete-btn">
                            <a href="javascript:void(0);" class="btn btn-primary">Completed</a>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="table-avatar user-profile invest-acount">
                        <a href="profile.html"><i class="fas fa-exchange-alt exchange"></i>
                            <div>
                                <h5>Received from Investment Account</h5>
                                <p class="receive-date"> Mar 13, 2022<span>Completed</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="acount-transaction">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="basic-info ">
                                    <h4>IN ACCOUNT</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="basic-info">
                                    <h4>IN TRANSACTION</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5>william@example.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail top-border">
                                    <h4>Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Order Date</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Placed By</p>
                                                <h5>UID00001 </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Completed At</p>
                                                <h5> Mar 13, 2022 07:00 PM</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Completed By</p>
                                                <h5> Super Admin</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <h4 class="mt-0">Additional Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Transaction</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Payment Gateway</p>
                                                <h5>Paypal </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment From</p>
                                                <h5> Dean Jones</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment To</p>
                                                <h5> Main Account</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info">
                                                <p>Updated Balance</p>
                                                <h5 class="active-balance">13,144.626 USD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info mb-0">
                                                <p>Transaction Details</p>
                                                <h5> Received from Investment Account</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
@endif
@if (Route::is([
        'deposit',
        'deposit-cancelled',
        'deposit-completed',
        'deposit-hold',
        'deposit-pending',
        'profile-transactions',
        'activities',
        'transaction',
        'transaction-deposit',
        'transaction-withdraw',
        'transaction-pending',
        'transaction-onhold',
        'transaction-completed',
        'user-active',
        'user-inactive',
        'user-suspended',
        'user-administrator',
        'user-profile',
        'withdrawn-cancelled',
        'withdrawn-completed',
        'withdrawn-pending',
        'withdrawn',
    ]))
    <!-- Add Modal -->
    <div class="modal fade transaction-modal" id="transaction-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="transaction-group">
                        <div class="head-transaction">
                            <h4>Transaction</h4>
                            <p> #TNX24586414</p>
                        </div>
                        <div class="complete-btn">
                            <a href="" class="btn btn-primary">Completed</a>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="table-avatar user-profile invest-acount">
                        <a href="{{ url('admin/profile') }}"><img class="exchange case-icon"
                                src="{{ URL::asset('/assets_admin/img/icon/icon-15.svg') }}" alt="">
                            <div>
                                <h5>200.00 USDT</h5>
                                <p class="receive-date">Apr 25, 2022 11:01 AM</p>
                            </div>
                        </a>
                    </div>
                    <div class="acount-transaction">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="basic-info ">
                                    <h4>IN ACCOUNT</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5>william@example.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="basic-info">
                                    <h4>IN TRANSACTION</h4>
                                    <div class="additional-info">
                                        <p> Amount </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p>Fees </p>
                                        <h5>0.00 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Total Investment </p>
                                        <h5>6,335.006 USD</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Account </p>
                                        <h5>UID00003</h5>
                                    </div>
                                    <div class="additional-info">
                                        <p> Freelancer Email </p>
                                        <h5>william@example.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail top-border">
                                    <h4>Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Order Date</p>
                                                <h5>Mar 13, 2022</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Placed By</p>
                                                <h5>UID00001 </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <h4 class="mt-0">Additional Details</h4>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p>Transaction Type</p>
                                                <h5>Deposit</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="additional-info">
                                                <p> Payment Gateway</p>
                                                <h5>Paypal </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="additional-info">
                                                <p>Payment To</p>
                                                <h5> usdttest87i2UK3JUWzR7iy6z5eRrxbAeT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="basic-info additional-detail">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="additional-info">
                                                <p>Updated Balance</p>
                                                <h5 class="active-balance">13,144.626 USD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    @if (!Route::is(['users', 'user-active', 'user-inactive', 'user-suspended', 'user-administrator']))
        <!-- Add Modal -->
        <div class="modal fade custom-modal" id="add-category">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header flex-wrap">
                        <div class="text-center w-100 mb-3">
                            <img src="{{ URL::asset('/assets_admin/img/logo-small.png') }}" alt="">
                        </div>
                        <h4 class="modal-title">Add New User</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control form-select">
                                    <option>Select</option>
                                    <option>Frontend Developer</option>
                                    <option>Graphic Designer</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal -->
    @endif
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="{{ URL::asset('/assets_admin/img/logo-small.png') }}" alt="">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    @if (Route::is(['users', 'user-active', 'user-inactive', 'user-suspended', 'user-administrator']))
        <!-- Add Modal -->
        <div class="modal fade custom-modal" id="add-category">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header flex-wrap">
                        <div class="text-center w-100 mb-3">
                            <img src="{{ URL::asset('/assets_admin/img/logo-small.png') }}" alt="">
                        </div>
                        <h4 class="modal-title">Add New Freelancer</h4>
                        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Freelancer Type</label>
                                <select class="form-control form-select">
                                    <option>Select</option>
                                    <option>Frontend Developer</option>
                                    <option>Graphic Designer</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Modal -->
    @endif
@endif
@if (Route::is([
        'reports',
        'earning-employer',
        'earning-freelancer',
        'project-bidding',
        'project-earnings',
        'project-invoice',
    ]))
    <!-- The Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Edit Reports</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Client Name</label>
                            <input type="text" class="form-control" value="Davis Payerf">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control"
                                value="Bank Transfer, Payment Transaction ID - 643351646848">
                        </div>
                        <div class="form-group">
                            <label>Transaction Fee</label>
                            <input type="text" class="form-control" value="$ 5.00">
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" value="$2222.00">
                        </div>
                        <div class="form-group">
                            <label>status</label>
                            <select class="form-control form-select">
                                <option>Complete</option>
                                <option selected>Incomplete</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header flex-wrap">
                    <div class="text-center w-100 mb-3">
                        <img src="{{ URL::asset('/assets_admin/img/logo-small.png') }}" alt="">
                    </div>
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" value=" George Wells">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="georgewells@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" value="********">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select class="form-control form-select">
                                <option>Select</option>
                                <option selected>Frontend Developer</option>
                                <option>Graphic Designer</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
@endif
@if (Route::is(['roles']))
    <!-- Add Modal -->
    <div class="modal fade custom-modal" id="add-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Roles</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <!-- /Modal Header -->

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" placeholder="Enter Role Name">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /Modal body -->
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal fade custom-modal" id="edit-category">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Roles</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>
                <!-- /Modal Header -->

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" class="form-control" value="Admin">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /Modal body -->
            </div>
        </div>
    </div>
    <!-- /Add Modal -->
@endif
