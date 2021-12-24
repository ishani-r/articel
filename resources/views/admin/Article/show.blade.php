@extends('layouts.master')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ trans('Show Artical')}}</h4>
               </div>
               <div class="card-body">
                  <table class="table table-dark table-striped">
                     <tr>
                        <td>Category</td>
                        <td>{{$category->name}}</td>
                     </tr>
                     <tr>
                        <td>Subcategory</td>
                        <td>{{$subcategory->name}}</td>
                     </tr>
                     <tr>
                        <td>Article</td>
                        <td>{{$data->article}}</td>
                     </tr>
                     <tr>
                        <td>status</td>
                        <td>{{$data->status}}</td>
                     </tr>
                  </table>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
@endsection