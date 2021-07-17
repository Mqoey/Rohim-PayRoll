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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">PayRol</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Report</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Generate Report</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-6">
                    <div class="mb-3 position-relative" id="datepicker1">
                        <label class="form-label">Start Date</label>
                        <input type="date" required class="form-control" name="start_date" data-provide="datepicker"
                            data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 position-relative" id="datepicker2">
                        <label class="form-label">End Date</label>
                        <input type="date" required class="form-control" name="start_date" data-provide="datepicker"
                            data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Period Earning Report</h5>
                            <p class="card-text">Click to generate report from the selected date. </p>
                            <a href="javascript: void(0);" class="btn btn-primary btn-sm">Generate</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h5 class="card-title">NASSA Report</h5>
                            <p class="card-text">Click to generate report from the selected date.</p>
                            <a href="javascript: void(0);" class="btn btn-primary btn-sm">Generate</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Pension Report</h5>
                            <p class="card-text">Click to generate report from the selected date. </p>
                            <a href="javascript: void(0);" class="btn btn-primary btn-sm">Generate</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Zero Paye Report</h5>
                            <p class="card-text">Click to generate report from the selected date. </p>
                            <a href="javascript: void(0);" class="btn btn-primary btn-sm">Generate</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-md-4">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Paye Report</h5>
                            <p class="card-text">Click to generate report from the selected date.</p>
                            <a href="javascript: void(0);" class="btn btn-primary btn-sm">Generate</a>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection
