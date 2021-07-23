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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Administrator</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Settings</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form class="row" method="POST" action="/settings">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-5 mt-lg-0">Deductions Rates</h4>
                                        @foreach ($settings as $setting)
                                            <div class="mt-3">
                                                <label>Paye Deduction Rate</label>
                                                <input type="text" class="form-control" name="paye"
                                                    value="{{ $setting->paye }}">
                                            </div>
                                            <div class="mt-3">
                                                <label>Pension Deduction Rate</label>
                                                <input type="text" class="form-control" name="pension"
                                                    value="{{ $setting->pension }}">
                                            </div>
                                            <div class="mt-3">
                                                <label>NASSA Deduction Rate</label>
                                                <input type="text" class="form-control" name="nassa"
                                                    value="{{ $setting->nassa }}">
                                            </div>
                                            <div class="mt-3">
                                                <label>Zero Paye Deduction Rate</label>
                                                <input type="text" class="form-control" name="zero_payee"
                                                    value="{{ $setting->zero_payee }}">
                                            </div>
                                            <div class="mt-3">
                                                <label>Period Earning Deductions</label>
                                                <input type="text" class="form-control" name="period_earning"
                                                    value="{{ $setting->period_earning }}">
                                            </div>
                                        @endforeach
                                        <div class="box-footer mt-3">
                                            <button type="submit" class="btn btn-primary btn-flat pull-right"><i
                                                    class=" uil-file-check-alt"></i> Save Details</button>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
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
        // For Kepp Data After Reload
        {{-- document.forms['employee_select_form'].elements['user_id'].value = "{{ $employee->id }}"; --}}

        @if (!empty(old('employee_type')))
            document.forms['employee_salary_form'].elements['employee_type'].value = "{{ old('employee_type') }}";
        @endif

        $(document).ready(function() {
            calculation();
        });


        //For Calculation
        $(document).on("keyup", "#employee_salary_form", function() {
            calculation();
        });

        function calculation() {
            var sum = 0;
            var basic_salary = $("#basic_salary").val();
            var house_rent_allowance = $("#house_rent_allowance").val();
            var medical_allowance = $("#medical_allowance").val();
            var special_allowance = $("#special_allowance").val();
            var provident_fund_contribution = $("#provident_fund_contribution").val();
            var other_allowance = $("#other_allowance").val();
            var tax_deduction = $("#tax_deduction").val();
            var provident_fund_deduction = $("#provident_fund_deduction").val();
            var other_deduction = $("#other_deduction").val();

            var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +
                other_allowance);

            var total_deduction = (+tax_deduction + +provident_fund_deduction + +other_deduction);

            $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);

            $("#gross_salary").val(gross_salary);
            $("#total_deduction").val(total_deduction);
            $("#net_salary").val(+gross_salary - +total_deduction);
        }
    </script>
@endsection
