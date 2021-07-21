@extends('app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">
            <div class="content-page">
                <div class="content">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Salary</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Manage</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Salary</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form class="row" method="POST" action="/salary">
                        @csrf
                        <div class="col-12">
                            @if (session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <h4 class="header-title">Employee Name</h4>
                                                            <select class="form-select" name="employee_id"
                                                                id="inputGroupSelect04"
                                                                aria-label="Example select with button addon" required>
                                                                @forelse ($employees as $employee)
                                                                    <option value="{{ $employee->id }}">
                                                                        {{ $employee->first_name }}
                                                                        {{ $employee->last_name }}
                                                                    </option>
                                                                @empty
                                                                    <option value="">Currently no employees</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="mt-3">
                                                            <select class="form-select" id="inputGroupSelect04"
                                                                aria-label="Example select with button addon">
                                                                <option selected="">Employee Type</option>
                                                                @forelse ($employee_types as $employee_type)
                                                                    <option value="{{ $employee_type->id }}">
                                                                        {{ $employee_type->name }}</option>
                                                                @empty
                                                                    <option value="">Currently no users</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- end row-->
                                                </div> <!-- end preview-->
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Basic Salary</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <input type="number" class="form-control" name="basic_salary"
                                                                id="basic_salary" placeholder="Basic Salary">
                                                        </div>
                                                    </div>
                                                    <!-- end row-->
                                                </div> <!-- end preview-->
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div><!-- end col -->

                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Basic Salary</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <input type="number" size="25dp" class="form-control"
                                                                name="net_salary">
                                                        </div>
                                                    </div>
                                                    <!-- end row-->
                                                </div> <!-- end preview-->
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="header-title mt-5 mt-lg-0">Allowances </h4>

                                            <div class="mt-3">
                                                <label>House Rent Allowance</label>
                                                <input type="number" class="form-control" name="house_rent_allowance"
                                                    id="house_rent_allowance">
                                            </div>

                                            <div class="mt-3">
                                                <label>Medical Allowance</label>
                                                <input type="number" class="form-control" id="medical_allowance"
                                                    name="medical_allowance">
                                            </div>

                                            <div class="mt-3">
                                                <label>Special Allowance</label>
                                                <input type="number" class="form-control" id="special_allowance"
                                                    name="special_allowance">
                                            </div>

                                            <div class="mt-3">
                                                <label>Provident Fund Contribution</label>
                                                <input type="number" class="form-control" id="provident_fund_contribution"
                                                    name="provident_fund_contribution" value="0.00">
                                            </div>

                                            <div class="mt-3">
                                                <label>Other Allowance</label>
                                                <input type="number" class="form-control" id="other_allowance"
                                                    name="other_allowance">
                                            </div>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <h4 class="header-title mt-5 mt-lg-0">Deductions </h4>

                                            <input type="hidden" name="paye" id="paye" value="{{ $paye }}">
                                            <input type="hidden" name="pension" id="pension" value="{{ $pension }}">
                                            <input type="hidden" name="nassa" id="nassa" value="{{ $nassa }}">
                                            <input type="hidden" name="zero_payee" id="zero_payee"
                                                value="{{ $zero_payee }}">
                                            <input type="hidden" name="period_earning" id="period_earning"
                                                value="{{ $period_earning }}">

                                            <div class="mt-3">
                                                <label>Paye Deduction</label>
                                                <input type="number" class="form-control" id="paye_val" name="paye_val"
                                                    readonly>
                                            </div>

                                            <div class="mt-3">
                                                <label>Pension Deduction</label>
                                                <input type="number" class="form-control" id="pension_val"
                                                    name="pension_val" readonly>
                                            </div>

                                            <div class="mt-3">
                                                <label>NSSA Deduction</label>
                                                <input type="number" class="form-control" id="nassa_val" name="nassa_val"
                                                    readonly>
                                            </div>

                                            <div class="mt-3">
                                                <label>Zero Paye Deduction</label>
                                                <input type="number" class="form-control" id="zero_payee_val"
                                                    name="zero_payee_val" readonly>
                                            </div>

                                            <div class="mt-3">
                                                <label>Period Earning Deductions</label>
                                                <input type="number" class="form-control" id="period_earning_val"
                                                    name="period_earning_val" readonly>
                                            </div>
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Total Salary</h4>

                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <label>Gross Salary</label>
                                                            <input type="number" class="form-control" id="gross_salary"
                                                                name="gross_salary" readonly>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label>Total Deduction</label>
                                                            <input type="number" class="form-control" id="total_deduction"
                                                                name="total_deduction" readonly>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label>Net Salary</label>
                                                            <input type="number" class="form-control" id="net_salary"
                                                                name="net_salary" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="box-footer mt-3">
                                                        <button type="submit" class="btn btn-primary btn-flat pull-right"><i
                                                                class=" uil-file-check-alt"></i>{{ 'Save Details' }}</button>
                                                    </div>

                                                    <!-- end row-->
                                                </div> <!-- end preview-->
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </form>
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

            </div> <!-- content-page -->

        </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->


    <script type="text/javascript">
        setInterval(function() {
            calculation();
        }, 1);

        function calculation() {
            var sum = 0;
            var basic_salary = $("#basic_salary").val();

            var paye = $("#paye").val();
            var paye_val = (+basic_salary * +paye);
            $("#paye_val").val(paye_val);

            var pension = $("#pension").val();
            var pension_val = (+basic_salary * +pension);
            $("#pension_val").val(pension_val);

            var nassa = $("#nassa").val();
            var nassa_val = (+basic_salary * +nassa);
            $("#nassa_val").val(nassa_val);

            var zero_payee = $("#zero_payee").val();
            var zero_payee_val = (+basic_salary * +zero_payee);
            $("#zero_payee_val").val(zero_payee_val);

            var period_earning = $("#period_earning").val();
            var period_earning_val = (+basic_salary * +period_earning);
            $("#period_earning_val").val(period_earning_val);

            var house_rent_allowance = $("#house_rent_allowance").val();
            var medical_allowance = $("#medical_allowance").val();
            var special_allowance = $("#special_allowance").val();
            var provident_fund_contribution = $("#provident_fund_contribution").val();
            var provident_fund = $("#provident_fund").val();
            var other_allowance = $("#other_allowance").val();
            var tax_deduction = $("#tax_deduction").val();
            var provident_fund_deduction = $("#provident_fund_deduction").val();
            var other_deduction = $("#other_deduction").val();

            var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +
                other_allowance + +provident_fund_contribution);

            var total_deduction = (+paye_val + +pension_val + +nassa_val + +zero_payee_val + +period_earning_val);

            $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);

            $("#gross_salary").val(gross_salary);
            $("#total_deduction").val(total_deduction);
            $("#net_salary").val(+gross_salary - +total_deduction);
        }
    </script>
@endsection