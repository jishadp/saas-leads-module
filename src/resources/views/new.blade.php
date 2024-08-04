@extends('user.layouts.master')
@section('title','New Lead')
@section('content')
<div class="row fv-plugins-icon-container">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">New Lead</h5>
        <!-- Account -->
        <div class="card-body">
          <form method="post" class="fv-plugins-bootstrap5" action="{{ route('saas.leads.save')}}">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">First Name</label>
                    <input class="form-control" type="text" name="first_name" autofocus="" value="{{ old('first_name')}}">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Last Name</label>
                    <input class="form-control" type="text" name="last_name" value="{{ old('last_name')}}">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" value="{{ old('email')}}">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Mobile</label>
                    <input class="form-control" type="text" name="mobile" value="{{ old('mobile')}}">
                </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Save changes</button>
              <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
    </div>
</div>
@endsection
