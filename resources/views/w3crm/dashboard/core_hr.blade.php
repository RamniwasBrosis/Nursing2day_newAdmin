@extends('super-admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Core HR</h5></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Home </a>
        </li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Core Hr</a></li>
    </ol>
    <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 col-xxl-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Employees</h4>
                                <div>
                                    <!-- <a href="javascript:void(0)" class="btn btn-primary btn-sm"data-bs-toggle="modal" data-bs-target="#offcanvasExample">+ Add Employee</a> -->
                                    <a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Employee</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                        + Invite Employee
                                    </button>
                                </div>
                            </div>
                                <table id="empoloyees-tbl" class="table">
                                    <thead>
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Email Address</th>
                                            <th>Contact Number</th>
                                            <th>Gender</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Moni Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Joney Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Peter Oliver</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Elijah James</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky James</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span>1001</span></td>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>James Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">abc@gmail.com</span></td>
                                            <td>
                                                <span>+91 123 456 7890</span>
                                            </td>
                                            <td>
                                                <span>Male</span>
                                            </td>
                                            <td>
                                                <span>Delhi</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger light border-0">Inactive</span>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1 attendance-tbl">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Attendance</h4>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        + Mark Attendance
                                    </button>
                                </div>
                            </div>
                                <table id="attendance-tbl" class="table">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>
                                                <span>1</span>
                                                <p>MO</p>
                                            </th>
                                            <th>
                                                <span>2</span>
                                                <p>Tu</p>
                                            </th>
                                            <th>
                                                <span>3</span>
                                                <p>We</p>
                                            </th>
                                            <th>
                                                <span>4</span>
                                                <p>Th</p>
                                            </th>
                                            <th>
                                                <span>5</span>
                                                <p>Fr</p>
                                            </th>
                                            <th>
                                                <span>6</span>
                                                <p>Sa</p>
                                            </th>
                                            <th>
                                                <span>7</span>
                                                <p>MO</p>
                                            </th>
                                            <th>
                                                <span>8</span>
                                                <p>Tu</p>
                                            </th>
                                            <th>
                                                <span>9</span>
                                                <p>We</p>
                                            </th>
                                            <th>
                                                <span>10</span>
                                                <p>Th</p>
                                            </th>
                                            <th>
                                                <span>11</span>
                                                <p>Fr</p>
                                            </th>
                                            <th>
                                                <span>12</span>
                                                <p>Sa</p>
                                            </th>
                                            <th>
                                                <span>13</span>
                                                <p>MO</p>
                                            </th>
                                            <th>
                                                <span>14</span>
                                                <p>Tu</p>
                                            </th>
                                            <th>
                                                <span>15</span>
                                                <p>We</p>
                                            </th>
                                            <th>
                                                <span>16</span>
                                                <p>Th</p>
                                            </th>
                                            <th>
                                                <span>17</span>
                                                <p>Fr</p>
                                            </th>
                                            <th>
                                                <span>18</span>
                                                <p>Sa</p>
                                            </th>
                                            <th>
                                                <span>19</span>
                                                <p>MO</p>
                                            </th>
                                            <th>
                                                <span>20</span>
                                                <p>Tu</p>
                                            </th>
                                            <th>
                                                <span>21</span>
                                                <p>We</p>
                                            </th>
                                            <th>
                                                <span>22</span>
                                                <p>Th</p>
                                            </th>
                                            <th>
                                                <span>23</span>
                                                <p>Fr</p>
                                            </th>
                                            <th>
                                                <span>24</span>
                                                <p>Sa</p>
                                            </th>
                                            <th>
                                                <span>25</span>
                                                <p>MO</p>
                                            </th>
                                            <th>
                                                <span>26</span>
                                                <p>Tu</p>
                                            </th>
                                            <th>
                                                <span>27</span>
                                                <p>We</p>
                                            </th>
                                            <th>
                                                <span>28</span>
                                                <p>Th</p>
                                            </th>
                                            <th>
                                                <span>29</span>
                                                <p>Fr</p>
                                            </th>
                                            <th>
                                                <span>30</span>
                                                <p>Sa</p>
                                            </th>
                                            <th>
                                                <span>31</span>
                                                <p>MO</p>
                                            </th>
                                            <th class="text-center">
                                                <span>Total</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Moni Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Joney Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Peter Oliver</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Elijah James</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky James</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic1.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic3.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>James Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <img src="{{asset('/images/contacts/pic2.jpg')}}" class="avatar avatar-md" alt="">
                                                    <div>
                                                        <h6>Ricky Antony</h6>
                                                        <span>Web Designer</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td><span class="text-danger"><i class="fa-regular fa-xmark"></i></span></td>
                                            <td><span class="text-success"><i class="fa-solid fa-check"></i></span></td>
                                            <td class="text-center"><span>28/31</span></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-4">
            <div class="row">
                <div class="col-xl-12 col-md-6">
                    <div class="card h-auto">
                        <div class="card-header pb-0 border-0">
                            <h4 class="heading mb-0">Attendance</h4>
                            <select class="default-select status-select normal-select">
                                <option value="Today">All Time</option>
                                <option value="Week">Week</option>
                                <option value="Month">Month</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div id="projectChart" class="project-chart"></div>
                            <div class="project-date">
                                <div class="project-media">
                                    <p class="mb-0">
                                        <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.5" width="12" height="12" rx="3" fill="var(--primary)"/>
                                        </svg>
                                        Completed Projects
                                    </p>
                                    <span>125 Projects</span>
                                </div>
                                <div class="project-media">
                                    <p class="mb-0">
                                        <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.5" width="12" height="12" rx="3" fill="#3AC977"/>
                                        </svg>
                                        Progress Projects
                                    </p>
                                    <span>125 Projects</span>
                                </div>
                                <div class="project-media">
                                    <p class="mb-0">
                                        <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.5" width="12" height="12" rx="3" fill="#FF5E5E"/>
                                        </svg>
                                        Cancelled
                                    </p>
                                    <span>125 Projects</span>
                                </div>
                                <div class="project-media">
                                    <p class="mb-0">
                                        <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.5" width="12" height="12" rx="3" fill="#FF9F00"/>
                                        </svg>
                                        Yet to Start
                                    </p>
                                    <span>125 Projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="heading mb-0">Upcoming Holidays</h4>
                        </div>
                        <div class="card-body schedules-cal p-2">
                            <input type="text" class="form-control d-none" id="datetimepicker1">
                            <div class="events">
                                <h6>events</h6>
                                <div class="dz-scroll event-scroll">
                                    <div class="event-media">
                                        <div class="d-flex align-items-center">
                                            <div class="event-box">
                                                <h5 class="mb-0">20</h5>
                                                <span>Mon</span>
                                            </div>
                                            <div class="event-data ms-2">
                                                <h5 class="mb-0">Development planning</h5>
                                                <span>w3it Technologies</span>
                                            </div>
                                        </div>
                                        <span class="text-secondary">12:05 PM</span>
                                    </div>
                                    <div class="event-media">
                                        <div class="d-flex align-items-center">
                                            <div class="event-box">
                                                <h5 class="mb-0">21</h5>
                                                <span>Wed</span>
                                            </div>
                                            <div class="event-data ms-2">
                                                <h5 class="mb-0">W3CRM planning</h5>
                                                <span>Dexignzone Technologies</span>
                                            </div>
                                        </div>
                                        <span class="text-secondary">12:05 PM</span>
                                    </div>
                                    <div class="event-media">
                                        <div class="d-flex align-items-center">
                                            <div class="event-box">
                                                <h5 class="mb-0">20</h5>
                                                <span>Mon</span>
                                            </div>
                                            <div class="event-data ms-2">
                                                <h5 class="mb-0">Development planning</h5>
                                                <span>w3it Technologies</span>
                                            </div>
                                        </div>
                                        <span class="text-secondary">12:05 PM</span>
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
@endsection
@push('modals')
<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
<div class="offcanvas-header">
<h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
    <i class="fa-solid fa-xmark"></i>
</button>
</div>
<div class="offcanvas-body">
<div class="container-fluid">
    <div>
        <label>Profile Picture</label>
        <div class="dz-default dlab-message upload-img mb-3">
            <form action="#" class="dropzone">
                @csrf
                <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="fallback">
                    <input name="file" type="file" multiple>

                </div>
            </form>
        </div>
    </div>
    <form>
        @csrf
        <div class="row">
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Designation<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">Software Engineer</option>
                    <option value="css">Civil Engineer</option>
                    <option value="javascript">Web Doveloper</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Department<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">Software</option>
                    <option value="css">Doit</option>
                    <option value="javascript">Designing</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Country<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">Ind</option>
                    <option value="css">USA</option>
                    <option value="javascript">UK</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Gender<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">Male</option>
                    <option value="css">Female</option>
                    <option value="javascript">Other</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="exampleFormControlInput99">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="exampleFormControlInput8">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Language Select<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">English</option>
                    <option value="css">Hindi</option>
                    <option value="javascript">Canada</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">User Role<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Please select</option>
                    <option value="html">Parmanent</option>
                    <option value="css">Parttime</option>
                    <option value="javascript">Per Hours</option>
                </select>
            </div>
            <div class="col-xl-12 mb-3">
                <label class="form-label">Address<span class="text-danger">*</span></label>
                <textarea rows="3" class="form-control"></textarea>
            </div>
            <div class="col-xl-12 mb-3">
                <label class="form-label">About<span class="text-danger">*</span></label>
                <textarea rows="3" class="form-control"></textarea>
            </div>
        </div>
        <div>
            <button class="btn btn-danger light ms-1">Cancel</button>
            <button class="btn btn-primary me-1">Submit</button>
        </div>
    </form>
    </div>
</div>
</div>
<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
<div class="offcanvas-header">
<h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
    <i class="fa-solid fa-xmark"></i>
</button>
</div>
<div class="offcanvas-body">
<div class="container-fluid">
    <form>
        @csrf
        <div class="row">
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Project<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Project</option>
                    <option value="html">Salesmate</option>
                    <option value="css">ActiveCampaign</option>
                    <option value="javascript">Insightly</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="exampleFormControlInputthree">
            </div>
            <div class="col-xl-6 mb-3">
                <label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="exampleFormControlInputfour">
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                class="fas fa-clock"></i></span>
                </div>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Status<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Status</option>
                    <option value="html">In Progess</option>
                    <option value="css">Pending</option>
                    <option value="javascript">Completed</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">priority<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">priority</option>
                    <option value="html">Hight</option>
                    <option value="css">Medium</option>
                    <option value="javascript">Low</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Category<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Category</option>
                    <option value="html">Designing</option>
                    <option value="css">Development</option>
                    <option value="javascript">react developer</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Permission<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Permission</option>
                    <option value="html">Public</option>
                    <option value="css">Private</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Deadline add<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Deadline</option>
                    <option value="html">Yes</option>
                    <option value="css">No</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Assigned to<span class="text-danger">*</span></label>
                <select class="default-select style-1 form-control">
                    <option  data-display="Select">Assigned</option>
                    <option value="html">Bernard</option>
                    <option value="css">Sergey Brin</option>
                    <option value="javascript"> Larry Ellison</option>
                </select>
            </div>
            <div class="col-xl-6 mb-3">
                <label class="form-label">Responsible Person<span class="text-danger">*</span></label>
                <input name='tagify' class="form-control py-0 ps-0 h-auto" value='James, Harry'>

            </div>
            <div class="col-xl-12 mb-3">
                <label class="form-label">Description<span class="text-danger">*</span></label>
                <textarea rows="3" class="form-control"></textarea>
            </div>
            <div class="col-xl-12 mb-3">
                <label class="form-label">Summary<span class="text-danger">*</span></label>
                <textarea rows="3" class="form-control"></textarea>
            </div>

        </div>
        <div>
            <button class="btn btn-danger light ms-1">Cancel</button>
            <button class="btn btn-primary me-1">Help Desk</button>
        </div>
    </form>
    </div>
</div>
</div>

<!-- Modal-start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Attendance</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xl-12">
                    <label class="form-label">Employee<span class="text-danger">*</span></label>
                    <select class="default-select form-control">
                        <option  data-display="Select">Please select</option>
                        <option value="html">Julia Koch</option>
                        <option value="css">Gina Reinhart</option>
                        <option value="javascript">Yang Huiyan</option>
                    </select>
                    <label class="form-label mt-3">Attendance Date<span class="text-danger">*</span></label>
                    <input class="form-control" type="date">
                    <div class="row">
                        <div class="col-xl-6">
                            <label class="form-label mt-3">In Time<span class="text-danger">*</span></label>
                            <div class="input-group clockpicker">
                                <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                            class="fas fa-clock"></i></span>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label mt-3">Out Time<span class="text-danger">*</span></label>
                            <div class="input-group clockpicker">
                                <input type="text" class="form-control" value="10:30"><span class="input-group-text"><i
                                            class="fas fa-clock"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-xl-12">
                    <label class="form-label">Email ID<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="hello@gmail.com">
                    <label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
                    <input class="form-control" type="date">
                    <div class="row">
                        <div class="col-xl-6">
                            <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Surname">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 invite">
                        <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                        <input type ="email" class="form-control " placeholder="+ invite">
                    </div>


                </div>
            </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>
@endpush
