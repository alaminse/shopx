@extends('admin.app')

@section('backend_title', $data['page_title'])
@section('content')
    <!-- start page title -->
    @include('admin.includes.page_title')
    <div id="instructorList">

        <div class="row">
            <div class="col-xxl-2 col-sm-6">
                <div class="card card-height-100">
                    <div class="card-body text-center">
                        <div id="total_instructors" data-colors='["--tb-primary"]' class="apex-charts radialbar-chart-effect-primary" dir="ltr"></div>
                        <h5 class="card-title mt-3">Total Instructors</h5>
                        <p class="text-muted mb-0"><span class="text-success"><i class="ph ph-trend-up align-middle me-1"></i> 07.78%</span> than last week</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-2 col-sm-6">
                <div class="card card-height-100">
                    <div class="card-body text-center">
                        <div id="total_courses" data-colors='["--tb-secondary"]' class="apex-charts radialbar-chart-effect-secondary" dir="ltr"></div>
                        <h5 class="card-title mt-3">Total Courses</h5>
                        <p class="text-muted mb-0"><span class="text-danger"><i class="ph ph-trend-down align-middle me-1"></i> 01.39%</span> than last week</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="h6 card-title flex-grow-1 mb-0">Instructor Activity</div>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-subtle-secondary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div>
                    <div class="card-body ps-2">
                        <div id="instuctor_activity" data-colors='["--tb-primary", "--tb-light", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center g-2">
                            <div class="col-lg-3 me-auto">
                                <h6 class="card-title mb-0">Placed Order<span class="badge bg-primary ms-1 align-baseline">235</span></h6>
                            </div><!--end col-->
                            <div class="col-xl-2 col-lg-3 col-sm-10">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search for instructors, email, contact number or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div><!--end col-->

                        </div>
                    </div>
                    <div class="card-body mt-3">
                        <div class="table-responsive table-card">
                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>

                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor_id">Order SL</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor_id">Date</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor">Product</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="courses_total">Name</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Phone</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="experience">Order ID</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="students">Price</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="contact">Shipping</th>

                                        <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>

                                        <td class="courses_total">001</td>
                                        <td class="courses_total">10-12-20223</td>
                                        <td class="instructor">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xxs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="text-reset">Man Wallets Cowhide</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="courses_total">Rimon Rahman</td>
                                        <td class="email">01674803314</td>
                                        <td class="experience">1592</td>
                                        <td class="students">1580</td>
                                        <td class="contact">Free </td>





                                        <td class="status"><span class="badge bg-danger">Order Placed</span></td>
                                        <td>
                                            <ul class="d-flex gap-2 list-unstyled mb-0">
                                                <li>
                                                    <a href="#addCourse" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                            <div class="noresult" style="display: none">
                                <div class="text-center py-4">
                                    <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 164+ instructors We did not find any instructors for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                            <div class="col-sm">
                                <div class="text-muted text-center text-sm-start">

                                </div>
                            </div><!--end col-->
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <div class="pagination-wrap hstack justify-content-center gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascript:void(0)">
                                        Next
                                    </a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

    </div>

@endsection
