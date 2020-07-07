@extends('layouts.backend.app')

@section('title','Setting')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div style="background-color:#2196F3;" class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img style="height:136px; width: 136px; border: 2px solid #2196F3;" src="{{asset('public/storage/profile/'.Auth::user()->image)}}" alt="{{ Auth::user()->name }}" />
                        </div>
                        <div class="content-area">
                            <h3>{{ Auth::user()->name }}</h3>
                            <p>Web Software Developer</p>
                            <p>{{ Auth::user()->role->name }}</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Followers</span>
                                <span>1.234</span>
                            </li>
                            <li>
                                <span>Following</span>
                                <span>1.201</span>
                            </li>
                            <li>
                                <span>Friends</span>
                                <span>14.252</span>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                    </div>
                </div>

                <div class="card card-about-me">
                    <div class="header">
                        <h2>ABOUT ME</h2>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="title">
                                    <i class="material-icons">library_books</i>
                                    About
                                </div>
                                <div class="content">
                                    {{ Auth::user()->about }}
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">location_on</i>
                                    Location
                                </div>
                                <div class="content">
                                    Malibu, California
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Update Profile</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                    <form method="post" action="{{ route('author.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="Name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter your Name" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ProfileImage" class="col-sm-2 control-label">Profile Image</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="about" class="col-sm-2 control-label">About</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <textarea class="form-control" id="about" name="about" rows="2" placeholder="Experience">{{ Auth::user()->about }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form method="post" action="{{ route('author.password.update') }}" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="old_password" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="New Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation" class="col-sm-3 control-label">New Password (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="New Password (Confirm)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
