@extends('backend_master')
@section('all_ex_active')
active
@endsection
@section('title')
  {{ "Incomes" }}
@endsection
@section('backend_content')
  <div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <span class="breadcrumb-item active">All Expenses</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">All Expenses List</h4>
    </div>
    <div class="br-pagebody">
        <a style="color:#343a40; font-size:1.1rem; margin-left:20px" href="{{ route('addExpenseList') }}" class="tx-18"><i class="fa fa-plus"></i> Add Expense</a>
       <div class="br-section-wrapper">
        <div class="col-lg-6 mx-auto">
            @if (session('income_delete_message'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <strong>{{ session('income_delete_message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            </div>
        <div class="bd bd-gray-300 rounded table-responsive">
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th>Month</th>
                <th>Field Of Expense</th>
                <th>Expense Amount</th>
                <th>Total Expenses</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <th scope="row">abc</th>
                    <td>
                        <ul>
                            <li>{{ $expenses }}</li>
                            <li></li>
                            <li></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>1000</li>
                            <li>40000</li>
                            <li>1500</li>
                        </ul>
                    </td>
                    <td>100000</td>
                    <td>
                        <a href="#" class="btn btn-outline-info">Edit</a>
                        <a href="#" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div><!-- bd -->
      </div><!-- br-section-wrapper -->
    </div><!-- br-pagebody -->
    <footer class="br-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright © 2022 M Kamrul Tours & Travels. All Rights Reserved.</div>
      </div>
    </footer>
   </div>
  </div>
@endsection
