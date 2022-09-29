@extends('backend_master')
@section('title')
    {{ "M Kamrul Tours & Travels" }}
@endsection
@section('backend_content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">M Kamrul Tours & Travels</a>
        <span class="breadcrumb-item active">Balance</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5 text-center">My Balance</h4>
    </div>
    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <div class="img" style="text-align:center; margin-bottom:10px">
            <img width="500" height="200px" src="{{ asset('assets/img/logo_3.png') }}" alt="">
        </div>
        <div class="bd bd-gray-300 rounded table-responsive">
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th>Name Of Month</th>
                <th>Ticket Sell</th>
                <th>Total Sell Amount</th>
                <th>Total Profit On Sell</th>
                <th>Expense Field</th>
                <th>Expense Amount</th>
                <th>Profit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-success tx-22">January</th>
                <td>4 p</td>
                <td>1200</td>
                <td>100</td>
                <td>320,800</td>
                <td>40,800</td>
                <td>45,534</td>
              </tr>
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
