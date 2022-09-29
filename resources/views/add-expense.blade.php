@extends('backend_master')
@section('add_ex_active')
    active
@endsection
@section('title')
    {{ 'Add Expense' }}
@endsection
@section('backend_content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{ route('allExpenseList') }}">All Expenses</a>
        <span class="breadcrumb-item active">Add Expenses</span>
      </nav>
    </div>
    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <div class="col-lg-6 mx-auto">
            @if (session('expense_inset_message'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    <strong>{{ session('expense_inset_message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
         </div>
         <div class="img" style="text-align:center;margin-bottom:10px">
            <img width="500" height="200px" src="{{ asset('assets/img/logo_3.png') }}" alt="">
        </div>
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center mb-3">Add Monthy Expense</h6>
        <form action="{{ route('addExpenseListPost') }}" method="POST">
            @csrf
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-8 mx-auto">
                {{-- 1 --}}
                <div class="form-group">
                  <label class="form-control-label">Month: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="current_month" id="current_month">
                    @foreach ($allMonths as $allMonth)
                     <option value="{{ $allMonth}}">{{ $allMonth }}</option>
                    @endforeach
                  </select>
                </div>
                {{-- 2 --}}
                <div class="form-group">
                    <label class="form-control-label">Field Of Expense: <span class="tx-danger">*</span></label>
                    <select class="form-control" name="expense_field" id="current_month">
                      @foreach ($allExpenses as $allExpense)
                       <option value="{{ $allExpense }}">{{ $allExpense }}</option>
                      @endforeach
                    </select>
                  </div>
                {{-- 3 --}}
                <div class="form-group">
                  <label class="form-control-label">Expense Amount: <span class="tx-danger">*</span></label>
                  <input class="form-control @error('expense_amount') is-invalid @enderror" value="{{ old('expense_amount') }}" type="text"  name="expense_amount" placeholder="20000">
              @error('expense_amount')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
               @enderror
                </div>
              </div>
            </div>
            <div class="form-layout-footer text-center">
              <button class="btn btn-info">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <footer class="br-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright © 2022. M Kamrul Tours & Travels. All Rights Reserved.</div>
      </div>
    </footer>
  </div>
</div>
@endsection
