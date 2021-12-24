@extends('layouts.master')
@push('css')
<style>

</style>
@endpush
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
               </div>
               <div class="card-body">
                  <!-- <form> -->
                  {!! Form::open(['route'=> array('admin.dashboard.update',$data->id),'files'=>'true']) !!}
                  @csrf
                  @method('put')
                  <!-- -------------------------------------- Name ------------------------------------ -->
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('name','Name')}}</label>
                           {{Form::text('name',$data->name,['class'=>'form-control','placeholder'=>'Name'])}}
                           @error('name')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <!-- -------------------------------------- email ------------------------------- -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('email','Email')}}</label>
                           {{Form::text('email',$data->email,['class'=>'form-control','placeholder'=>'Email'])}}
                           @error('email')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                           <!-- <input type="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}"> -->
                        </div>
                     </div>
                  </div>
                  <!-- -------------------------------------- Mobile ------------------------------------ -->
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('mobile','Mobile')}}</label>
                           {{Form::text('mobile',$data->mobile,['class'=>'form-control','placeholder'=>'Name'])}}
                           @error('mobile')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>


                  </div>
                  {{Form::submit('Update Profile', ['class'=>'btn btn-primary pull-right'])}}
                  {!!Form::close()!!}
                  <div class="col-md-8">
                     <a href="{{ route('admin.dashboard.index')}}" class="btn btn-primary pull-left">Cancel</a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- </form> -->
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection

@push('js')
<script>

</script>
@endpush