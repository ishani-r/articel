@extends('layouts.app')
@push('css')

@endpush
@section('content')

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               <div class="text-center">
                  <h3>{{ __('Articles') }}</h3>
               </div>
            </div>
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
            </div>

         </div>
         </br>
         <!-- Display Article -->
         <div class="card">
            <?php
            $artical = App\Models\Artical::all();
            ?>
            @foreach($artical as $name)
            <?php
            $category_name = App\Models\Category::where('id', $name->category_id)->first();
            $subc_name = App\Models\Subcategory::where('id', $name->subcategory_id)->first();
            ?>
            <div class="card-header">Category : {{$category_name->name}}</div>
            <div class="card-header">Subcategory : {{$subc_name->name}}</div>
            <div class="card-body">
               {{$name->article}}
            </div>
            <div class="card-header">
               <?php
               $like = App\Models\Like::where('article_id', $name->id)->where('user_id', Illuminate\Support\Facades\Auth::Guard('web')->user()->id)->first();
               // dd($like);
               ?>
               @if($like)
               <button type="button" data-id="{{$like->id}}" class="badge rounded-pill bg-danger status"> Like </button>
               @else
               <button type="button" data-id="{{(empty($like->id)?$name->id:NULL)}}" class="badge rounded-pill bg-success status"> DisLike </button>
               @endif

               <!-- comment -->
               <div class="text-right">
                  <button type="button" class="btn btn-primary comment" data-id="{{$name->id}}" data-toggle="modal" data-target="#exampleModalCenter">
                     Comment
                  </button>
               </div>
               <div class="card">
                  <div class="text-right">
                     <?php
                     $comment = App\Models\Comment::where('artical_id', $name->id)->get();
                     ?>
                     @foreach($comment as $comment)
                     <?php
                     $user = App\Models\User::where('id', $comment->user_id)->first();
                     ?>
                     <tr>
                        {{$user->name}} : {{$comment->comment}}
                     </tr></br>
                     @endforeach
                  </div>
               </div>
            </div>
            <h4>-----------------------------------------------</h4>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form method="post" action="{{route('comment')}}" id="comment">
                           @csrf
                           <input type="hidden" value="{{Auth::Guard('web')->user()->id}}" name="user_id">
                           <input type="hidden" name="artical_id" id="my_comment_box">
                           <div class="form-group">
                              <label>Comment</label>
                              <input type="text" id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror" placeholder="Enter Comment">
                              @error('comment')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach

         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script>
   $(document).ready(function() {
      $('#comment').validate({
         rules: {
            comment: {
               required: true,
            },
         },
         messages: {
            comment: "Please Enter Your Comment",
         },
         highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
         },
         unhighlight: function(element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
         },
      });

      $(document).on('click', '.status', function() {
         var id = $(this).data('id');
         var number = $(this).attr('id', 'asd');
         $.ajax({
            url: "{{route('like_article')}}",
            type: 'get',
            data: {
               id: id,
            },
            dataType: "json",
            success: function(data) {
               $("#asd").removeAttr("class");
               if (data.status == "Like") {
                  $("#asd").addClass("badge rounded-pill bg-danger status");
               } else {
                  $("#asd").addClass("badge rounded-pill bg-success status");
               }
               $("#asd").html(data.status);
               // $('#helpdatatable-table').DataTable().ajax.reload();
            }
         })
      });
      $(document).on('click', '.comment', function() {
         var id = $(this).data('id');
         $("#my_comment_box").val(id);
         // alert(id);
         var number = $(this).attr('id', 'asd');
         $.ajax({
            url: "{{route('comment')}}",
            type: 'post',
            data: {
               id: id,
            },
            dataType: "json",
            success: function(data) {

            }
         })
      });
   })
</script>
@endpush