@extends('user.layouts.master')
@section('title','Leads')
@section('content')
<div class="card">
    <div class="card-header flex-column flex-md-row">
        <div class="head-label text-left">
            <h5 class="card-title mb-0">Leads</h5>
        </div>
        <div class="dt-action-buttons text-end pt-3 pt-md-0">
            <div class="dt-buttons">
                <a class="dt-button create-new btn btn-primary waves-effect waves-light" href="{{ route('saas.leads.new')}}">
                    <span><i class="ti ti-plus me-sm-1"></i>
                        <span class="d-none d-sm-inline-block">New</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
  <hr class="mt-0" />
  @if(session()->has('message'))
  <div class="offset-sm-1 col-md-6">
    <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
  </div>
  @endif
  <div class="card-datatable">
    {{ $dataTable->table() }}
  </div>
</div>
@endsection
@push('js')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
