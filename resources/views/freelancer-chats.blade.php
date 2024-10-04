<?php $page = 'freelancer-chats'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="chat-page-wrapper">
        <div class="container">
            <div class="content ">



                <!-- sidebar group -->
                <div class="sidebar-group left-sidebar chat_sidebar">

                    <!-- Chats sidebar -->
                    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

                        <div class="slimscroll">

                            <!-- Left Chat Title -->
                            <div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
                                <div class="select-group-chat">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);">
                                            All Chats
                                        </a>

                                    </div>
                                </div>
                                <div class="add-section">
                                    <ul>
                                        <li><a href="javascript:void(0);" class="user-chat-search-btn"><i
                                                    class="bx bx-search"></i></a></li>
                                        <li>
                                            <div class="chat-action-btns">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item "
                                                            ><span><i
                                                                    class="bx bx-message-rounded-add"></i></span>New Chat
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                           ><span><i
                                                                    class="bx bx-user-circle"></i></span>Create Group</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"
                                                            ><span><i
                                                                    class="bx bx-user-plus"></i></span>Invite Others</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- Chat Search -->
                                    <div class="user-chat-search">
                                        <form>
                                            <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                            <input type="text" name="chat-search" placeholder="Search"
                                                class="form-control">
                                            <div class="user-close-btn-chat"><span class="material-icons">close</span></div>
                                        </form>
                                    </div>
                                    <!-- /Chat Search -->
                                </div>
                            </div>
                            <!-- /Left Chat Title -->

                            <!-- Top Online Contacts -->
                            <div class="top-online-contacts">
                                <div class="fav-title">
                                    <h6>Online Now</h6>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-1.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-7.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-5.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-3.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="top-contacts-box">
                                                <div class="profile-img online">
                                                    <a href="{{ url('chats') }}"><img
                                                            src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                                            alt="Image"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Top Online Contacts -->

                            <div class="sidebar-body chat-body" id="chatsidebar">

                                <!-- Left Chat Title -->
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title pin-chat">
                                        <h6><i class="bx bx-pin me-1"></i>Pinned Chat</h6>
                                    </div>
                                </div>
                                <!-- /Left Chat Title -->

                                <ul class="user-list space-chat">
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);" class="status-active">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Mark Villiams</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-pin me-2"></i>
                                                        <i class="bx bx-check-double"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar ">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-13.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Elizabeth Sosa</h5>
                                                    <p><span class="animate-typing-col">Typing
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-pin me-2"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/avatar/avatar-5.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Michael Howard</h5>
                                                    <p>Thank you</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-pin me-2"></i>
                                                        <i class="bx bx-check-double check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-log-out"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-pin"></i></span>Unpin Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Left Chat Title -->
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title pin-chat">
                                        <h6><i class="bx bx-message-square-dots me-1"></i>Recent Chat</h6>
                                    </div>
                                </div>
                                <!-- /Left Chat Title -->
                                <ul class="user-list">
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar avatar-online">
                                                <img src="{{ URL::asset('/assets/img/avatar/avatar-1.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Horace Keene</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Just Now</small>
                                                    <div class="chat-pin">
                                                        <span class="count-message">5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Read</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-3.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Hollis Tran</h5>
                                                    <p><i class="bx bx-video me-1"></i>Video</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div class="avatar">
                                                <img src="{{ URL::asset('/assets/img/avatar/avatar-4.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>James Albert</h5>
                                                    <p><i class="bx bx-file me-1"></i>Project Tools.doc</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-9.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Debra Jones</h5>
                                                    <p><i class="bx bx-microphone me-1"></i>Audio</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">12:30 PM</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-check-double check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar ">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-7.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Dina Brown</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">Yesterday</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-microphone-off"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-8.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Judy Mercer</h5>
                                                    <p class="missed-call-col"><i
                                                            class="bx bx-phone-incoming me-1"></i>Missed Call</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">25/July/23</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-5.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Richard Ohare</h5>
                                                    <p><i class="bx bx-image-alt me-1"></i>Photo</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">27/July/23</small>
                                                    <div class="chat-pin">
                                                        <i class="bx bx-check-double"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item chat-user-list">
                                        <a href="javascript:void(0);">
                                            <div>
                                                <div class="avatar avatar-online">
                                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-6.jpg') }}"
                                                        class="rounded-circle" alt="image">
                                                </div>
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Charles Sellars</h5>
                                                    <p>Have you called them?</p>
                                                </div>
                                                <div class="last-chat-time">
                                                    <small class="text-muted">10:20 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="chat-hover ms-1">
                                            <div class="chat-action-col">
                                                <span class="d-flex" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </span>
                                                <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                    <span class="dropdown-item "><span><i
                                                                class="bx bx-archive-in"></i></span>Archive Chat </span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-volume-mute"></i></span>Mute
                                                        Notification</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-trash"></i></span>Delete Chat</span>
                                                    <span class="dropdown-item"><span><i class="bx bx-pin"></i></span>Pin
                                                        Chat</span>
                                                    <span class="dropdown-item"><span><i
                                                                class="bx bx-check-square"></i></span>Mark as Unread</span>
                                                    <span class="dropdown-item" ><span><i
                                                                class="bx bx-block"></i></span>Block</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <!-- / Chats sidebar -->
                </div>
                <!-- /Sidebar group -->

                <!-- Chat -->
                <div class="chat chat-messages" id="middle">
                    <div>
                        <div class="chat-header">
                            <div class="user-details">
                                <div class="d-lg-none">
                                    <ul class="list-inline mt-2 me-2">
                                        <li class="list-inline-item">
                                            <a class="text-muted px-0 left_sides" href="javascript:void(0);" data-chat="open">
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <figure class="avatar ms-1">
                                    <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}" class="rounded-circle"
                                        alt="image">
                                </figure>
                                <div class="mt-1">
                                    <h5>Mark Villiams</h5>
                                    <small class="last-seen">
                                        Last Seen at 07:15 PM
                                    </small>
                                </div>
                            </div>
                            <div class="chat-options ">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                            <i class="bx bx-search"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Video Call">
                                        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                            data-bs-target="#video_call">
                                            <i class="bx bx-video"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Voice Call">
                                        <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                            data-bs-target="#voice_call">
                                            <i class="bx bx-phone"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item dream_profile_menu">
                                        <a href="javascript:void(0)" class="btn btn-outline-light not-chat-user"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact Info">
                                            <i class="bx bx-info-circle"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-outline-light no-bg" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ url('index') }}" class="dropdown-item "><span><i
                                                        class="bx bx-x"></i></span>Close Chat </a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-volume-mute"></i></span>Mute Notification</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-time-five"></i></span>Disappearing Message</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-brush-alt"></i></span>Clear Message</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-trash"></i></span>Delete Chat</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-dislike"></i></span>Report</a>
                                            <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                        class="bx bx-block"></i></span>Block</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Chat Search -->
                            <div class="chat-search">
                                <form>
                                    <span class="form-control-feedback"><i class="bx bx-search"></i></span>
                                    <input type="text" name="chat-search" placeholder="Search Chats"
                                        class="form-control">
                                    <div class="close-btn-chat"><span class="material-icons">close</span></div>
                                </form>
                            </div>
                            <!-- /Chat Search -->
                        </div>
                        <div class="chat-body chat-page-group slimscroll">
                            <div class="messages">
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star d-none"><i class="bx bxs-star"></i></span>
                                            </h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content">
                                            Hello <a href="javascript:void(0);">@Alex</a> Thank you for the beautiful web
                                            design ahead schedule.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);" ><i
                                                                class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-line">
                                    <span class="chat-date">Today, July 24</span>
                                </div>
                                <div class="chats chats-right">
                                    <div class="chat-content">
                                        <div class="chat-profile-name text-end">
                                            <h6><i class="bx bx-check-double me-1 inactive-check"></i>Alex Smith<span>8:16
                                                    PM</span><span class="check-star msg-star-one d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star-one"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-one">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-edit-alt"></i></span>Edit</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content ">
                                            <div class="emoj-group rig-emoji-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);" ><i
                                                                class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="chat-voice-group">
                                                <ul>
                                                    <li><a href="javascript:void(0);"><span><img
                                                                    src="{{ URL::asset('/assets/img/icon/play-01.svg') }}"
                                                                    alt="image"></span></a></li>
                                                    <li><img src="{{ URL::asset('/assets/img/voice.svg') }}"
                                                            alt="image"></li>
                                                    <li>0:05</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-10.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                </div>
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star-three d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star-three"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-three">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content award-link chat-award-link">
                                            <a href="javascript:void(0);">https://www.youtube.com/watch?v=GCmL3mS0Psk</a>
                                            <img src="{{ URL::asset('/assets/img/award.jpg') }}" alt="img">
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);" ><i
                                                                class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chats chats-right">
                                    <div class="chat-content">
                                        <div class="chat-profile-name justify-content-end">
                                            <h6><i class="bx bx-check-double me-1 active-check"></i>Alex Smith<span>8:16
                                                    PM</span><span class="check-star msg-star-four d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star-four"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-four">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-edit-alt"></i></span>Edit</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content fancy-msg-box">
                                            <div class="emoj-group wrap-emoji-group ">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);" ><i
                                                                class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="download-col">
                                                <ul class="nav mb-0">
                                                    <li>
                                                        <div class="image-download-col">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-02.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-02.jpg') }}"
                                                                    alt="Img">
                                                            </a>

                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col ">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-03.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-03.jpg') }}"
                                                                    alt="Img">
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="image-download-col image-not-download">
                                                            <a href="{{ URL::asset('/assets/img/media/media-big-01.jpg') }}"
                                                                data-fancybox="gallery" class="fancybox">
                                                                <img src="{{ URL::asset('/assets/img/media/media-01.jpg') }}"
                                                                    alt="Img">
                                                                <span>10+</span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-10.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                </div>

                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star-five d-none"><i
                                                        class="bx bxs-star"></i></span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star-five"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg-five">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="like-chat-grp">
                                            <ul>
                                                <li class="like-chat"><a href="javascript:void(0);">2<img
                                                            src="{{ URL::asset('/assets/img/icon/like.svg') }}"
                                                            alt="Icon"></a></li>
                                                <li class="comment-chat"><a href="javascript:void(0);">2<img
                                                            src="{{ URL::asset('/assets/img/icon/heart.svg') }}"
                                                            alt="Icon"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span><span
                                                    class="check-star msg-star d-none"><i class="bx bxs-star"></i></span>
                                            </h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);" class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item click-star"><span><i
                                                                    class="bx bx-star"></i></span><span
                                                                class="star-msg">Star Message</span></a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-edit-alt"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content reply-getcontent">
                                            Thank you for your support
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a href="javascript:void(0);"><i
                                                                class="bx bx-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li><a href="javascript:void(0);"><img
                                                                            src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a href="javascript:void(0);"><i
                                                                            class="feather-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="javascript:void(0);" ><i
                                                                class="bx bx-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chats">
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content chat-cont-type">
                                        <div class="chat-profile-name chat-type-wrapper">
                                            <p>Mark Villiams Typing...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="chat-footer">
                        <form>
                            <div class="smile-foot">
                                <div class="chat-action-btns">
                                    <div class="chat-action-col">
                                        <a class="action-circle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item "><span><i
                                                        class="bx bx-file"></i></span>Document</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-camera"></i></span>Camera</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-image"></i></span>Gallery</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-volume-full"></i></span>Audio</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-map"></i></span>Location</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                        class="bx bx-user-pin"></i></span>Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="smile-foot emoj-action-foot">
                                <a href="javascript:void(0);" class="action-circle"><i class="bx bx-smile"></i></a>
                                <div class="emoj-group-list-foot down-emoji-circle">
                                    <ul>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icon/emoj-icon-01.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icon/emoj-icon-02.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icon/emoj-icon-03.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icon/emoj-icon-04.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/assets/img/icon/emoj-icon-05.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="javascript:void(0);"><i
                                                    class="feather-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="smile-foot">
                                <a href="javascript:void(0);" class="action-circle"><i class="bx bx-microphone-off"></i></a>
                            </div>
                            <div class="replay-forms">
                                <div class="chats forward-chat-msg reply-div d-none">
                                    <div class="contact-close_call text-end">
                                        <a href="javascript:void(0);" class="close-replay">
                                            <i class="bx bx-x"></i>
                                        </a>
                                    </div>
                                    <div class="chat-avatar">
                                        <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                            class="rounded-circle dreams_chat" alt="image">
                                    </div>
                                    <div class="chat-content">
                                        <div class="chat-profile-name">
                                            <h6>Mark Villiams<span>8:16 PM</span></h6>
                                            <div class="chat-action-btns ms-2">
                                                <div class="chat-action-col">
                                                    <a class="#" href="javascript:void(0);" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu chat-drop-menu dropdown-menu-end">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item message-info-left"><span><i
                                                                    class="bx bx-info-circle"></i></span>Message Info </a>
                                                        <a href="javascript:void(0);" class="dropdown-item reply-button"><span><i
                                                                    class="bx bx-share"></i></span>Reply</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-smile"></i></span>React</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-reply"></i></span>Forward</a>
                                                        <a href="javascript:void(0);" class="dropdown-item"><span><i
                                                                    class="bx bx-star"></i></span>Star Message</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-dislike"></i></span>Report</a>
                                                        <a href="javascript:void(0);" class="dropdown-item" ><span><i
                                                                    class="bx bx-trash"></i></span>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content reply-content">
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control chat_form"
                                    placeholder="Type your message here...">
                            </div>
                            <div class="form-buttons">
                                <button class="btn send-btn" type="submit">
                                    <i class="bx bx-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Chat -->

                <!-- Right sidebar -->
                <div class="right-sidebar right_sidebar_profile right-side-contact show-right-sidebar" id="middle1">
                    <div class="right-sidebar-wrap active">
                        <div class="slimscroll">
                            <div
                                class="left-chat-title d-flex justify-content-between align-items-center border-bottom-0">
                                <div class="fav-title mb-0">
                                    <h6>Contact Info</h6>
                                </div>
                                <div class="contact-close_call text-end">
                                    <a href="javascript:void(0);" class="close_profile close_profile4">
                                        <span class="material-icons">close</span>
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-body">
                                <div class="mt-0 right_sidebar_logo">
                                    <div class="text-center right-sidebar-profile">
                                        <figure class="avatar avatar-xl mb-3">
                                            <img src="{{ URL::asset('/assets/img/avatar/avatar-2.jpg') }}"
                                                class="rounded-circle" alt="image">
                                        </figure>
                                        <h5 class="profile-name">Mark Villiams</h5>
                                        <div class="last-seen-profile">
                                            <span>last seen at 07:15 PM</span>
                                        </div>
                                        <div class="chat-options chat-option-profile">
                                            <ul class="list-inline">
                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Voice Call">
                                                    <a href="javascript:void(0);" class="btn btn-outline-light "
                                                        data-bs-toggle="modal" data-bs-target="#voice_call">
                                                        <i class="bx bx-phone"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item " data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Video Call">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-outline-light profile-open"
                                                        data-bs-toggle="modal" data-bs-target="#voice_call">
                                                        <i class="bx bx-video"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{ url('chats') }}" class="btn btn-outline-light"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Chat">
                                                        <i class="bx bx-message-square-dots"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-member-details">
                                        <div class="member-details">
                                            <ul>
                                                <li>
                                                    <h5>Info</h5>
                                                </li>
                                                <li>
                                                    <h6>Bio</h6>
                                                    <span>Hello, I am using DreamsChat</span>
                                                </li>
                                                <li>
                                                    <h6>Phone</h6>
                                                    <span>555-555-21541</span>
                                                </li>
                                                <li>
                                                    <h6>Email Address</h6>
                                                    <span>info@example.com</span>
                                                </li>
                                                <li>
                                                    <h6>Social Media</h6>
                                                    <div class="social-icons ">
                                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                                class="bx bxl-facebook"></i></a>
                                                        <a href="https://twitter.com/" target="_blank"><i
                                                                class="bx bxl-twitter"></i></a>
                                                        <a href="javascript:void(0);" target="_blank"><i
                                                                class="bx bxl-youtube"></i></a>
                                                        <a href="https://in.linkedin.com/" target="_blank"><i
                                                                class="bx bxl-linkedin"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="right-sidebar-head share-media">
                                <div class="share-media-blk">
                                    <h5>Shared Media</h5>
                                    <a href="javascript:void(0);">View All</a>
                                </div>
                                <div class="about-media-tabs">
                                    <nav>
                                        <div class="nav nav-tabs " id="nav-tab">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                href="#info">Photos</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab1" data-bs-toggle="tab"
                                                href="#Participants">Videos</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab2" data-bs-toggle="tab"
                                                href="#media">File</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab3" data-bs-toggle="tab"
                                                href="#link">Link</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pt-0" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="info">
                                            <ul class="nav share-media-img mb-0">
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/media/media-big-01.jpg')}}"
                                                        data-fancybox="gallery" class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-01.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/media/media-big-02.jpg')}}"
                                                        data-fancybox="gallery" class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-02.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/media/media-big-03.jpg')}}"
                                                        data-fancybox="gallery" class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-03.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/media/media-big-04.jpg')}}"
                                                        data-fancybox="gallery" class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-04.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::asset('/assets/img/media/media-05.jpg')}}" data-fancybox="gallery"
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-05.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                </li>
                                                <li class="blur-media">
                                                    <a href="{{ URL::asset('/assets/img/media/media-02.jpg')}}" data-fancybox="gallery"
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-02.jpg') }}"
                                                            alt="Img">
                                                    </a>
                                                    <span>+10</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="Participants">
                                            <ul class="nav share-media-img mb-0">
                                                <li>
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-01.jpg') }}"
                                                            alt="img">
                                                        <span><i class="bx bx-play-circle"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-02.jpg') }}"
                                                            alt="img">
                                                        <span><i class="bx bx-play-circle"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-03.jpg') }}"
                                                            alt="img">
                                                        <span><i class="bx bx-play-circle"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-04.jpg') }}"
                                                            alt="img">
                                                        <span><i class="bx bx-play-circle"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-05.jpg') }}"
                                                            alt="img">
                                                        <span><i class="bx bx-play-circle"></i></span>
                                                    </a>
                                                </li>
                                                <li class="blur-media">
                                                    <a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
                                                        class="fancybox">
                                                        <img src="{{ URL::asset('/assets/img/media/media-03.jpg') }}"
                                                            alt="img">
                                                    </a>
                                                    <span>+10</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="media">
                                            <div class="media-file">
                                                <div class="media-doc-blk">
                                                    <span><i class="bx bxs-file-doc"></i></span>
                                                    <div class="document-detail">
                                                        <h6>Landing_page_V1.doc</h6>
                                                        <ul>
                                                            <li>12 Mar 2023</li>
                                                            <li>246.3 KB</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="media-download">
                                                    <a href="javascript:void(0);"><i class="bx bx-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="media-file">
                                                <div class="media-doc-blk">
                                                    <span><i class="bx bxs-file-pdf"></i></span>
                                                    <div class="document-detail">
                                                        <h6>Design Guideless.pdf</h6>
                                                        <ul>
                                                            <li>12 Mar 2023</li>
                                                            <li>246.3 KB</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="media-download">
                                                    <a href="javascript:void(0);"><i class="bx bx-download"></i></a>
                                                </div>
                                            </div>
                                            <div class="media-file">
                                                <div class="media-doc-blk">
                                                    <span><i class="bx bxs-file"></i></span>
                                                    <div class="document-detail">
                                                        <h6>sample site.txt</h6>
                                                        <ul>
                                                            <li>12 Mar 2023</li>
                                                            <li>246.3 KB</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="media-download">
                                                    <a href="javascript:void(0);"><i class="bx bx-download"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="link">
                                            <div class="media-link-grp">
                                                <div class="link-img">
                                                    <a href="javascript:void(0);"><img
                                                            src="{{ URL::asset('/assets/img/media-link-01.jpg') }}"
                                                            alt="Img"></a>
                                                </div>
                                                <div class="media-link-detail">
                                                    <h6><a href="javascript:void(0);">Digital Marketing Guide</a></h6>
                                                    <span><a
                                                            href="javascript:void(0);">https://elements.envato.com/all-items/blog</a></span>
                                                </div>
                                            </div>
                                            <div class="media-link-grp mb-0">
                                                <div class="link-img">
                                                    <a href="javascript:void(0);"><img
                                                            src="{{ URL::asset('/assets/img/media-link-02.jpg') }}"
                                                            alt="Img"></a>
                                                </div>
                                                <div class="media-link-detail">
                                                    <h6><a href="javascript:void(0);">Blog Post</a></h6>
                                                    <span><a
                                                            href="javascript:void(0);">https://elements.envato.com/blog-post-TXQ5FB8</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-comman-theme">
                                <h6>2 Group in Common</h6>
                                <ul>
                                    <li>
                                        <div class="avatar">
                                            <img src="{{ URL::asset('/assets/img/avatar/avatar-14.png') }}"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="theme-content">
                                            <h6>Themeforest Group</h6>
                                            <p>Mark Villiams, Elizabeth, Michael....</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="avatar">
                                            <img src="{{ URL::asset('/assets/img/avatar/avatar-15.png') }}"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="theme-content">
                                            <h6>Graphic Designers</h6>
                                            <p>Mark Villiams, Elizabeth, Michael....</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message-grp">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="star-message-left">
                                            <div class="stared-group">
                                                <span class="star-message"> <i class="bx bxs-star"></i></span>
                                                <h6>Starred Messages</h6>
                                            </div>
                                            <div class="count-group">
                                                <span>10</span>
                                                <i class="feather-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" >
                                            <div class="stared-group">
                                                <span class="mute-message"> <i class="bx bxs-microphone-off"></i></span>
                                                <h6>Mute Notifications</h6>
                                            </div>
                                            <div class="count-group">
                                                <i class="feather-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" >
                                            <div class="stared-group">
                                                <span class="block-message"> <i class="bx bx-block"></i></span>
                                                <h6>Block User</h6>
                                            </div>
                                            <div class="count-group">
                                                <i class="feather-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" >
                                            <div class="stared-group">
                                                <span class="report-message"> <i class="bx bx-dislike"></i></span>
                                                <h6>Report User</h6>
                                            </div>
                                            <div class="count-group">
                                                <i class="feather-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" >
                                            <div class="stared-group">
                                                <span class="delete-message"> <i class="bx bx-trash"></i></span>
                                                <h6>Delete Chat</h6>
                                            </div>
                                            <div class="count-group">
                                                <i class="feather-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right sidebar -->


            </div>
        </div>



    </div>
    <!-- /Main Wrapper -->

    @component('components.modal-popup')
    @endcomponent
@endsection
