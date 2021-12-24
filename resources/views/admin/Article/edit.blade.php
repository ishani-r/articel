@extends('layouts.master')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ trans('Edit')}}</h4>
                  <p class="card-category">{{ trans('You Can Edit Your Article')}}</p>
               </div>
               <div class="card-body">
                  <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ route('admin.update_article',$data->id)}}">
                     @csrf
                     @method('put')

                     <div class="form-group">
                        <label for="categorys_id">Category</label>
                        <select id="categorys_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('categorys_id') is-invalid @enderror" name="categorys_id" value="{{ old('categorys_id') }}">
                           <option class="dropdown-item" value="0">select one categorys_id</option>
                           @foreach($categorys as $categorys)
                           <option class="dropdown-item" value="{{ $categorys->id }}" {{ $categorys->id == $data->category_id ? 'selected' : '' }}>{{ $categorys->name }}</option>
                           @endforeach
                        </select>
                        @error('categorys_id')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                      <!-- Subcategory -->
                      <div class="form-group">
                        <label for="subcategory_id">Sub Category</label>
                        <select id="subcategory_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" value="{{ old('subcategory_id') }}">
                           @foreach($subcategorys as $subcategorys)
                           <option class="dropdown-item" value="{{$subcategorys->id}}" {{$subcategorys->id == $data->subcategory_id ? 'selected' : ''}}>{{ $subcategorys->name }}</option>
                           @endforeach
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
                              <label class="bmd-label-floating">{{ Form::label('article', trans('Article'))}}</label>
                              {{Form::textarea('article',$data->article,['class'=>'form-control'])}}
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
                  <!-- </form> -->
               </div>
               <div class="card">
                  <div class="card-header card-header-primary">
                     <a href="{{ route('admin.articel_list')}}">
                        <h4 class="card-title"><i class="fa fa-hand-o-left" aria-hidden="true"></i> {{ trans('Back')}}</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script>
   $(document).ready(function(){
      $('#categorys_id').on('change', function() {
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