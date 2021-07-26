@extends('app')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Create Employee</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row" method="POST" action="/employees">
                                @csrf
                                <div class="col-xl-12">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">First Name</label>
                                                <input type="text" name="first_name" class="form-control"
                                                    placeholder="Enter first name" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Last Name</label>
                                                <input type="text" name="last_name" class="form-control"
                                                    placeholder="Enter last name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Address</label>
                                        <textarea name="address" class="form-control" id="project-overview" rows="5"
                                            placeholder="Enter some brief about project.." required></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Gender</label>
                                                <select class="form-control select2" name="gender" data-toggle="select2"
                                                    required>
                                                    <option>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Date View -->
                                    <div class="mb-3 position-relative" id="datepicker1">
                                        <label class="form-label">Id / Passport</label>
                                        <input type="text" class="form-control" name="id_passport_number" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control"
                                                    placeholder="Mobile Number" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Email Address</label>
                                                <input type="email" name="email_adderss" class="form-control"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 position-relative" id="datepicker1">
                                        <label class="form-label">Start Date</label>
                                        <input type="date" required class="form-control" name="start_date"
                                            data-provide="datepicker" data-date-container="#datepicker1"
                                            data-date-format="d-M-yyyy" data-date-autoclose="true">
                                    </div>
                                    <div class="mb-0">
                                        <label for="project-overview" class="form-label">Team Members</label>
                                        <select class="form-control select2" name="user_id" data-toggle="select2">
                                            <option>Select</option>
                                            @forelse ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->email }}</option>
                                            @empty
                                                <option value="">Currently no users</option>
                                            @endforelse
                                        </select>
                                    </div>
                                  
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
                                    </div>
                                </div> <!-- end col-->
                            </form>
                            <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

        </div> <!-- End Content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> x.developers
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="https://rohimsystemsint.co.zw">About</a>
                            <a href="https://mqographics.co.zw">Support</a>
                            <a href="/contact_us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
