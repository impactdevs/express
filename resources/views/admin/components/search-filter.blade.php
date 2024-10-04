@if(!Route::is(['deposit','deposit-cancelled','deposit-completed','deposit-hold','deposit-pending','sub-category','transaction','transaction-deposit','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed','users','user-active','user-inactive','user-suspended','user-administrator','withdrawn-completed','withdrawn-pending','withdrawn','withdrawn-cancelled']))
<!-- Search Filter -->
<div class="card filter-card" id="filter_inputs">
    <div class="card-body pb-0">
        <form action="#" method="GET">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>{{ $li_1 }}</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>From Date</label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>To Date</label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Search Filter -->
@endif
@if(Route::is(['sub-category']))
<!-- Search Filter -->
<div class="card filter-card" id="filter_inputs">
    <div class="card-body pb-0">
        <form action="#" method="GET">
            <div class="row filter-row">
                <div class="col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control select">
                            <option>Select A Parent Category</option>
                            <option>Graphics & Design</option>
                            <option>Graphics & Design</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Sub Category Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Search Filter -->
@endif
@if(Route::is(['deposit','deposit-cancelled','deposit-completed','deposit-hold','deposit-pending']))
<!-- Search Filter -->
<div class="card filter-card" id="filter_inputs">
    <div class="card-body pb-0">
        <form action="#" method="GET">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">                                       
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Expertise</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Search Filter -->
@endif
@if(Route::is(['transaction','transaction-deposit','transaction-withdraw','transaction-pending','transaction-onhold','transaction-completed','users','user-active','user-inactive','user-suspended','user-administrator','withdrawn-completed','withdrawn-pending','withdrawn','withdrawn-cancelled']))
<!-- Search Filter -->
<div class="card filter-card" id="filter_inputs">
    <div class="card-body pb-0">
        <form action="#" method="GET">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control">                                       
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label>Expertise</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Search Filter -->
@endif