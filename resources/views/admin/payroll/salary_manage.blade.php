@extends ('app')
@section('content')
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
                            {{ session()-> get('message')}}
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
                                                        <select class="form-select" name="employee_id" id="inputGroupSelect04" aria-label="Example select with button addon" required>
                                                            @forelse ($employees as $employee)
                                                            <option value="{{ $employee->id }}">
                                                                {{ $employee-> first_name}}
                                                                {{ $employee-> last_name}}
                                                            </option>
                                                            @empty
                                                            <option value="">Currently no employees</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                            <option selected="">Employee Type</option>
                                                            @forelse ($employee_types as $employee_type)
                                                            <option value="{{ $employee_type->id }}">
                                                                {{ $employee_type-> name}}
                                                            </option>
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
                                        <h4 class="header-title">Currency</h4>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="mt-3">
                                                        <select class="form-select" name="currency" id="currency" required>
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
                                                        <select class="form-select" name="payDuration" id="payDuration" required>
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

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Salary</h4>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="input-types-preview">
                                                <div class="row">
                                                    <div class="mt-3">
                                                        <input type="number" class="form-control" name="basic_salary" id="basic_salary" placeholder="Basic Salary">
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
                                            <input type="number" class="form-control" name="house_rent_allowance" id="house_rent_allowance">
                                        </div>

                                        <div class="mt-3">
                                            <label>Medical Allowance</label>
                                            <input type="number" class="form-control" id="medical_allowance" name="medical_allowance">
                                        </div>

                                        <div class="mt-3">
                                            <label>Special Allowance</label>
                                            <input type="number" class="form-control" id="special_allowance" name="special_allowance">
                                        </div>

                                        <div class="mt-3">
                                            <label>Provident Fund Contribution</label>
                                            <input type="number" class="form-control" id="provident_fund_contribution" name="provident_fund_contribution">
                                        </div>

                                        <div class="mt-3">
                                            <label>Other Allowance</label>
                                            <input type="number" class="form-control" id="other_allowance" name="other_allowance">
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-5 mt-lg-0">Deductions </h4>

                                        <input type="hidden" name="paye" id="paye" value="{{ $paye }}">
                                        <input type="hidden" name="nassa" id="nassa" value="{{ $nassa }}">
                                        <input type="hidden" name="aids_levy" id="aids_levy" value="{{ $aids_levy }}">
                                       
                                        <div class="mt-3">
                                            <label>PAYE Deduction</label>
                                            <input type="number" class="form-control" id="paye_val" name="paye_val" readonly>
                                        </div>

                                        <div class="mt-3">
                                            <label>NASSA, Pension & other benefits Deduction</label>
                                            <input type="number" class="form-control" id="nassa_val" name="nassa_val" readonly>
                                        </div>

                                        <div class="mt-3">
                                            <label>AIDS Levy</label>
                                            <input type="number" class="form-control" id="aids_levy_val" name="aids_levy_val" readonly>
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
                                                        <input type="number" class="form-control" id="gross_salary" name="gross_salary" readonly>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label>Total Deduction</label>
                                                        <input type="number" class="form-control" id="total_deduction" name="total_deduction" readonly>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label>Net Salary</label>
                                                        <input type="number" class="form-control" id="net_salary" name="net_salary" readonly>
                                                    </div>
                                                </div>

                                                <div class="box-footer mt-3">
                                                    <button type="submit" class="btn btn-primary btn-flat pull-right"><i class=" uil-file-check-alt"></i>{{ 'Save Details' }}</button>
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

        var nassa = $("#nassa").val();
        var nassa_val = (+basic_salary * +nassa);
        $("#nassa_val").val(nassa_val);

        var aids_levy = $("#aids_levy").val();
        var aids_levy_val = (+basic_salary * +aids_levy);
        $("#aids_levy_val").val(aids_levy_val);

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

            }

            var paye = $("#paye").val();
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

            if (-1000000000000000000 < +basic_salary && +basic_salary < 4615.38) {
                rate = 0;
                amount = 0;
            } else if (4615.39 < +basic_salary && +basic_salary < 13846.15) {
                rate = 20;
                amount = 6.46 ;
            } else if (13846.16 < +basic_salary && +basic_salary < 27692.31 ) {
                rate = 25;
                amount = 13.38;
            } else if (27692.32  < +basic_salary && +basic_salary < 55384.62) {
                rate = 30;
                amount = 36.46;
            } else if (55384.63  < +basic_salary && +basic_salary < 115384.62) {
                rate = 35;
                amount = 82.62;
            } else if (115384.63 < +basic_salary) {
                rate = 40;
                amount = 151.85;
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

            if (-1000000000000000000 < +basic_salary && +basic_salary < 10000.00) {
                rate = 0;
                amount = 0;
            } else if (10000.01 < +basic_salary && +basic_salary < 30000.00) {
                rate = 20;
                amount = 2000.00;
            } else if (30000.01 < +basic_salary && +basic_salary < 260000.00) {
                rate = 25;
                amount = 3500.00;
            } else if (60000.01 < +basic_salary && +basic_salary < 120000.00) {
                rate = 30;
                amount = 6500.00;
            } else if (120000.01 < +basic_salary && +basic_salary < 250000.00) {
                rate = 35;
                amount = 12500.00;

            } else if (250000.01 < +basic_salary) {
                rate = 40;
                amount = 25000.00;
            } else {
                console.log("pakaipa");
            }

            var paye = $("#paye").val();

            console.log(rate);
            console.log(amount);
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);


        } else if (currency == "ZWL" && payDuration == "annual") {
            var rate;
            var amount;

            if (-1000000000000000000 < +basic_salary && +basic_salary < 120000.00) {
                rate = 0;
                amount = 0;
            } else if (120001 < +basic_salary && +basic_salary < 360000.00) {
                rate = 20;
                amount = 24000.00;
            } else if (360001.00 < +basic_salary && +basic_salary < 720000.00) {
                rate = 25;
                amount = 42000.00;
            } else if (720001.00 < +basic_salary && +basic_salary < 1440000.00) {
                rate = 30;
                amount = 78000.00;
            } else if (1440001.00 < +basic_salary && +basic_salary < 3000000.00) {
                rate = 35;
                amount = 150000.00;

            } else if (3000000.00 < +basic_salary) {
                rate = 40;
                amount = 300000.00;
            } else {
                console.log("pakaipa");
            }

            var paye = $("#paye").val();
            console.log(rate);
            console.log(amount);
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);








            //USD 


        } else if (currency == "USD" && payDuration == "daily") {

            var rate;
            var amount;

            if (-100000000000000000 < +basic_salary && +basic_salary < 2.30) {
                rate = 0;
                amount = 0;
            } else if (2.31 < +basic_salary && +basic_salary < 9.86) {
                rate = 20;
                amount = 0.46;
            } else if (9.87 < +basic_salary && +basic_salary < 32.88) {
                rate = 25;
                amount = 0.95;
            } else if (32.89 < +basic_salary && +basic_salary < 65.75) {
                rate = 30;
                amount = 2.60;
            } else if (65.76 < +basic_salary && +basic_salary < 98.63) {
                rate = 35;
                amount = 5.88;
            } else if (98.64 < +basic_salary) {
                rate = 40;
                amount = 10.82;
            } else {
                console.log("pakaipa");
            }

            var paye = $("#paye").val();
            console.log(rate);
            console.log(amount);
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);

        } else if (currency == "USD" && payDuration == "weekly") {
            var rate;
            var amount;

            if (-1000000000000000000 < +basic_salary && +basic_salary < 16.15) {
                rate = 0;
                amount = 0;
            } else if (16.16 < +basic_salary && +basic_salary < 69.23) {
                rate = 20;
                amount = 3.23;
            } else if (69.24 < +basic_salary && +basic_salary < 230.77) {
                rate = 25;
                amount = 6.69;
            } else if (230.78 < +basic_salary && +basic_salary < 461.54) {
                rate = 30;
                amount = 18.23;
            } else if (461.55 < +basic_salary && +basic_salary < 692.31) {
                rate = 35;
                amount = 41.31;
            } else if (692.32 < +basic_salary) {
                rate = 40;
                amount = 75.92;
            } else {
                console.log("pakaipa");
            }

            var paye = $("#paye").val();

            console.log(rate);
            console.log(amount);
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);

        } else if (currency == "USD" && payDuration == "fortnightly") {
            var rate;
            var amount;

            if (-1000000000000000000 < +basic_salary && +basic_salary < 32.31) {
                rate = 0;
                amount = 0;
            } else if (32.32 < +basic_salary && +basic_salary < 138.46) {
                rate = 20;
                amount = 6.46 ;
            } else if (138.47 < +basic_salary && +basic_salary < 461.54) {
                rate = 25;
                amount = 13.38;
            } else if (461.55  < +basic_salary && +basic_salary < 923.08 ) {
                rate = 30;
                amount = 36.46;
            } else if (923.09 < +basic_salary && +basic_salary < 1384.62) {
                rate = 35;
                amount = 82.62;
            } else if (1384.63 < +basic_salary) {
                rate = 40;
                amount = 151.85;
            } else {
                console.log("pakaipa");
            }

            var paye = $("#paye").val();

            console.log(rate);
            console.log(amount);
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);

        } else if (currency == "USD" && payDuration == "monthly") {
            var rate;
            var amount;

            if (-1000000000000000000 < +basic_salary && +basic_salary < 70.00) {
                rate = 0;
                amount = 0;
            } else if (70.01 < +basic_salary && +basic_salary < 300.00) {
                rate = 20;
                amount = 14.00;
            } else if (300.01 < +basic_salary && +basic_salary < 1000.00) {
                rate = 25;
                amount = 29.00;
            } else if (1000.01 < +basic_salary && +basic_salary < 2000.00) {
                rate = 30;
                amount = 79.00;
            } else if (2000.01 < +basic_salary && +basic_salary < 3000.00) {
                rate = 35;
                amount = 179.00;

            } else if (3000.01 < +basic_salary) {
                rate = 40;
                amount = 329.00;
            } else {}

            var paye = $("#paye").val();
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);


        } else if (currency == "USD" && payDuration == "annual") {
            var rate;
            var amount;

            if (-1000000000000000000 < +basic_salary && +basic_salary < 840.00) {
                rate = 0;
                amount = 0;
            } else if (841.00 < +basic_salary && +basic_salary < 3600.00) {
                rate = 20;
                amount = 168.00;
            } else if (3601.00 < +basic_salary && +basic_salary < 12000.00) {
                rate = 25;
                amount = 348.00;
            } else if (12001.00 < +basic_salary && +basic_salary < 24000.00) {
                rate = 30;
                amount = 948.00;
            } else if (24001.00 < +basic_salary && +basic_salary < 36000.00) {
                rate = 35;
                amount = 2148.00;

            } else if (36001 < +basic_salary) {
                rate = 40;
                amount = 3948.00;
            } else {}

            var paye = $("#paye").val();
            var paye_val = ((+basic_salary * (+rate / 100)) - +amount);
            $("#paye_val").val(paye_val);

        } else {}

        var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +
            other_allowance + +provident_fund_contribution);

        var total_deduction = (+paye_val + +nassa_val + +aids_levy_val);

        $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);

        $("#gross_salary").val(gross_salary);
        $("#total_deduction").val(total_deduction);
        $("#net_salary").val(+gross_salary - +total_deduction);
    }
</script>
@endsection