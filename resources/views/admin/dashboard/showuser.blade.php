@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ trans('Show Profile')}}</h4>
            <p class="card-category">{{ trans('Complete your profile')}}</p>
          </div>
          <div class="card-body">
            <table class="table table-dark table-striped">
                  <tr>
                      <td>{{ trans('Name')}}</td>
                      <td>{{$data->name}}</td>
                  </tr>
                  <tr>
                      <td>{{ trans('Mobile')}}</td>
                      <td>{{$data->mobile}}</td>
                  </tr>
                  <tr>
                      <td>{{ trans('Email')}}</td>
                      <td>{{$data->email}}</td>
                  </tr>
                 
                
              </table>
          </div>
        </div>
        <div class="card">
          <div class="card-header card-header-primary">
              <a href="{{ route('admin.dashboard.index')}}"><h4 class="card-title"><i class="fa fa-hand-o-left" aria-hidden="true"></i> {{ trans('Back')}}</h4></a>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</div>
@endsection