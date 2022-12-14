@extends('backend_master')
@section('title')
    Edit Income Income
@endsection
@section('backend_content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="{{ route('IncomeList') }}">All Income</a>
          <span class="breadcrumb-item active">Edit Income</span>
        </nav>
      </div><!-- br-pageheader -->
    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <div class="col-lg-6 mx-auto">
        @if (session('income_update_message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{ session('income_update_message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center mb-3">Edit {{ $income_edit->current_month }} Month Income</h6>
        <form action="{{ route('updateIncomePost') }}" method="POST">
         @csrf
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-8 mx-auto">
                <input type="hidden" value="{{ $income_edit->id }}" name="income_id"
                id="income_id">
                {{-- 1 --}}
                <div class="form-group">
                  <label class="form-control-label">Month: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="current_month" id="current_month">
                    @foreach ($allMonths as $allMonth)
                      <option value="{{ $allMonth }}">{{ $allMonth }}</option>
                    @endforeach
                  </select>
                </div>
                {{-- 2 --}}
                <div class="form-group">
                  <label class="form-control-label">Income Sourse:</label>
                  <input class="form-control" type="text" value="Ticket Sell" name="income_sourse" placeholder="Income Sourse">
                </div>
                {{-- 3 --}}
                <div class="form-group">
                  <label class="form-control-label">Total Ticket Sell: <span class="tx-danger">*</span></label>
                  <input class="form-control @error('total_ticket_sell') is-invalid @enderror" value="{{ $income_edit->total_ticket_sell ?? old('total_ticket_sell') }}" type="number"  name="total_ticket_sell" placeholder="Total Ticket Sell">
                  @error('total_ticket_sell')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                 @enderror
                </div>
                {{-- 4 --}}
                <div class="form-group">
                    <label class="form-control-label">Selling Amount:</label>
                    <input class="form-control @error('selling_amount') is-invalid @enderror" value="{{ $income_edit->selling_amount ?? old('selling_amount') }}" type="text"  name="selling_amount" placeholder="300000">
                @error('selling_amount')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                 @enderror
                </div>
                {{-- 5 --}}
                <div class="form-group">
                    <label class="form-control-label">Profit Amount:</label>
                    <input class="form-control @error('profit_amount') is-invalid @enderror" value="{{ $income_edit->profit_amount ?? old('profit_amount') }}" type="text"  name="profit_amount" placeholder="200000">
                @error('profit_amount')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                 @enderror
                </div>
              </div>
            </div>
            <div class="form-layout-footer text-center">
              <button class="btn btn-info">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <footer class="br-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright ?? 2022. M Kamrul Tours & Travels. All Rights Reserved.</div>
      </div>
    </footer>
  </div>
</div>
@endsection
