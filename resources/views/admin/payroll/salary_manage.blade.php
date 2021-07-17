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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Employee Name</h4>

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                <option selected="">Choose Employee</option>
                                                @forelse ($employees as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->first_name}} {{ $employee->last_name }}</option>
                                                @empty
                                                <option value="">Currently no users</option>
                                                @endforelse
                                            </select>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary" style="width: 20%">Choose</button>
                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <form class="row" method="POST" action="/salary">
                    @csrf

                    <input type="hidden" name="id" value="{{ $employee->id }}">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Salary details</h4>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="input-types-preview">
                                            <div class="row">
                                                <div class="mt-3">
                                                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected="">Employee Type</option>
                                                        @forelse ($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->first_name}} {{ $employee->last_name }}</option>
                                                        @empty
                                                        <option value="">Currently no users</option>
                                                        @endforelse
                                                    </select>
                                                </div>
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
                                        <input type="number" class="form-control" name="house_rent_allowance"  id="house_rent_allowance" value="{{ old('house_rent_allowance') }}">
                                    </div>

                                    <div class="mt-3">
                                        <label>Medical Allowance</label>
                                        <input type="number" class="form-control" id="medical_allowance" name="medical_allowance" value="{{ old('medical_allowance') }}">
                                    </div>

                                    <div class="mt-3">
                                        <label>Special Allowance</label>
                                        <input type="number" class="form-control" id="special_allowance" name="special_allowance" value="{{ old('special_allowance') }}">
                                    </div>

                                    <div class="mt-3">
                                        <label>Provident Fund Contribution</label>
                                        <input type="number" class="form-control" id="provident_fund_contribution" name="provident_fund_contribution" value="{{ old('provident_fund_contribution') }}">
                                    </div>

                                    <div class="mt-3">
                                        <label>Other Allowance</label>
                                        <input type="number" class="form-control" id="other_allowance" name="other_allowance" value="{{ old('other_allowance') }}">
                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mt-5 mt-lg-0">Deductions </h4>


                                    <div class="mt-3">
                                        <label>Paye Deduction</label>
                                        <input type="number" class="form-control">
                                    </div>

                                    <div class="mt-3">
                                        <label>Pension Deduction</label>
                                        <input type="number" class="form-control">
                                    </div>

                                    <div class="mt-3">
                                        <label>NSSA Deduction</label>
                                        <input type="number" class="form-control">
                                    </div>

                                    <div class="mt-3">
                                        <label>Zero Paye Deduction</label>
                                        <input type="number" class="form-control">
                                    </div>

                                    <div class="mt-3">
                                        <label>Period Earning Deductions</label>
                                        <input type="number" class="form-control">
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
                                                    <input type="number" class="form-control" id="gross_salary" readonly>
                                                </div>
                                                <div class="mt-3">
                                                    <label>Total Deduction</label>
                                                    <input type="number" class="form-control" id="total_deduction" readonly>
                                                </div>
                                                <div class="mt-3">
                                                    <label>Net Salary</label>
                                                    <input type="number" class="form-control" id="net_salary" readonly>
                                                </div>
                                            </div>

                                            <div class="box-footer mt-3">
                                                <button type="submit" class="btn btn-primary btn-flat pull-right"><i class=" uil-file-check-alt"></i> Save Details</button>
                                            </div>

                                            <!-- end row-->
                                        </div> <!-- end preview-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
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
    document.forms['employee_select_form'].elements['user_id'].value = "{{ $employee->id }}";
  
    @if(!empty(old('employee_type')))
    document.forms['employee_salary_form'].elements['employee_type'].value = "{{ old('employee_type') }}";
    @endif
  
    $(document).ready(function(){
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
  
      var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +other_allowance);
  
      var total_deduction = (+tax_deduction + +provident_fund_deduction + +other_deduction);
  
      $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);
  
      $("#gross_salary").val(gross_salary);
      $("#total_deduction").val(total_deduction);
      $("#net_salary").val(+gross_salary - +total_deduction);
    }
  </script>
  @endsection