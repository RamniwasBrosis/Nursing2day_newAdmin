@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="clearfix">
                <div class="card card-bx profile-card author-profile m-b30">
                    <div class="card-body">
                        <div class="p-5">
                            <div class="author-profile">
                                <div class="author-media">
                                    <img src="{{ asset('images/tab/1.jpg') }}" alt="">
                                    <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                        <input type="file" class="update-flie">
                                        <i class="fa fa-camera"></i>
                                    </div>
                                </div>
                                <div class="author-info">
                                    <h6 class="title">Nella Vita</h6>
                                    <span>Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="info-list">
                            <ul>
                                <li><a href="{{ url('app-profile') }}">Models</a><span>36</span></li>
                                <li><a href="{{ url('uc-lightgallery') }}">Gallery</a><span>3</span></li>
                                <li><a href="{{ url('app-profile') }}">Lessons</a><span>1</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="input-group mb-3">
                            <div class="form-control rounded text-center bg-white">Portfolio</div>
                        </div>
                        <div class="input-group">
                            <a href="https://www.dexignzone.com/" target="_blank" class="form-control text-primary rounded text-start bg-white">https://www.dexignzone.com/</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="card profile-card card-bx m-b30">
                <div class="card-header">
                    <h6 class="title">Account setup</h6>
                </div>
                <form class="profile-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="John">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Specialty</label>
                                <input type="text" class="form-control" value="Developer">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Skills</label>
                                <input type="text" class="form-control" value="HTML,  JavaScript,  PHP">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Gender</label>
                                <select class="default-select form-control" id="validationCustom05">
                                    <option  data-display="Select">Please select</option>
                                    <option value="html">Male</option>
                                    <option value="css">Female</option>
                                    <option value="javascript">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Birth</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control" value="12345">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Email address</label>
                                <input type="text" class="form-control" value="demo@gmail.com">
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">Country</label>
                                <select class="default-select form-control" id="validationCustom01">
                                    <option  data-display="Select">Please select</option>
                                    <option value="russia">Russia</option>
                                    <option value="canada">Canada</option>
                                    <option value="china">China</option>
                                    <option value="india">India</option>
                                </select>
                            </div>
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">City</label>
                                <select class="default-select form-control" id="validationCustom02">
                                    <option  data-display="Select">Please select</option>
                                    <option>Krasnodar</option>
                                    <option>Tyumen</option>
                                    <option>Chelyabinsk</option>
                                    <option>Moscow</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">UPDATE</button>
                        <a href="{{ url('page-forgot-password') }}" class="btn-link">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
