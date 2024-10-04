@if(!Route::is(['chats','completed-projects','deposit-funds','developer-list','developer','favourites','files','freelancer-chats','freelancer-favourites','invited-favourites','milestones','project-details','project','review','tasks','user-account-details','favourites','freelancer-favourites']))
<!-- The Modal -->
<div class="modal fade custom-modal" id="hire">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-modal">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center pt-0 mb-4">
                    <img src="{{ URL::asset('/assets/img/logo-01.png')}}" alt="logo" class="img-fluid mb-1">
                    <h5 class="modal-title">Discuss your project with David</h5>
                </div>
                <form action="dashboard">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="First name & Lastname">
                                </div> 
                                <div class="form-group">
                                    <input type="email" name="name" class="form-control" placeholder="Email Address">
                                </div> 
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Phone Number">
                                </div> 
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-12 col-md-4 pr-0">
                                        <label class="file-upload">
                                            Add Attachment <input type="file" />
                                        </label>
                                    </div>                                          
                                    <div class="col-12 col-md-8">
                                        <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                        <p>Max file size: 50 MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['completed-projects','developer-profile']))
<!-- The Modal -->
<div class="modal fade custom-modal" id="hire">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-modal">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center pt-0 mb-4">
                    <img src="{{URL::asset('assets/img/logo-01.png')}}" alt="logo" class="img-fluid mb-1">
                    <h5 class="modal-title">Discuss your project with David</h5>
                </div>
                <form action="{{url('dashboard')}}">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="input-block">
                                    <input type="text" name="name" class="form-control" placeholder="First name & Lastname">
                                </div> 
                                <div class="input-block">
                                    <input type="email" name="name" class="form-control" placeholder="Email Address">
                                </div> 
                                <div class="input-block">
                                    <input type="text" name="name" class="form-control" placeholder="Phone Number">
                                </div> 
                                <div class="input-block">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                </div> 
                                <div class="input-block row">
                                    <div class="col-12 col-md-4 pr-0">
                                        <label class="file-upload">
                                            Add Attachment <input type="file">
                                        </label>
                                    </div>											
                                    <div class="col-12 col-md-8">
                                        <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                        <p>Max file size: 50 MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->

<!-- The Modal -->
<div class="modal fade" id="file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Your Proposal</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
            </div>
            <div class="modal-body">	
                <div class="modal-info proposal-modal-info">
                    <form action="{{url('freelancer-project-proposals')}}">
                        <div class="feedback-form proposal-form ">
                            <div class="row">
                                <div class="col-md-6 input-block">
                                    <label class="form-label">Your Price</label>
                                    <input type="text" class="form-control" placeholder="Your Price">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Estimated Delivery</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" placeholder="Estimated Hours" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">Days</span>
                                      </div>
                                </div>
                                
                                <div class="col-md-12 input-block">
                                    <label class="form-label">Cover Letter</label>
                                    <textarea class="form-control summernote"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="suggested-milestones-form">
                            <div class="row">
                                <div class="col-md-4 input-block">
                                    <label class="form-label">Milestone name</label>
                                    <input type="text" class="form-control" placeholder="Milestone name">
                                </div>
                                <div class="col-md-2 input-block floating-icon">
                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control" placeholder="Amount">
                                    <span><i class="feather-dollar-sign"></i></span>
                                </div>
                                <div class="col-md-3 input-block floating-icon">
                                    <label class="form-label">Start Date</label>
                                    <input type="text" class="form-control datetimepicker" placeholder="Choose">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                                <div class="col-md-3 input-block floating-icon">
                                    <label class="form-label">End Date</label>
                                    <input type="text" class="form-control datetimepicker" placeholder="Choose">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                                <div class="col-md-12">
                                    <div class="new-addd">
                                        <a  id="new_add1" class="add-new"><i class="feather-plus-circle "></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div id="add_row1"></div>
                        </div>
                        <div class="proposal-features">
                            <div class="proposal-widget proposal-warning">
                                <label class="custom_check">
                                    <input type="checkbox" name="select_time" checked><span class="checkmark"></span>
                                    <span class="proposal-text">Stick this Proposal to the Top</span>
                                    <span class="proposal-text float-end">$12.00</span>
                                </label>
                                <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                            </div>
                            <div class="proposal-widget proposal-blue">
                                <label class="custom_check">
                                    <input type="checkbox" name="select_time"><span class="checkmark"></span>
                                    <span class="proposal-text">Stick this Proposal to the Top</span>
                                    <span class="proposal-text float-end">$12.00</span>
                                </label>
                                <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12 submit-section">
                                <label class="custom_check">
                                    <input type="checkbox" name="select_time">
                                    <span class="checkmark"></span> I agree to the Terms And Conditions
                                </label>
                            </div>
                            <div class="col-md-12 submit-section text-end">
                                <a data-bs-dismiss="modal" href="javascript:void(0);" class="btn btn-cancel submit-btn">Cancel</a>
                                <a data-bs-toggle="modal" data-bs-dismiss="modal" href="#success" class="btn btn-primary submit-btn">Send Proposal</a>
                            </div>
                        </div>											
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->

<!-- The Modal -->
<div class="modal fade custom-modal" id="success">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content proposal-modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center modal-body-content pt-0">
                    <h5 class="modal-title">Submitted Successfully</h5>
                    <p>You will be Notified once, your Proposal approves.</p>
                </div>
                <div class="col-md-12 submit-section text-center">
                    <a data-bs-dismiss="modal" href="{{url('freelancer-dashboard')}}"  class="btn btn-primary submit-btn">Go to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['review']))
<!-- The Modal -->
<div class="modal fade custom-modal" id="review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center pt-0 mb-4">
                    <h5 class="modal-title">Leave a Review</h5>
                    <p class="modal-subtitle">Rate <span class="orange-text">Peter Valentín</span> for the project <span class="orange-text">Adsense Expert</span></p>
                </div>
                <form>
                    <div class="modal-info">
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <p class="mb-2">Was this delivered on budget?</p>
                                    <label class="custom_radio">
                                        <input type="radio" name="budget" value="Yes" checked>
                                        <span class="checkmark"></span> Yes
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="budget" value="No">
                                        <span class="checkmark"></span> No
                                    </label>
                                </div> 
                                <div class="form-group">
                                    <p class="mb-2">Was this delivered on time?</p>
                                    <label class="custom_radio">
                                        <input type="radio" name="time" value="Yes" checked>
                                        <span class="checkmark"></span> Yes
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="time" value="No">
                                        <span class="checkmark"></span> No
                                    </label>
                                </div> 
                                <div class="form-group">
                                    <p class="mb-2">Your Rating</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Leave a Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
<!-- The Modal -->
<div class="modal fade custom-modal" id="editreview">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center pt-0 mb-4">
                    <h5 class="modal-title">Leave a Review</h5>
                    <p class="modal-subtitle">Rate <span class="orange-text">Peter Valentín</span> for the project <span class="orange-text">Adsense Expert</span></p>
                </div>
                <form>
                    <div class="modal-info">
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <p class="mb-2">Was this delivered on budget?</p>
                                    <label class="custom_radio">
                                        <input type="radio" name="budget" value="Yes" checked>
                                        <span class="checkmark"></span> Yes
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="budget" value="No">
                                        <span class="checkmark"></span> No
                                    </label>
                                </div> 
                                <div class="form-group">
                                    <p class="mb-2">Was this delivered on time?</p>
                                    <label class="custom_radio">
                                        <input type="radio" name="time" value="Yes" checked>
                                        <span class="checkmark"></span> Yes
                                    </label>
                                    <label class="custom_radio">
                                        <input type="radio" name="time" value="No">
                                        <span class="checkmark"></span> No
                                    </label>
                                </div> 
                                <div class="form-group">
                                    <p class="mb-2">Your Rating</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message">Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</textarea>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Leave a Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['project-details','developer-details']))
	<!-- The Modal -->
    <div class="modal fade custom-modal" id="hire">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-modal">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center pt-0 mb-4">
                        <img src="{{URL::asset('assets/img/logo-01.png')}}" alt="logo" class="img-fluid mb-1">
                        <h5 class="modal-title">Discuss your project with David</h5>
                    </div>
                    <form action="{{url('dashboard')}}">
                        <div class="modal-info">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="input-block">
                                        <input type="text" name="name" class="form-control" placeholder="First name & Lastname">
                                    </div> 
                                    <div class="input-block">
                                        <input type="email" name="name" class="form-control" placeholder="Email Address">
                                    </div> 
                                    <div class="input-block">
                                        <input type="text" name="name" class="form-control" placeholder="Phone Number">
                                    </div> 
                                    <div class="input-block">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                    </div> 
                                    <div class="input-block row">
                                        <div class="col-12 col-md-4 pr-0">
                                            <label class="file-upload">
                                                Add Attachment <input type="file">
                                            </label>
                                        </div>											
                                        <div class="col-12 col-md-8">
                                            <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                            <p>Max file size: 50 MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
    
    <!-- The Modal -->
    <div class="modal fade" id="file">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Your Proposal</h4>
                    <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                </div>
                <div class="modal-body">	
                    <div class="modal-info proposal-modal-info">
                        <form action="{{url('freelancer-project-proposals')}}">
                            <div class="feedback-form proposal-form ">
                                <div class="row">
                                    <div class="col-md-6 input-block">
                                        <label class="form-label">Your Price</label>
                                        <input type="text" class="form-control" placeholder="Your Price">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Estimated Delivery</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" placeholder="Estimated Hours" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">Days</span>
                                          </div>
                                    </div>
                                    
                                    <div class="col-md-12 input-block">
                                        <label class="form-label">Cover Letter</label>
                                        <textarea class="form-control summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="suggested-milestones-form">
                                <div class="row">
                                    <div class="col-md-4 input-block">
                                        <label class="form-label">Milestone name</label>
                                        <input type="text" class="form-control" placeholder="Milestone name">
                                    </div>
                                    <div class="col-md-2 input-block floating-icon">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" placeholder="Amount">
                                        <span><i class="feather-dollar-sign"></i></span>
                                    </div>
                                    <div class="col-md-3 input-block floating-icon">
                                        <label class="form-label">Start Date</label>
                                        <input type="text" class="form-control datetimepicker" placeholder="Choose">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                    <div class="col-md-3 input-block floating-icon">
                                        <label class="form-label">End Date</label>
                                        <input type="text" class="form-control datetimepicker" placeholder="Choose">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="new-addd">
                                            <a  id="new_add1" class="add-new" href="javascript:void(0);"><i class="feather-plus-circle "></i> Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="add_row1"></div>
                            </div>
                            <div class="proposal-features">
                                <div class="proposal-widget proposal-warning">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time" checked><span class="checkmark"></span>
                                        <span class="proposal-text">Stick this Proposal to the Top</span>
                                        <span class="proposal-text float-end">$12.00</span>
                                    </label>
                                    <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                                </div>
                                <div class="proposal-widget proposal-blue">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time"><span class="checkmark"></span>
                                        <span class="proposal-text">Stick this Proposal to the Top</span>
                                        <span class="proposal-text float-end">$12.00</span>
                                    </label>
                                    <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12 submit-section">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time">
                                        <span class="checkmark"></span> I agree to the Terms And Conditions
                                    </label>
                                </div>
                                <div class="col-md-12 submit-section text-end">
                                    <a data-bs-dismiss="modal" href="javascript:void(0);" class="btn btn-cancel submit-btn">Cancel</a>
                                    <a data-bs-toggle="modal" data-bs-dismiss="modal" href="#success" class="btn btn-primary submit-btn">Send Proposal</a>
                                </div>
                            </div>											
                        </form>		
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
  
    <!-- The Modal -->
    <div class="modal fade custom-modal" id="success">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content proposal-modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center modal-body-content pt-0">
                        <h5 class="modal-title">Submitted Successfully</h5>
                        <p>You will be Notified once, your Proposal approves.</p>
                    </div>
                    <div class="col-md-12 submit-section text-center">
                        <a data-bs-dismiss="modal" href="{{url('freelancer-dashboard')}}"  class="btn btn-primary submit-btn">Go to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
@endif
@if(Route::is(['milestones']))
<div class="modal fade" id="file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Files</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="milestones">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Milestone Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Budget</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Progress</label>
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="50" class="rangslider" id="myRange">
                                        <p class="text-muted">Progress <span id="demo"></span> %</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@if(Route::is(['freelancer-project-proposals']))
<!-- The Modal -->
<div class="modal fade edit-proposal-modal" id="file">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">EDIT PROPOSAL</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
            </div>
            <div class="modal-body">		
                <form action="#">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block">
                                    <label class="form-label">Your Price</label>
                                    <input type="text" class="form-control" value="$90">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block">
                                    <label class="form-label">Estimated Delivery</label>
                                    <input type="text" class="form-control" value="100">
                                    <span class="input-group-text">Days</span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block">
                                    <label class="form-label">Cover Letter</label>
                                    <textarea class="form-control summernote"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-info">
                            <h4>Suggested Milestones</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-block">
                                        <label class="form-label">Milestone name</label>
                                        <input type="text" class="form-control" value="Initial Setup">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-block">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" value="100">
                                        <span class="input-group-text">$</span>
                                        <div class="add-new text-end mt-2">
                                            <a href="javascript:void(0);"><i class="feather feather-plus-circle me-1"></i>Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-check-item">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span>Stick this Proposal to the Top
                                            </label>
                                            <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                                        </div>
                                        <div class="price">
                                            <span>$12.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-check-item bg-light-blue">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span>$ Make Sealed Proposal
                                            </label>
                                            <p>The sealed proposal will be sent to the project author only it will not be visible publically.</p>
                                        </div>
                                        <div class="price">
                                            <span>$7.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="custom_check">
                                        <input type="checkbox" name="rem_password">
                                        <span class="checkmark"></span>I agree to the terms and privacy policy
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['freelancer-delete-account']))
<!-- The Modal -->
<div class="modal fade" id="payout_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Payout Setting</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
            </div>
            <div class="modal-body">
                <div class="modal-info">
                    <h5>Payout Methods</h5>
                    <div class="payout-method-option">
                        <div class="d-flex align-items-center">
                            <div class="payout-icon">
                                <img src="{{URL::asset('assets/img/icon/bank-line.svg')}}" alt="icon">
                            </div>
                            <div class="payout-method-content">
                                <h5>Bank Transfer</h5>
                                <p class="mb-0">Connect your bank account</p>
                            </div>
                        </div>
                        <a class="badge badge-paid"><span>Connect</span></a>
                    </div>
                    <div class="payout-method-option">
                        <div class="d-flex align-items-center">
                            <div class="payout-icon">
                                <img src="{{URL::asset('assets/img/icon/paypal-line.svg')}}" alt="icon">
                            </div>
                            <div class="payout-method-content">
                                <h5>Paypal</h5>
                                <p class="mb-0">Connect your Paypal account</p>
                            </div>
                        </div>
                        <a class="badge badge-paid"><span>Connect</span></a>
                    </div>
                </div>
                <form action="{{url('freelancer-portfolio')}}">
                    <div class="submit-section text-end">
                        <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['deposit-funds']))
<!-- The Modal -->
<div class="modal fade wallet-rupee" id="wallet">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <div class="payment-list wallet card-body wallet-list">
                    <div class="wallet-head text-center">
                        <img class="img-fluid" src="{{ URL::asset('/assets/img/logo-01.png')}}" alt="app-store">
                        <h2>Add wallet</h2>
                    </div>
                    <div class="form-group profile-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="dol-btn" type="submit">$</button>
                            </div>
                            <input type="text" class="form-control">                                        
                        </div>
                    </div>
                    <label class="radio-inline custom_radio me-4">
                        <input type="radio" name="optradio" checked>
                        <span class="checkmark"></span> Paypal
                    </label>
                    <label class="radio-inline custom_radio">
                        <input type="radio" name="optradio">
                        <span class="checkmark"></span> Card
                    </label>
                    <div class="bootstrap-tags text-start ps-0">
                        <span class="badge badge-pill badge-skills">$50</span> 
                        <span class="badge badge-pill badge-skills">$100</span> 
                        <span class="badge badge-pill badge-skills">$150</span> 
                    </div>
                                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="card_number">Card Number</label>
                                <input class="form-control" id="card_number" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input class="form-control" id="first_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" type="text">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="expiry_on">Expires on</label>
                                <input class="form-control" id="expiry_on" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cvv">CVV (Security Code) </label>
                                <input class="form-control" id="cvv" type="text">
                            </div>
                        </div>
                        <div class="col-md-8 btn-pad">
                            <a href="javascript:void(0);" class="click-btn btn-primary">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/The Modal -->
@endif
@if(Route::is(['files']))
<!-- The Modal -->
<div class="modal fade" id="file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0">Add Files</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="files">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control">
                                </div>
                                <label class="br-0 file-upload image-upbtn">
                                    upload Files <input type="file">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
<!-- Edit Modal -->
<div class="modal fade" id="edit-file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="mb-0">Edit Files</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="files">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="Image for Section background">
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('/assets/img/file-logo.png')}}" class="img-fluid me-2" alt="Logo">
                                    <label class="br-0 file-upload image-upbtn">
                                        upload Files <input type="file">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Modal -->
@endif
@if(Route::is(['user-account-details']))
<!-- add skills Modal -->
<div class="modal fade add-skills" id="add-skills" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <img src="{{ URL::asset('/assets/img/logo-01.png')}}" alt="" class="img-fluid mb-3">
                <h3 class="modal-title text-center">Select your skills and expertise</h3>
            </div>
            <div class="modal-body profile-edit-form">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group profile-group mb-2">
                                <label>Select your skills and expertise</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search project">
                                    <div class="input-group-append">
                                        <button type="submit" class="bg-none"><i class="fa fa-search orange-text me-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-text" data-content="or">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-primary">
                                            <h4 class="card-title text-white">Select A Category</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="nav flex-column nav-pills list-group scrollable" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link list-group-item list-group-item-action active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-circle f-7 me-2 text-primary"></i><span>Writing & Content</span> <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                                                <a class="nav-link list-group-item list-group-item-action" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-circle f-7 me-2 text-primary"></i> Design, Media & Architecture<span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                                                <a class="nav-link list-group-item list-group-item-action" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-circle f-7 me-2 text-primary"></i> Data Entry & Admin<span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                                                <a class="nav-link list-group-item list-group-item-action" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-circle f-7 me-2 text-primary"></i> Engineering & Science<span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-primary">
                                            <h4 class="card-title text-white">Select Sub Category</h4>
                                        </div>
                                        <div class="card-body p-0 scrollable">
                                            <div class="tab-content p-0" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active  list-group" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> PHP 
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> 
                                                        HTML
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        Software Architecture
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        JavaScript
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                </div>
                                                <div class="tab-pane fade list-group" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> PHP 
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> 
                                                        HTML
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        Software Architecture
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        JavaScript
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                </div>
                                                <div class="tab-pane fade list-group" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> PHP 
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> 
                                                        HTML
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        Software Architecture
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        JavaScript
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                </div>
                                                <div class="tab-pane fade list-group" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> PHP 
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i> 
                                                        HTML
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        Software Architecture
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                    <button type="button" class="list-group-item list-group-item-action">
                                                        <i class="fa fa-circle f-7 me-2 text-primary"></i>
                                                        JavaScript
                                                        <span class="ms-2 text-primary">(3729 jobs)</span>
                                                        <span class="float-end"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">1 out of 20 skills selected</h4>
                                        </div>
                                        <div class="card-body scrollable">
                                            <a href="javascript:void(0);" class="btn btn-outline-primary rounded-pill">Primary
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-end">
                            <a href="javascript:void(0);" class="btn btn-primary profile-update-btn" data-bs-dismiss="modal">Update</a>
                            <a href="javascript:void(0);" class="btn btn-light profile-cancel-btn"  data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /add skills Modal -->
@endif
@if(Route::is(['tasks']))
<!-- The Modal -->
<div class="modal fade" id="file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Files</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="tasks">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Task</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Milestone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control select">
                                    <option>To do </option>
                                    <option>Completed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->

<!-- The Modal -->
<div class="modal fade" id="edit-file">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Files</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="tasks">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Task</label>
                                    <input type="text" class="form-control" value="Research">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Milestone</label>
                                    <input type="text" class="form-control"  value="Research">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <input type="text" class="form-control"  value="20th October 2021">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control select">
                                    <option>To do </option>
                                    <option selected>Completed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['developer-list','developer','project','favourites','freelancer-favourites','freelancer-invitations','invited-favourites','user-account-details']))
<!-- The Modal -->
<div class="modal fade" id="bookmark">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">INVITE FREELANCER</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">		
                <form action="#">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="average-bids">
                                    <p>Contact <span class="text-highlight">John Doe </span>  about your Project</p>
                                </div>
                                <div class="input-block">
                                    <label class="form-label">Invite title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block">
                                    <label class="form-label">Send a private message</label>
                                    <textarea class="form-control" rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block">
                                    <label class="form-label">Hire for</label>
                                        <div class="radio">
                                            <label class="custom_radio">
                                                <input type="radio" value="fix" name="fix" checked>
                                                <span class="checkmark"></span>  Fixed Price
                                            </label>
                                            <label class="custom_radio">
                                                <input type="radio" value="fix" name="fix">
                                                <span class="checkmark"></span>  Hourly Rate
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block">
                                        <label class="form-label">Hire for</label>
                                        <div class="radio">
                                            <label class="custom_radio">
                                                <input type="radio" value="fix" name="fix">
                                                <span class="checkmark"></span>  Fixed Price
                                            </label>
                                            <label class="custom_radio">
                                                <input type="radio" value="fix" name="fix">
                                                <span class="checkmark"></span>  Hourly Rate
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block">
                                        <label class="form-label">Budget</label>
                                        <div class="form-row">												
                                            <div class="col-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-pink">
                                                         <span class="input-group-text" id="basic-add">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="20.00">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-control select">
                                                    <option value="0">USD</option>
                                                    <option value="0">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block">
                                        <label class="form-label">Budget</label>
                                        <div class="form-row">												
                                            <div class="col-6">
                                                <div class="input-group form-inline">
                                                    <div class="input-group-prepend bg-pink">
                                                         <span class="input-group-text" id="basic-addon">$</span>
                                                    </div>
                                                    <input type="text" class="form-control me-1" placeholder="20.00"> <label class="form-label">/ hr</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <select class="form-control select">
                                                    <option value="0">USD</option>
                                                    <option value="0">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label class="form-label">Project</label>
                                        <select class="form-control select">
                                            <option value="0">3D Renders and Amazon Product Store images/Video</option>
                                            <option value="0">3D Renders and Amazon Product Store Video</option>
                                            <option value="0">3D Renders and Amazon Product Store images</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-end">
                            <button type="submit" class="btn btn-primary submit-btn">Send Invite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
    
    <!-- The Modal -->
    <div class="modal fade" id="rating">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header d-block b-0 pb-0">
                    <span class="modal-close float-end"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
                </div>
                <div class="modal-body">		
                    <form action="{{url('project')}}">
                        <div class="modal-info">
                            <div class="text-center pt-0 mb-5">
                                <h3>Please login to Favourite Freelancers</h3>
                            </div>
                            <div class="submit-section text-center">
                                <button  data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn">Cancel</button>
                                <button type="submit" class="btn btn-primary click-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
@endif
@if(Route::is(['favourites','freelancer-favourites','invited-favourites']))
<!-- The Modal -->
<div class="modal fade" id="bookmark">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">INVITE FREELANCER</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
            </div>
            <div class="modal-body">        
                <form action="invited-freelancer">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="average-bids mb-4">
                                    <p>Contact <span class="text-highlight">John Doe </span>  about your Project</p>
                                </div>
                                <div class="form-group">
                                    <label>Invite title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Send a private message</label>
                                    <textarea class="form-control" rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hire for</label>
                                        <div class="radio">
                                            <label class="custom_radio me-2">
                                                <input type="radio" value="fix" checked>
                                                <span class="checkmark"></span>  Fixed Price
                                            </label>
                                            <label class="custom_radio">
                                                <input type="radio" value="fix">
                                                <span class="checkmark"></span>  Hourly Rate
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hire for</label>
                                        <div class="radio">
                                            <label class="custom_radio me-2">
                                                <input type="radio" value="rate" checked>
                                                <span class="checkmark"></span>  Fixed Price
                                            </label>
                                            <label class="custom_radio">
                                                <input type="radio" value="rate">
                                                <span class="checkmark"></span>  Hourly Rate
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Budget</label>
                                        <div class="form-row">                                              
                                            <div class="col-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend bg-pink d-flex">
                                                         <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="20.00">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <select class="form-control select">
                                                    <option value="0">USD</option>
                                                    <option value="0">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Budget</label>
                                        <div class="form-row">                                              
                                            <div class="col-sm-7">
                                                <div class="input-group form-inline mb-2">
                                                    <div class="input-group-prepend bg-pink d-flex">
                                                         <span class="input-group-text" id="basic-add">$</span>
                                                    </div>
                                                    <input type="text" class="form-control me-1" placeholder="20.00"> 
                                                    <label class="invited-freelancer-label">/ hr</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <select class="form-control select form-select">
                                                    <option value="0">USD</option>
                                                    <option value="0">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Project</label>
                                        <select class="form-control select form-select">
                                            <option value="0">3D Renders and Amazon Product Store images/Video</option>
                                            <option value="0">3D Renders and Amazon Product Store Video</option>
                                            <option value="0">3D Renders and Amazon Product Store images</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <button type="submit" class="btn btn-primary submit-btn">Send Invite</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /The Modal -->
@endif
@if(Route::is(['freelancer-portfolio']))
  <!-- The Modal -->
  <div class="modal fade" id="portfolio">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add Portfolio</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
            </div>
            <div class="modal-body">
                                   
                <form action="{{url('freelancer-portfolio')}}">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block">
                                    <label class="form-label">Link</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-0 d-flex last-group">
                                    <div class="w-100">
                                        <label class="form-label">Image</label>
                                        <input id="test" type="text" value="" class="form-control">
                                    </div>
                                    <label class="file-upload image-upbtn">
                                        Upload <input type="file" id="FileUpload1" onchange="addLink()">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <a data-bs-dismiss="modal" class="btn btn-cancel submit-btn">Cancel</a>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="portfolio-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Edit Portfolio</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
            </div>
            <div class="modal-body">
                                   
                <form action="{{url('freelancer-portfolio')}}">
                    <div class="modal-info">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block">
                                    <label class="form-label">Title</label>
                                    <input type="text" value="Portfolio Name" class="form-control">
                                </div>
                                <div class="input-block">
                                    <label class="form-label">Link</label>
                                    <input type="text" value="https://themeforest.net/item/tasklay-a-task-marketplace-for-freelancers/34742243" class="form-control">
                                </div>
                                <div class="input-block mb-0 d-flex last-group">
                                    <div class="w-100">
                                        <label class="form-label">Image</label>
                                        <input id="test2" type="text" value="file:///C:/Users/DreamGuys/Downloads/bird-colorful-logo-gradient-vector/7.jpg" class="form-control">
                                    </div>
                                    <label class="file-upload image-upbtn">
                                        Upload <input type="file" id="FileUpload" onchange="addLink()">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section text-end">
                        <a data-bs-dismiss="modal" class="btn btn-cancel submit-btn">Cancel</a>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save Changes</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header small-modal">
                <h4>Confirm to Delete Portfolio</h4>
                <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
            </div>
            <div class="modal-body">
                <div class="modal-info">
                    <p class="mb-0">Are you sure you want to delete this portfolio?</p>
                </div>
                <form action="{{url('freelancer-portfolio')}}">
                    <div class="submit-section text-end">
                        <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endif
@if(Route::is(['chats','freelancer-chats']))
<!-- Voice Call Modal -->
<div class="modal fade call-modal" id="voice_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Outgoing Call -->
                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img alt="User Image" src="{{ URL::asset('/assets/img/img-05.jpg')}}" class="call-avatar">
                                <h4>Darren Elder</h4>
                                <span>Connecting...</span>
                            </div>                          
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="javascript:void(0);" class="btn call-item call-start"><i class="material-icons">call</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Outgoing Call -->
            </div>
        </div>
    </div>
</div>
<!-- /Voice Call Modal -->

<!-- Video Call Modal -->
<div class="modal fade call-modal" id="video_call">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
            
                <!-- Incoming Call -->
                <div class="call-box incoming-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img class="call-avatar" src="{{ URL::asset('/assets/img/img-05.jpg')}}" alt="User Image">
                                <h4>Darren Elder</h4>
                                <span>Calling ...</span>
                            </div>                          
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item call-end" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
                                <a href="javascript:void(0);" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Incoming Call -->
                
            </div>
        </div>
    </div>
</div>
<!-- Video Call Modal -->
@endif

@if(Route::is(['project-employer-view-proposal']))
			<!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="hire-now">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Hire - Hannah Finn</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="input-block">
											<label class="form-label">Message</label>
											<textarea class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
										</div>
									</div>
								</div>
								<label class="custom_check close-project">
									<input type="checkbox" name="rem_password">
									<span class="checkmark"></span>Close this project for other freelancers
								</label>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<a href="#success-hire" class="btn btn-primary submit-btn" data-bs-toggle="modal">Let’s Discuss</a>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->

			<!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="success-hire">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body">	
							<div class="success-msg-content text-center">
								<h4>Hired Successfully </h4>
								<p>Freelancer Hannah finn has been successfully hired for the project “Project Name”, This project will be hide for Other freelancers & in future</p>
								<a href="{{url('project-employer-view-proposal')}}" class="btn btn-primary mt-3">Go to Projects</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif

            @if(Route::is(['membership-plans']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Subscription - Basic Plan</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <div class="wallet-add">
									<div class="row">
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
												<label for="rolelink">
													<img src="{{URL::asset('assets/img/paypal.svg')}}" alt="Paypal">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink1" name="attachment">
												<label for="rolelink1">
													<img src="{{URL::asset('assets/img/stripe.svg')}}" alt="Stripe">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink2" name="attachment">
												<label for="rolelink2">
													<img src="{{URL::asset('assets/img/bank.svg')}}" alt="image">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
									</div>
																
								</div>
                            </div>
                            <form action="{{url('freelancer-membership')}}">
                                <div class="doc-btn text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-gray">Cancel</a>
                                    <a href="#success-hire" data-bs-toggle="modal" class="btn btn-primary">Subscribe Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>

			<!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="success-hire">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body pt-4">	
							<div class="success-msg-content text-center">
								<h4>Payment Successfully </h4>
								<p>Thanks for Purchasing “Basic plan”, Enjoy the benefit of plan for  a month.</p>
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary mt-3">Close</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif
            @if(Route::is(['verify-identity']))
            <!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="success-verified">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body pt-4">	
							<div class="success-msg-content text-center">
								<h4>Verification Submitted Successfully </h4>
								<p>You will be verified once, admin approves
									your verification</p>
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary mt-3">Okay</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif
            @if(Route::is(['change-password']))
            <!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="password-changed">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body pt-4">	
							<div class="success-msg-content text-center">
								<h4>Password  Changed!!! </h4>
								<p>Your Password Changed successfully,<br>
									Please login to Continue</p>
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary mt-3">Okay</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif

            @if(Route::is(['freelancer-completed-projects']))
            <!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="write-review">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Write a Review</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="reviewed-user">
										<img src="{{URL::asset('assets/img/user/table-avatar-02.jpg')}}" alt="Img">
										<span>Bolethe Fleischer</span>
									</div>
									<div class="input-block form-info">
										<label class="col-form-label mb-0 mt-2">Ratings</label>
										<div class="rating rating-select mb-0">
											<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
											<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
											<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
											<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
											<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										</div>
									</div>
									<div class="input-block">
										<label class="form-label">Description</label>
										<textarea class="form-control summernote"></textarea>
									</div>
								</div>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
		   @endif
           @if(Route::is(['freelancer-milestones']))
           	<!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="add-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Milestone</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-lg-4">
											<div class="input-block">
												<label class="form-label">Milestone name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-2">
											<div class="input-block">
												<label class="form-label">Amount</label>
												<input type="text" class="form-control">
												<span class="input-group-text">$</span>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-block">
												<label class="form-label">Start Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-block">
												<label class="form-label">End Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Description</label>
												<textarea class="form-control summernote"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
			<!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="edit-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Milestone</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-lg-4">
											<div class="input-block">
												<label class="form-label">Milestone name</label>
												<input type="text" class="form-control" value="Creating Logo">
											</div>
										</div>
										<div class="col-lg-2">
											<div class="input-block">
												<label class="form-label">Amount</label>
												<input type="text" class="form-control" value="200">
												<span class="input-group-text">$</span>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-block">
												<label class="form-label">Start Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-block">
												<label class="form-label">End Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Description</label>
												<textarea class="form-control summernote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Completion (%)</label>
												<select class="select">
													<option value="">10</option>
													<option value="">20</option>
													<option value="">30</option>
													<option value="">40</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Status</label>
												<select class="select">
													<option value="">On Hold</option>
													<option value="">Completed</option>
													<option value="">Inprogress</option>
													<option value="">Cancel</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif

            @if(Route::is(['freelancer-task']))
            <!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="add-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add New Task</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Milestone</label>
												<select class="select">
													<option value="">Select</option>
													<option value="">Research</option>
													<option value="">Design </option>
													<option value="">SDevelopment</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Due date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Task Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Description</label>
												<textarea class="form-control summernote"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Status</label>
												<select class="select">
													<option value="">On Hold</option>
													<option value="">Completed</option>
													<option value="">Inprogress</option>
													<option value="">Cancel</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
			<!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="edit-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Task</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Milestone</label>
												<select class="select">
													<option value="">Research</option>
													<option value="">Design </option>
													<option value="">SDevelopment</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Due date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Task Name</label>
												<input type="text" class="form-control" value="Full-stack Developer  ">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label class="form-label">Description</label>
												<textarea class="form-control summernote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block">
												<label class="form-label">Status</label>
												<select class="select">
													<option value="">On Hold</option>
													<option value="">Completed</option>
													<option value="">Inprogress</option>
													<option value="">Cancel</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									<button type="submit" class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
			
            @endif
            @if(Route::is(['freelancer-payment']))
            <!-- The Modal -->
			<div class="modal fade edit-proposal-modal success-modal" id="edit-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header justify-content-end">
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">	
							<div class="success-msg-content text-center">
								<h4>Payment Request Sent Successfully</h4>
								<p>Your payment request for milestone ”Logo Design” has been successfully started</p>
								<a href="{{url('freelancer-dashboard')}}" class="btn btn-primary mt-3">Go to Dashboard</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif
            @if(Route::is(['freelancer-payout']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Payout Setting</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <h5>Payout Methods</h5>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/bank-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Bank Transfer</h5>
                                            <p class="mb-0">Connect your bank account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/paypal-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Paypal</h5>
                                            <p class="mb-0">Connect your Paypal account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                            </div>
                            <form action="{{url('freelancer-portfolio')}}">
                                <div class="submit-section text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
            @endif
            @if(Route::is(['freelancer-statement']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Payout Setting</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <h5>Payout Methods</h5>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/bank-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Bank Transfer</h5>
                                            <p class="mb-0">Connect your bank account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/paypal-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Paypal</h5>
                                            <p class="mb-0">Connect your Paypal account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                            </div>
                            <form action="{{url('freelancer-portfolio')}}">
                                <div class="submit-section text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
            @endif

            @if(Route::is(['freelancer-membership']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Subscription - Basic Plan</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <div class="wallet-add">
									<div class="row">
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
												<label for="rolelink">
													<img src="{{URL::asset('/assets/img/paypal.svg')}}" alt="Paypal">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink1" name="attachment">
												<label for="rolelink1">
													<img src="{{URL::asset('/assets/img/stripe.svg')}}" alt="Stripe">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
										<div class="col-md-4">
											<div class="bank-selection">
												<input type="radio" value="attach_link" id="rolelink2" name="attachment">
												<label for="rolelink2">
													<img src="{{URL::asset('/assets/img/bank.svg')}}" alt="image">
													<span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
												</label>
											</div>
										</div>
									</div>
																
								</div>
                            </div>
                            <form action="{{url('freelancer-membership')}}">
                                <div class="doc-btn text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-gray">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
            @endif
            @if(Route::is(['freelancer-verify-identity']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Payout Setting</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <h5>Payout Methods</h5>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/bank-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Bank Transfer</h5>
                                            <p class="mb-0">Connect your bank account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/paypal-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Paypal</h5>
                                            <p class="mb-0">Connect your Paypal account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                            </div>
                            <form action="{{url('freelancer-portfolio')}}">
                                <div class="submit-section text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>

			<!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="success-verified">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body pt-4">	
							<div class="success-msg-content text-center">
								<h4>Verification Submitted Successfully </h4>
								<p>You will be verified once, admin approves
									your verification</p>
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary mt-3">Okay</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif
            @if(Route::is(['freelancer-change-password']))
            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Payout Setting</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <h5>Payout Methods</h5>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('assets/img/icon/bank-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Bank Transfer</h5>
                                            <p class="mb-0">Connect your bank account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('assets/img/icon/paypal-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Paypal</h5>
                                            <p class="mb-0">Connect your Paypal account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                            </div>
                            <form action="{{url('freelancer-portfolio')}}">
                                <div class="submit-section text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>

			<!-- The Modal -->
			<div class="modal fade success-modal hire-modal" id="password-changed">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-body pt-4">	
							<div class="success-msg-content text-center">
								<h4>Password  Changed!!! </h4>
								<p>Your Password Changed successfully,<br>
									Please login to Continue</p>
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary mt-3">Okay</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif
            @if(Route::is(['completed-projects-milestones']))
            <!-- The Modal -->
			<div class="modal fade edit-proposal-modal" id="view-milestone">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">View Milestone</h4>
							<span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></a></span>
						</div>
						<div class="modal-body">		
							<div class="d-flex justify-content-between milestone-view">
								<h5>Create desktop applications</h5>
								<span>Amount : $400</span>
							</div>
							<ul class="download-item">
								<li>
									<a href="javascript:void(0);">Preview_Screens.zip <i class="feather-download"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);">Finalupdate.zip <i class="feather-download"></i></a>
								</li>
							</ul>
							<div class="text-end">
								<a href="javascript:void(0);" class="btn btn-primary">Approve</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
            @endif


            <div class="modal fade" id="payout_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Payout Setting</h4>
                            <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                        </div>
                        <div class="modal-body">
                            <div class="modal-info">
                                <h5>Payout Methods</h5>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/bank-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Bank Transfer</h5>
                                            <p class="mb-0">Connect your bank account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                                <div class="payout-method-option">
                                    <div class="d-flex align-items-center">
                                        <div class="payout-icon">
                                            <img src="{{URL::asset('/assets/img/icon/paypal-line.svg')}}" alt="icon">
                                        </div>
                                        <div class="payout-method-content">
                                            <h5>Paypal</h5>
                                            <p class="mb-0">Connect your Paypal account</p>
                                        </div>
                                    </div>
                                    <a class="badge badge-paid"><span>Connect</span></a>
                                </div>
                            </div>
                            <form action="{{url('freelancer-portfolio')}}">
                                <div class="submit-section text-end">
                                    <a data-bs-dismiss="modal"  class="btn btn-cancel submit-btn">Cancel</a>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>

            @if(Route::is(['project-conformation']))

            <div class="modal fade" id="post-sucess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="scuess-popup">
                                <img src="assets/img/icon/check1.svg">
                                <h4>Project Posted Successfully</h4>
                                <h5>You can now access your project on your dashboard</h5>
                                <a href="{{url('index')}}"><i class="feather-arrow-left me-2"></i>Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

			

