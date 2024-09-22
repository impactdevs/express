<?php $page="notification";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')
	@slot('li_1') Notifications @endslot                
    @slot('li_2') Home @endslot
    @slot('li_3') Notification @endslot
@endcomponent	

<!-- Page Content -->
<div class="content content-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="notification-btn">
                    <a href="javascript:void(0);" class="btn btn-line"><i class="feather-calendar me-2"></i>Today</a>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-line"><i class="feather-check me-2"></i>Mark all as read</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-line text-primary"><i class="feather-trash-2 me-2"></i>Delete All</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="notification-set">
                    <div class="notification-set-content">
                        <div class="notification-setimg">
                            <img src="{{URL::asset('/assets/img/avatar/avatar-1.jpg')}}" alt="img">
                        </div>
                        <div class="notification-set-contents">
                            <h4>Edward Curr</h4>
                            <p>Notifications alert you to new messages in your Kofejob inbox.</p>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-primary">Accept</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-line">Deny</a>
                                </li>
                            </ul>
                            <span>17 Min Ago</span>
                        </div>
                    </div>
                    <div class="notification-set-delete">
                        <a href="javascript:void(0);" class="btn btn-delete">Delete</a>
                    </div>
                </div>
            </div>	
            <div class="col-lg-12">
                <div class="notification-set">
                    <div class="notification-set-content">
                        <div class="notification-setimg">
                            <img src="{{URL::asset('/assets/img/avatar/avatar-2.jpg')}}" alt="img">
                        </div>
                        <div class="notification-set-contents">
                            <h4>Maria Hill</h4>
                            <p> Notifications inform you when someone likes, reacts</p>
                            <span>45 Min Ago</span>
                        </div>
                    </div>
                    <div class="notification-set-delete">
                        <a href="javascript:void(0);" class="btn btn-delete">Delete</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="notification-set">
                    <div class="notification-set-content">
                        <div class="notification-setimg">
                            <img src="{{URL::asset('/assets/img/avatar/avatar-3.jpg')}}" alt="img">
                        </div>
                        <div class="notification-set-contents">
                            <h4>Edward Curr</h4>
                            <p> Added a comment to Dynabike</p>
                            <span>45 Min Ago</span>
                        </div>
                    </div>
                    <div class="notification-set-delete">
                        <a href="javascript:void(0);" class="btn btn-delete">Delete</a>
                    </div>
                </div>
            </div>	
        </div>					
    </div>
</div>				
<!-- /Page Content -->
@endsection