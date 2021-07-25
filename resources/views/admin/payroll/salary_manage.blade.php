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
                                            <h4 class="header-title">Currency</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <select class="form-select" name="currency" id="currency"
                                                                required>
                                                                <option value="USD">USD</option>
                                                                <option value="ZWL">ZWL</option>
                                                            </select>
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
                                            <h4 class="header-title">Pay Duration</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <select class="form-select" name="payDuration" id="payDuration"
                                                                required>
                                                                <option value="daily">DAILY</option>
                                                                <option value="weekly">WEEKLY</option>
                                                                <option value="fortnightly">FORTNIGHTLY</option>
                                                                <option value="monthly">MONTHLY</option>
                                                                <option value="annual">ANNUAL</option>
                                                            </select>
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
                                            <h4 class="header-title">Salary Range</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="input-types-preview">
                                                    <div class="row">
                                                        <div class="mt-3">
                                                            <select class="form-select" name="salaryRange" id="salaryRange"
                                                                required>
                                                                <option value="1">$0.00 - $328.77</option>
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

        console.log("mqo");


        function calculation() {
            var sum = 0;
            var _currency = document.getElementById("currency");
            var currency = _currency.value;

            var _payDuration = document.getElementById("payDuration");
            var payDuration = _payDuration.value;

            console.log(currency);
            console.log(payDuration);

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


            //ZWL payee

            if (currency == "ZWL" && payDuration == "daily") {

                var rate;
                var amount;

                if (-100000000000000000 < +basic_salary && +basic_salary < 328.77) {
                    rate = 0;
                    amount = 0;
                } else if (328.78 < +basic_salary && +basic_salary < 986.30) {
                    rate = 20;
                    amount = 65.75;
                } else if (986.31 < +basic_salary && +basic_salary < 1972.60) {
                    rate = 25;
                    amount = 115.07;
                } else if (1972.61 < +basic_salary && +basic_salary < 3945.21) {
                    rate = 30;
                    amount = 213.70;
                } else if (3945.22 < +basic_salary && +basic_salary < 8219.18) {
                    rate = 35;
                    amount = 410.96;
                } else if (8219.19 < +basic_salary) {
                    rate = 40;
                    amount = 821.92;
                } else {
                    console.log("pakaipa");

                }

                var paye = $("#paye").val();

                console.log(rate);
                console.log(amount);
                var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
                $("#paye_val").val(paye_val);

            } else if (currency == "ZWL" && payDuration == "weekly") {
                var rate;
                var amount;

                if (-1000000000000000000 < +basic_salary && +basic_salary < 2307.69) {
                    rate = 0;
                    amount = 0;
                } else if (2307.70 < +basic_salary && +basic_salary < 6923.08) {
                    rate = 20;
                    amount = 461.54;
                } else if (6923.09 < +basic_salary && +basic_salary < 13846.15) {
                    rate = 25;
                    amount = 807.69;
                } else if (13846.16 < +basic_salary && +basic_salary < 27692.31) {
                    rate = 30;
                    amount = 1500.00;
                } else if (27692.32 < +basic_salary && +basic_salary < 27692.32) {
                    rate = 35;
                    amount = 2884.62;
                } else if (57692.32 < +basic_salary) {
                    rate = 40;
                    amount = 5769.23;
                } else {
                    console.log("pakaipa");

                }

                var paye = $("#paye").val();

                console.log(rate);
                console.log(amount);
                var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
                $("#paye_val").val(paye_val);

            } else if (currency == "ZWL" && payDuration == "fortnightly") {
                var rate;
                var amount;

                if (-1000000000000000000 < +basic_salary && +basic_salary < 4615.38 ) {
                    rate = 0;
                    amount = 0;
                } else if (4615.39 < +basic_salary && +basic_salary < 13846.15) {
                    rate = 20;
                    amount = 923.08 ;
                } else if (13846.16  < +basic_salary && +basic_salary < 27692.31) {
                    rate = 25;
                    amount = 1615.38;
                } else if (27692.32 < +basic_salary && +basic_salary < 55384.62) {
                    rate = 30;
                    amount = 3000.00;
                } else if (55384.63 < +basic_salary && +basic_salary < 115384.62 ) {
                    rate = 35;
                    amount = 5769.23;

                } else if (115384.63 < +basic_salary) {
                    rate = 40;
                    amount = 11538.46;
                } else {
                    console.log("pakaipa");

                }

                var paye = $("#paye").val();

                console.log(rate);
                console.log(amount);
                var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
                $("#paye_val").val(paye_val);

            } else if (currency == "ZWL" && payDuration == "monthly") {
                var rate;
                var amount;

                if (-1000000000000000000 < +basic_salary && +basic_salary < 4615.38 ) {
                    rate = 0;
                    amount = 0;
                } else if (4615.39 < +basic_salary && +basic_salary < 13846.15) {
                    rate = 20;
                    amount = 461.54;
                } else if (13846.16  < +basic_salary && +basic_salary < 27692.31) {
                    rate = 25;
                    amount = 807.69;
                } else if (27692.32 < +basic_salary && +basic_salary < 55384.62) {
                    rate = 30;
                    amount = 1500.00;
                } else if (55384.63 < +basic_salary && +basic_salary < 115384.62 ) {
                    rate = 35;
                    amount = 2884.62;

                } else if (115384.63 < +basic_salary) {
                    rate = 40;
                    amount = 5769.23;
                } else {
                    console.log("pakaipa");

                }

                var paye = $("#paye").val();

                console.log(rate);
                console.log(amount);
                var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
                $("#paye_val").val(paye_val);

            } else {
                console.log("hie zwl");
            }

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
