<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@extends('layouts.master')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ trans('Article Table')}}</h4>
                  <!-- <p class="card-category"> {{ trans('Here is a List for Question-Answer')}}</p> -->
               </div>
               <div class="card-body">
               <table class="table table-dark table-striped">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Category</th>
                           <th>Subcategory</th>
                           <th>Article</th>
                           <th>Number of Likes</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($artical as $artical)
                        <tr>
                           <td>{{$artical->id}}</td>
                           <td>{{$artical->category_id}}</td>
                           <td>{{$artical->subcategory_id}}</td>
                           <td>{{$artical->article}}</td>
                           <?php
                              $a = $artical->id;
                              $count = App\Models\Like::whereIn('article_id', [$a])->count();
                           ?>
                           <td>{{$count}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                     <tfoot>
                        <tr>

                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>


         </div>
      </div>
   </div>
</div>
@endsection