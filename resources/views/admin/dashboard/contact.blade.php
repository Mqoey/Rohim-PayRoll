@extends('app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- start page title -->
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="page-title-box">
                    
                    <h4 class="page-title">Contact Us</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form class="row" method="POST" action="/contact">
                            @csrf
                            <div class="col-xl-12">
                                @if(session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('message')}}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Name</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="Enter first name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="projectname" class="form-label">Email</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Enter last name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="project-overview" class="form-label">Message</label>
                                    <textarea name="message" class="form-control" id="project-overview" rows="5" placeholder="Enter message..." required></textarea>
                                </div>

                                <div class="mb-3">
                                    <a href="" class="btn btn-info">Submit</a>
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