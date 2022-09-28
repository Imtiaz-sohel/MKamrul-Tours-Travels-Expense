@extends('backend_master')
@section('all_ex_active')
    active
@endsection
@section('title')
    {{ "Expenses" }}
@endsection
@section('backend_content')
<style>
    .total_style{
        color: #343a40;
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
    }
    .g_total_style{
        color: #d50a0a;
        font-size: 20px;
        font-weight: bolder;
        text-transform: uppercase;
    }
</style>
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
            <a style="color:#343a40; font-size:1.1rem; margin-left:20px" href="{{ route('addExpenseList') }}"
               class="tx-18"><i class="fa fa-plus"></i> Add Expense</a>
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
                    <table class="table table-bordered">
                        <tr>
                            <th>Month</th>
                            <th>Field Of Expense</th>
                            <th>Expense Amount</th>
                        </tr>
                        @php
                            $grandTotal = 0;
                        @endphp
                        @foreach ($user_info as $key=>  $data)
                            @php
                                $total = 0;
                            @endphp
                            <tr class="bg-info text-white">
                                <td colspan="5">{{  $key }}</td>
                                <td colspan="5"> <a href="#" class="btn btn-outline-danger text-white">Delete</a></td>
                            </tr>
                            @foreach ($data as $keyExpense=>  $expense)
                                @php
                                    $total += $expense->expense_amount;
                                @endphp
                                <tr>
                                    <td style="border-bottom: 0px;"></td>
                                    <td >{{ $expense->expense_field }}</td>
                                    <td colspan="2">{{ $expense->expense_amount }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            <tr class="">
                                <td></td>
                                <td><span class="total_style">Total</span></td>
                                <td colspan="4"><span class="total_style">{{  $total }}.00</span></td>
                            </tr>
                            @php
                                $grandTotal += $total;
                            @endphp
                        @endforeach
                        <tr>
                            <td colspan="2"><span class="g_total_style">Grand Total</span></td>
                            <td><span class="g_total_style">{{ $grandTotal }}.00</span></td>
                        </tr>
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
