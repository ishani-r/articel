@extends('layouts.master')
@push('css')
<style>
   .error {
      color: red;
   }
</style>
@endpush

@section('content')

<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ trans('Add Article')}}</h4>
                  <!-- <p class="card-category">{{ trans('Complete your profile')}}</p> -->
               </div>
               <div class="card-body">
                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('admin.create_articel')}}" id="form_article">
                     @csrf
                     <!-- Category -->
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="category_id">Category</label>
                              <select id="category_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" value="{{ old('category_id') }}">
                                 <option class="dropdown-item" value="0">select one name</option>
                                 @foreach($category as $categorys)
                                 <option class="dropdown-item" value="{{ $categorys->id }}" {{ $categorys->id == old('category_id') ? 'selected' : '' }}>{{ $categorys->name }}</option>
                                 @endforeach
                              </select>
                              @error('category_id')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <!-- Subcategory -->
                     <div class="form-group">
                        <label for="subcategory_id">Sub Category</label>
                        <select id="subcategory_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" value="{{ old('subcategory_id') }}">
                           <option class="dropdown-item" value="0">select one subcategory_id</option>
                        </select>
                     </div>
                     @error('subcategory_id')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror

                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="bmd-label-floating">{{ Form::label('article',trans('Write Article'))}}</label>
                              {{Form::textarea('article','',['class'=>'form-control'])}}
                              @error('article')
                              <span role="alert">
                                 <strong style="color:red;">{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                     </button>
                  </form>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection

   @push('js')
   <script>
      $(document).ready(function() {
         $('#form_article').validate({
            rules: {
               category_id: {
                  required: true,
               },
               article: {
                  required: true,
               }
            },
            errorElement: 'span',
            messages: {
               category_id: 'Please Select Category.',
               article: 'Please Write Content Here.',
            },
         });

         $('#category_id').on('change', function() {
            var categorys_id = this.value;
            console.log(categorys_id);
            $.ajax({
               url: "{{ route('admin.set_sub') }}",
               type: "POST",
               data: {
                  categorys_id: categorys_id,
                  _token: '{{ csrf_token() }}'
               },
               dataType: 'json',
               success: function(result) {
                  $('#subcategory_id').html('<option class="dropdown-item" value="">Select Sub Category</option>');
                  $.each(result, function(key, value) {
                     $("#subcategory_id").append('<option class="dropdown-item" value="' + value.id + '">' + value.name + '</option>');
                  });
               }
            });
         })
      });
   </script>
   @endpush