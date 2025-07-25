@extends('layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">Task</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Task</a></li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">Tasks Summary</h5>
            <div class="d-flex align-items-center">
                <div class="icon-box  icon-box-sm task-tab me-2">
                    <a href="{{ url('task-summary') }}">
                        <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.50032 3H2.66699V8.83333H8.50032V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.6668 3H11.8335V8.83333H17.6668V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.6668 12.1667H11.8335V18H17.6668V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.50032 12.1667H2.66699V18H8.50032V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Task</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row task">
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-primary count">8</h2>
                                        <span>Not Started</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-purple count">7</h2>
                                        <span>In Progress</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-warning count">13</h2>
                                        <span>Testing</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-danger count">11</h2>
                                        <span>Awaiting</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-success count">21</h2>
                                        <span>Complete</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-danger count">16</h2>
                                        <span>pending</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Task</h4>
                            </div>
                            <table id="empoloyeestbl2" class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required>
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Assigned To</th>
                                        <th>Tags</th>
                                        <th class="text-end">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required>
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </td>
                                        <td><span>03</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>Create Frontend WordPress</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required>
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </td>
                                        <td><span>04</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>HTML To React Convert </h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox5" required>
                                                <label class="form-check-label" for="customCheckBox5"></label>
                                            </div>
                                        </td>
                                        <td><span>05</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>HTML template Issue Complete</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic1.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required>
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </td>
                                        <td><span>06</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>Complete Admin Dashboard Project</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="progress">In Progress</option>
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic1.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="Low">Low</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required>
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </td>
                                        <td><span>07</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>Create Frontend WordPress</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required>
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </td>
                                        <td><span>08</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>HTML To React Convert </h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox9" required>
                                                <label class="form-check-label" for="customCheckBox9"></label>
                                            </div>
                                        </td>
                                        <td><span>09</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>HTML template Issue Complete</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic1.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox10" required>
                                                <label class="form-check-label" for="customCheckBox10"></label>
                                            </div>
                                        </td>
                                        <td><span>10</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>Complete Admin Dashboard Project</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="progress">In Progress</option>
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic1.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="Low">Low</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" required>
                                                <label class="form-check-label" for="customCheckBox11"></label>
                                            </div>
                                        </td>
                                        <td><span>11</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>Create Frontend WordPress</h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="testing">Testing</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="Medium">Medium</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox12" required>
                                                <label class="form-check-label" for="customCheckBox12"></label>
                                            </div>
                                        </td>
                                        <td><span>12</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>HTML To React Convert </h6>
                                                    <span>INV-100023456</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select class="default-select status-select">
                                                <option value="testing">Testing</option>
                                                <option value="complete">Complete</option>
                                                <option value="pending">Pending</option>
                                                <option value="progress">In Progress</option>
                                            </select>
                                        </td>
                                        <td><span>06 Feb 2023</span></td>
                                        <td>
                                            <span>19 Feb 2023</span>
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic555.jpg')}}" class="avatar rounded-circle" alt="">
                                                <img src="{{asset('images/contacts/pic666.jpg')}}" class="avatar rounded-circle" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary light border-0 me-1">Issue</span>
                                            <span class="badge badge-primary light border-0 ms-1">HTML</span>
                                        </td>
                                        <td class="text-end">
                                            <select class="default-select status-select">
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {

      var counters = $(".count");
      var countersQuantity = counters.length;
      var counter = [];

      for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
      }

      var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
          if (localStart < value) {
            localStart++;
            counters[id].innerHTML = localStart;
          }
        }, 500);
      }

      for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
      }
    });
</script>
@endpush
@push('modals')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="'col-xl-12">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title Name">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Contacts<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="+910213598458">
                  </div>
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
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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

