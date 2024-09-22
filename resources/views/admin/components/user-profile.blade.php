<!-- User Profile -->
<div class="profile-status">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="profile-user-box">
                <a href="{{url('admin/profile')}}"><img class="avatar-img rounded-circle " src="{{ URL::asset('/assets_admin/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                <div class="profile-name-box">
                    <h2><a href="{{url('admin/profile')}}">William Cooper</a></h2>
                    <p>Date of Join: 22 May 2021 </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="additional-info">
                <p>Freelancer ID</p>
                <h5>UID00003</h5>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="additional-info">
                <p>Email </p>
                <h5 class="verify-mail"><i data-feather="check-circle" class="me-1 text-success"></i> Verified </h5>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="additional-info">
                <p>Account Status</p>
                <h5 class="text-danger">Active</h5>
            </div>
        </div>
    </div>
</div>
<!-- /User Profile -->