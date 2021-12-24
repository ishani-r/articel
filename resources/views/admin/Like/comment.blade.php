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
                  <h4 class="card-title">{{ trans('comment Table')}}</h4>
               </div>
               {{$no=1}}
               <div class="card-body">
                  <table class="table table-dark table-striped">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Article</th>
                           <th>Comments</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $article = App\Models\Artical::all();
                        ?>
                        @foreach($article as $article)
                        <tr>
                           <td>{{$no++}}</td>
                           <td>{{$article->article}}</td>
                           <?php
                           $comment = App\Models\Comment::where('artical_id', $article->id)->get();
                           ?>
                           @foreach($comment as $comment)
                           <td>
                              <?php
                              $user = App\Models\User::where('id', $comment->user_id)->first();
                              ?>
                              {{$user->name}} : {{$comment->comment}}
                           </td>
                           @endforeach
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