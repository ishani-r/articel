
@if($like != NULL)
@foreach($like as $like)
@if($like->status == "Like")
<button type="button" data-id="{{$name->id}}" class="badge rounded-pill bg-danger status"> Like </button>
@elseif($like->status == "DisLike")
<button type="button" data-id="{{$name->id}}" class="badge rounded-pill bg-success status"> DisLike </button>
@endif
<!-- <button type="button" data-id="{{(empty($like->id)?$name->id:NULL)}}" class="badge rounded-pill bg-success status"> DisLike </button> -->
@endforeach
@else
<button type="button" data-id="{{$name->id}}" class="badge rounded-pill bg-success status"> DisLike </button>
@endif


// $like = App\Models\Like::where('article_id', $name->id)->where('user_id', Illuminate\Support\Facades\Auth::Guard('web')->user()->id)->first();

               <button type="button" data-id="{{(empty($like->id)?$name->id:NULL)}}" class="badge rounded-pill bg-success status"> DisLike </button>


<?php
$like = App\Models\Like::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->get();
?>

@foreach($like as $like)
<?php
$a = App\Models\Like::where('article_id', $like->id)->first();
?>
@if($a)
@dd(1)
@else
@dd(2)
@endif
@endforeach







- User Register 5:30 hours -- done
- create category & subcategory seeder -- done
- Create article crud in admin -- done
- give subcategory name as autocomplete suggestion when create (use select2 for autocomplete)
- article like/dislike & comment by user -- done
- list article in yajra in admin -- done
- show article detail -- done
- show User -- done
- show subcategory and their main category -- done
- show like count -- done
- show comments of that article -- done
- filter by category & subcategory name
- filter by user name
* store only sub_cat id in article -- done
- create cron job to send mail to user whose account admin inactive -- done


Ishani Ranpariya
Work Report 14/10/2021
- login and logout complete
- setup admin panel complete
- Edit admin profile complete
- solve some error

Ishani Ranpariya
MR :: 15/10/2021

Today I am Working on below points
- working on User Module
- working on Admin Module
- edit profile using blade templete

Ishani Ranpariya
Work Report 15/10/2021
- apply edit profile in blade templete form
- display user data
- install yajra data table and display
- Edit profile in display image, update image, replace image complete
- user table in show data working
- solve yajra datatable in error
- solve css error
- solve script error

IshaniRanpariya
MR :: 17/10/2021

Today I am Working on below points
- Working on user module
- change password

Ishani Ranpariya
Work Report 18/10/2021
- user only show profile complete
- user edit data complete
- admin change password working
- install xampp in pc and setup
- install composer and solve error for path
- solve some error

Ishani Ranpariya
Work Report 19/10/2021
- set validation on edit user
- set validation on edit admin profile
- User module in show function perform using repository
- solve some error

Ishani Ranpariya
MR :: 20/10/2021

Today I am Working on below point
- User modul perform using api
- solve previous error

Ishani Ranpariya
Work Report 20/10/2021
- Manage user status Active/deactive witout pagerefresh done
- Perform Admin login using api
- perform crud on User module using api
- create project in GitHub
- run migrate for user details table
- solve some error

Ishani Ranpariya
MR :: 21/10/2021

Today I am working on below points
- working on user persnal details modual
- solve previous error

Ishani Ranpariya
Work Report 21/10/2021
- User Details Modual Perform using API
- set validation on change password
- admin change password complete
- country, state, city display on userdetail table with set foreign key
- solve some error

Ishani Ranpariya
MR :: 22/10/2021
Today I am working on below points
- working on Notification modual

Ishani Ranpariya
Work Report 22/10/2021
- add column on userdetail table
- display userdetail table
- User Details table Perform using API
- set foreign key between userdetail and user table
- create like table
- working on like table
- solve some error

Ishani Ranpariya
MR :: 23/10/2021
Today I am working on below points
- working on Like and Notification modual

Ishani Ranpariya
Work Report 20/10/2021
- Like and Notification modual complete
- set validation on admin update profile
- try to set latitute and logitute and find distance
- solve some error

Ishani Ranpariya
MR :: 25/10/2021
Today I am working on below points
- set latitute and logitute and find distance
- user Filter

Ishani ranpariya
Work Report 25/10/2021
- find distance between two user complete
- solve some error

Ishani Ranpariya
MR :: 26/10/2021
Today I am working on below points
- User Premium module

Ishani Ranpariya
Work Report 26/10/2021
- Admin create,Edit,Delete Premium Package done
- Premium module perform with api(update,store)
- Premium module in change status done without page refresh
- solve some error

Ishani Ranpariya
MR :: 27/10/2021
Today I am working on below points
- setting module

Ishani Ranpariya
Work Report 27/10/2021
- setting module complete with api
- solve some error

Ishani Ranpariya
MR :: 28/10/2021
Today I am working on below points
- send message modual

Ishani Ranpariya
MR :: 28/10/2021
- user like/dilike profile another user
- working on chatting module
- message table in store user_id, sender_user_id, message
- change password/Add premium package/setting modual in set client side validation
- solve some error

Ishani Ranpariya
MR :: 29/10/2021
Today I am working on below points
- chatting modual

Ishani Ranpariya
Work Report 29/10/2021
- show chat only one side
- manage status when user deactive also userdetail is deactive
- set validation on userdetail table
- slove some error

Ishani Ranpariya
MR :: 30/10/2021
Today I am working on below points
- solve previous error
- chatting modual in show chat both side
- set swipe limit if user not premium

Ishani Ranpariya
Work Report 30/10/2021
- send message complete
- user show messages both side
- solve some error

Ishani Ranpariya
MR :: 8/11/2021
Today I am working on below points
- solve previous error
- set swipe limit if user not premium

Ishani Ranpariya
Work Report 08/11/2021
- show Notification Complete
- translate in multipal language (working)
- solve previous error

Ishani Ranpariya
MR :: 09/11/2021
Today I am working on below points
- Translate in multipal language (Language Modual)

Ishani Ranpariya
Work Report 09/11/2021
- Language Modual Complete
- Woking on Help Modual
- solve some error

Ishani Ranpariya
MR :: 10/11/2021
Today I am working on below points
- Help Modual
- Contact Us Modual

Ishani Ranpariya
Work Report 10/11/2021
- Hepl Modual complete with API
- Working on Contact Us Modual
- solve some error

Ishani Ranpariya
MR :: 11/11/2021
Today I am working on below points
- Contact Us Modual

Ishani Ranpariya
Work Report 11/11/2021
- show contacts on admin
- admin's replay to user's asked questions through email complete
- show replay on admin
- solve some error after testing

Ishani Ranpariya
MR :: 13/11/2021
Following Module Today i am working on
- Testing the Project 0

Hinal Mevada
MR :: 12/11/2021
Following Module Today i am working on
-Revising All Previous points

Ishani Ranpariya
Work Report 12/11/2021
- Import user data / Export user data complete
- self testing and solve error

Ishani Ranpariya
Work Report 13/11/2021
- Export user data in PDF formate complete
- self testing and solve error

Ishani Ranpariya
Work Report 15/11/2021
- send request(follow/Following) Complete
- working on forgotpassword module
- solve some error

Ishani Ranpariya
MR :: 17/11/2021
Today I am working on below points
- Payment module

Ishani Ranpariya
Work Report 17/11/2021
- create form for enter card details
- create customer in stripe
- pay rupess and entrie add in stripe payments completed
- solve some error

Ishani Ranpariya
MR :: 18/11/2021
Today I am working on below points
- solve some previous error
- work on payment modual

Ishani Ranpariya
Work Report 18/11/2021
- create two table payments and payment_customers
- click ordernow button store orders/ordersdetail recored
- after open payment page and user pay total amount completed
- payment card detail page on set validation
- solve some errors

Ishani Ranpariya
MR :: 19/11/2021
Today I am working on below points
- update customer in stripe
- add card in stripe

Ishani Ranpariya
Work Report 22/11/2021
- solve previous error
- payment modual in customer update complete
- order history modual done
- solve some error

Ishani Ranpariya
MR :: 2/12/2021
Today I am working on below points
- list subadmin in display assign role
- solve previous error

Ishani Ranpariya
Work Report 23/11/2021
- Manage Order History done
- Self testing and solve error

Ishani Ranpariya
Work Report 25/11/2021
- Payment Process in get Transction id
- watch videos from role and permission

Ishani Ranpariya
MR :: 30/11/2021
Today I am working on below points
- Testing role and permission Modual and solve error

Ishani Ranpariya
Work Report 26/11/2021
- working role and permission
- Role and Permission table display on admin
- edit/delete role and permission
- create seeder role and permission
- editrole in set multipal select dropdown and get value
- solve some error

Ishani Ranpariya
Work Report 27/11/2021
- role and permission(working)
- solve some error

Ishani Ranpariya
Work Report 29/11/2021
- Role and Permission Modual completed

Ishani Ranpariya
Work Report 30/11/2021
- login user view only assign pages (set middleware)
- edit role in selected permission is checked (working)
- self testing and solve error

Ishani Ranpariya
Work Report 1/12/2021
- admin add subadmin with validation
- admin update/delete subadmin
- change dropdown on add/update role
- solve some error

Ishani Ranpariya
Work Report 02/12/2021
- add role in set exists name validation
- list subadmin in display assign role
- admin in edit assign role
- set unique email validation in edit admin/ edit package
- testing and solve error

Ishani Ranpariya
MR :: 09/12/2021
- Today i am reading of below points
- ???array_is_list()???, ???fsync()??? and ???fdatasync()???
- Understand some topics in laravel

Ishani Ranpariya
Work Report 09/12/2021
- Understand below points
- ???array_is_list()???, ???fsync()???, ???fdatasync()???
- Array Unpacking Support for String-Keyed Arrays
- ???full_path??? Key in ???$_FILES??? for Directory Uploads
- ???IntlDatePatternGenerator??? Class
- solve error in smallcricle project

Ishani Ranpariya
MR :: 11/12/2021
- solve testing error

Ishani Ranpariya
MR :: 15/12/2021
- revising laravel features
- creating sql query on the requirments
- solve previous error

Ishani Ranpariya
Work Report 09/12/2021
- Understand some module
- Admin Panel in set validation
- Testing channal panal and solve some error

Ishani Ranpariya
Work Report 15/12/2021
- setup new project
- understand/analysis new project
- download admin panal and setup

Ishani Ranpariya
MR :: 16/12/2021
- setup admin panal
- perform register/login


Ishani Ranpariya
Work Report 12/16/2021
- setup admin panal
- create individual seller register form
- seller register working
- solve pull/push error

Ishani Ranpariya
MR :: 17/12/2021
Today I am working on below points
- Seller register/ login
- verify otp, forgot password

Ishani Ranpariya
Work Report 17/12/2021
- register/login complete
- verify register otp done
- solve some error

Ishani Ranpariya
MR :: 20/12/2021
Today I am working on below points
- seller create store module
- display store list(manage status,Approved,Action)

Ishani Ranpariya
Work Report 20/12/2021
- create store done with validation
- list store (manage status) done
- Some error solve

Ishani Ranpariya
MR :: 21/12/2021
Today I am working on below points
- list store in manage action (edit, show delete)
- set validation unique store name
- list brand

Ishani Ranpariya
Work Report 21/12/2021
- edit store done with validation
- Working on new Task

Admin side
- category complate
- brand and sub-category working

seller side
- create store with unique store name validation done
- store list done with status
- working on store action
- working on Product Module


var a = $(this).attr("rolePermissions");
alert(a);

sir role and permission complete thai gayu che to aek var testing karsho
<!-- ------------------------------------------------------------------------ -->
@extends('layouts.master')
@section('content')
<div class="content-wrapper">
   <h1>Edit Profile</h1>
   {!! Form::open() !!}

   @csrf

   <div class="form-group">
      {{ Form::label('name','Name')}}
      {{Form::text('name',Auth::guard('admin')->user()->name,['class'=>'form-control','placeholder'=>'Name'])}}
   </div>
   <br>

   <div class="form-group">
      {{ Form::label('mobile','Mobile')}}
      {{Form::text('mobile',Auth::guard('admin')->user()->mobile,['class'=>'form-control','placeholder'=>'mobile'])}}
   </div>
   <br>

   <div class="form-group">
      {{ Form::label('address','Address')}}
      {{Form::text('address',Auth::guard('admin')->user()->address,['class'=>'form-control','placeholder'=>'address'])}}
   </div>
   <br>

   <div class="form-group">
      {{ Form::label('email','Email')}}
      {{Form::text('email',Auth::guard('admin')->user()->email,['class'=>'form-control','placeholder'=>'email'])}}
   </div>
   <br>

   <div class="form-group">
      {{ Form::label('image','Resume Upload')}}<br>
      <img src="img_chania.jpg" alt="Flowers in Chania" width="460" height="345"></br>
      {{Form::file('image')}}
   </div>
   <br>
   {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
   {!!Form::close()!!}
</div>
@endsection


Yajra Datatable

step 1 : composer require yajra/laravel-datatables-oracle:"~9.0"

step 2 :
config/app.php
'providers' => [
Yajra\Datatables\DatatablesServiceProvider::class,
],
'aliases' => [
'Datatables' => Yajra\Datatables\Facades\Datatables::class,
]

step 3 : composer require yajra/laravel-datatables:^1.5

step 4 : php artisan vendor:publish --tag=datatables
step 4 : php artisan datatables:make DataTable_Name


API
step 1 : composer require laravel/passport
step 2 :
config/app.php
'providers' =>[
Laravel\Passport\PassportServiceProvider::class,
],
step 3 :
php artisan migrate
php artisan passport:install
step 4 :
'api' => [
'driver' => 'passport',
'provider' => 'users',
],

country
status
city

// $user = Auth::Guard('api')->user()->with('user')->get();
// $user = UserDetail::where('user_id', Auth::Guard('api')->user()->id)->first();
// $a = $user['address'];
// $userdetail = UserDetail::where('user_id','!=',Auth::Guard('api')->user()->id)->pluck('address');
// $user = UserDetail::where('user_id', Auth::Guard('api')->user()->id)->first();
// $auth = Auth::Guard('api')->user()->id;
// $user = UserDetail::Auth::Guard('api')->user()->id;

// dd($chatsname,$chatsnames);
// $masg = Message::where('user_id',Auth::Guard('api')->user()->id)->get();
// $sender_user_id = Message::where('sender_user_id',Auth::Guard('api')->user()->id)->get();
// foreach($masg as $masgs)
// {
// $a = $masgs->message;
// }
// foreach($sender_user_id as $sender_user_ids)
// {
// $b = $sender_user_ids->message;
// }

$chatsname = \DB::table('messages')
->select('messages.user_id','messages.sender_user_id','messages.message')
// ->where('sender_user_id','=',$id)
->where('sender_user_id','=',Auth::Guard('api')->user()->id)
->where('sender_user_id','user_id')
->get();
dd($chatsname);
$a = Message::where('sender_user_id',$id)->get();
$c = (string)$a;
dd($c);
// $b = Message::find(Auth::Guard('api')->user()->id,$a)->get();
// dd($b->toArray());

$chatsnames = \DB::table('messages')
->where('user_id',Auth::Guard('api')->user()->id)
->where('sender_user_id',$c)
->get();
dd($chatsnames);
$auth = Auth::Guard('api')->user()->id;
dd($auth);
// dd($auth);


$chatsname = \DB::table('messages')
->select('messages.user_id','messages.sender_user_id','messages.message')
->where('user_id',Auth::Guard('api')->user()->id)
->get();
$chatsnames = \DB::table('messages')
->select('messages.user_id','messages.sender_user_id','messages.message')
->where('sender_user_id',Auth::Guard('api')->user()->id)
->get();


SELECT * FROM `messages` where (user_id = 2 and sender_user_id = 3) or (sender_user_id = 2 and user_id = 3)
ORDER BY `messages`.`created_at` ASC
* Remaining Modual
- show notification
- Deactive Account

* Complete Modual
- Login modual
- Register modual
- Change password
- Logout
- Admin Profile (Update)
- User Profile,User Detail (view,delete)
- Likes,Dislikes modual
- Notification modual
- chat modual
- Find Distance between 2 user
- Setting modual
- Teams and Conditions
- Privacy Policy
(Add,Update,Delete)
- Premium Package (Add, Update, Delete)

* Frant
- not open register page
- set validation for valid email on register page
- set strong password validation
- from the login page not redirect register page
- login page on not redirect register page
- registration page not open second time
- If the user log in, he has to go directly to the home page not redirect to otp page
- reset password page on set custome validation message
- reset password page on not print error for strong password
- set error under text box
- print error in red color after text box
- forget passworg page on send email after open otp page not before using url
- There is no process after login

* Admin
- admin alredy login after redirect login page
- add category page/update user on set custome validation message
- update user page
- set old value
- after click on close bar during update user records the error have to be not remove
- set valid email validation
- not show profile
- Employee
- gender alredy selected
- department selected
- after click on close bar during the error have to be not remove
- set valid mobile number validation
- set validation only enter text in name filed
- set validation only enter number in name filed
- male alerady selected and not selected right gender on edit time


// public function exportPDF()
// {
// $package = Package::all();
// // dd($package);
// $pdf = PDF::loadview('pdf', compact('package'));
// dd($pdf);
// return $pdf->download('package.pdf');
// }


// $data = Package::get()->toArray();
// return Excel::create('itsolutionstuff_example', function ($excel) use ($data) {
// $excel->sheet('mySheet', function ($sheet) use ($data) {
// $sheet->fromArray($data);
// });
// })->download("pdf");


@extends('layouts.master')
@push('css')
<link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
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
                  <h4 class="card-title">Update Permission</h4>
                  <p class="card-category">Complete your Permission</p>
               </div>
               <div class="card-body">
                  <!-- <form> -->
                  {!! Form::open(['route'=> array('admin.permission.update',$data->id), 'id' => 'permission_form']) !!}
                  @csrf
                  @method('put')
                  <!-- -------------------------------------- Name ------------------------------------ -->
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('name','Name')}}</label>
                           {{Form::text('name',$data['name'],['class'=>'form-control'])}}
                           @error('name')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <!-- -------------------------------------------------------------------------- -->
                  <!-- <div class="row">
                     <div class="col-md-4">
                        <div class="form-group"> -->
                  <label for="permissions" class="col-md-4 col-form-label text-md-right">Permissions</label>
                  <div class="col-md-6">
                     <select style="color:white" name="permissions" class="form-control permissions" multiple>
                        @foreach ($per as $id => $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                        @endforeach
                     </select>


                     <!-- -------------------------------------------------------------------------- -->
                     {{Form::submit('Update Permission', ['class'=>'btn btn-primary pull-right'])}}
                     {!!Form::close()!!}
                     <div class="clearfix"></div>
                     <!-- </form> -->
                  </div>
               </div>
               <div class="card">
                  <div class="card-header card-header-primary">
                     <a href="{{ route('admin.permission.index')}}">
                        <h4 class="card-title"><i class="fa fa-hand-o-left" aria-hidden="true"></i> {{ trans('Back')}}</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection
   @push('js')
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
      $(document).ready(function() {
         $('#permission_form').validate({
            rules: {
               name: {
                  required: true,
               },
            },
            errorElement: 'span',
            messages: {
               name: 'Please Enter Permission Name !',
            }
         });
      });

      $('.permissions').select2({
         placeholder: "Select an option",
         allowClear: true
      });
   </script>
   @endpush

   <!-- ---------------------------------------------------------------- -->
   @extends('layouts.master')
   @section('content')
   <!DOCTYPE html>
   <html lang="en" xmlns="http://www.w3.org/1999/xhtml">

   <head>
      <meta charset="utf-8" />
      <title></title>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script>
         $(document).ready(function() {
            $("#test").CreateMultiCheckBox({
               width: '230px',
               defaultText: 'Select Below',
               height: '250px'
            });
         });
      </script>
   </head>
   <style>
      .MultiCheckBox {
         border: 1px solid #e2e2e2;
         padding: 5px;
         border-radius: 4px;
         cursor: pointer;
      }

      .MultiCheckBox .k-icon {
         font-size: 15px;
         float: right;
         font-weight: bolder;
         margin-top: -7px;
         height: 10px;
         width: 14px;
         color: #787878;
      }

      .MultiCheckBoxDetail {
         display: none;
         position: absolute;
         border: 1px solid #e2e2e2;
         overflow-y: hidden;
      }

      .MultiCheckBoxDetailBody {
         overflow-y: scroll;
      }

      .MultiCheckBoxDetail .cont {
         clear: both;
         overflow: hidden;
         padding: 2px;
      }

      .MultiCheckBoxDetail .cont:hover {
         background-color: #cfcfcf;
      }

      .MultiCheckBoxDetailBody>div>div {
         float: left;
      }

      .MultiCheckBoxDetail>div>div:nth-child(1) {}

      .MultiCheckBoxDetailHeader {
         overflow: hidden;
         position: relative;
         height: 28px;
         background-color: #3d3d3d;
      }

      .MultiCheckBoxDetailHeader>input {
         position: absolute;
         top: 4px;
         left: 3px;
      }

      .MultiCheckBoxDetailHeader>div {
         position: absolute;
         top: 5px;
         left: 24px;
         color: #fff;
      }
   </style>

   <body>
      <select id="test">
         @foreach($per as $restaurant)
         <option class="dropdown-item" value="{{ $restaurant->id }}" {{ $restaurant->id == old('restaurants_id') ? 'selected' : '' }}>{{ $restaurant->name }}</option>
         @endforeach
      </select>
   </body>

   </html>
   @endsection
   <script>
      $(document).ready(function() {
         $(document).on("click", ".MultiCheckBox", function() {
            var detail = $(this).next();
            detail.show();
         });

         $(document).on("click", ".MultiCheckBoxDetailHeader input", function(e) {
            e.stopPropagation();
            var hc = $(this).prop("checked");
            $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
         });

         $(document).on("click", ".MultiCheckBoxDetailHeader", function(e) {
            var inp = $(this).find("input");
            var chk = inp.prop("checked");
            inp.prop("checked", !chk);
            $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
         });

         $(document).on("click", ".MultiCheckBoxDetail .cont input", function(e) {
            e.stopPropagation();
            $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

            var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
            $(".MultiCheckBoxDetailHeader input").prop("checked", val);
         });

         $(document).on("click", ".MultiCheckBoxDetail .cont", function(e) {
            var inp = $(this).find("input");
            var chk = inp.prop("checked");
            inp.prop("checked", !chk);

            var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
            var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
            multiCheckBoxDetail.next().UpdateSelect();

            var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
            $(".MultiCheckBoxDetailHeader input").prop("checked", val);
         });

         $(document).mouseup(function(e) {
            var container = $(".MultiCheckBoxDetail");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
               container.hide();
            }
         });
      });

      var defaultMultiCheckBoxOption = {
         width: '220px',
         defaultText: 'Select Below',
         height: '200px'
      };

      jQuery.fn.extend({
         CreateMultiCheckBox: function(options) {

            var localOption = {};
            localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
            localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
            localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

            this.hide();
            this.attr("multiple", "multiple");
            var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
            divSel.css({
               "width": localOption.width
            });

            var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
            detail.css({
               "width": parseInt(options.width) + 10,
               "max-height": localOption.height
            });
            var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

            this.find("option").each(function() {
               var val = $(this).attr("value");

               if (val == undefined)
                  val = '';

               multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
            });

            multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
         },
         UpdateSelect: function() {
            var arr = [];

            this.prev().find(".mulinput:checked").each(function() {
               arr.push($(this).val());
            });

            this.val(arr);
         },
      });
   </script>

   add-help-question-answer

   {{$permission->id == $a->permission_id ? 'checked' : ''}}


   permission Add
   Role unique validation add and edit name

   406 - Not Acceptable =
   405 - Method Not Allowed = jayare method wrong hoy tayare
   409 - Conflict
   = some request fail
   200 - ok = All User resource are fetched.
   201 - Created - A new User resource is created.
   404 Not Found (page or other resource doesn???t exist)
   401 Not authorized (not logged in)
   403 Logged in but access to requested area is forbidden
   400 Bad request (something wrong with URL or parameters)
   422 Unprocessable Entity (validation failed)
   500 General server error

   reqCount = 1
   fCount = 1
   isFriend = "0"

   if(reqCount > 0){
   isFriend = "2
   }

   if(fCount > 0){
   isFriend = "1"
   }

   @if(reqCount > 0) ? isFriend = "2" : NUll;
   @if(fCount > 0) ? isFriend = "1" : NUll;

   @if(reqCount > 0) ? isFriend = "2" : isFriend = "1";

   @if(reqCount > 0) ? isFriend = "2" : ((fCount > 0) ? isFriend = "1" : "other");


   Business info in upload image message color red

   Business Registration No = 21 digit
   D&B Number = 9 digit


   Thank U @vipul sir @vikash sir & @sharika ma'am so mush for orgnize the Test we all enjoyed it..We all wants that to give this kind of test every week to stay foused and give Our 100% of Learing

   Yes sir, we agree

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   @extends('Seller.layouts.master')
   @section('content')
   <div class="card-body">
      <div class="table-responsive-sg">
         {!! $dataTable->table()!!}
      </div>
   </div>
   @endsection
   @push('js')
   {!! $dataTable->scripts() !!}
   @endpush


   $showpost = Post::where('user_id', Auth::Guard('web')->user()->id)->pluck('title_name','image')->toArray();
   // dd($showpost);

   <?php
   $like = App\Models\Like::where('user_id', Illuminate\Support\Facades\Auth::Guard('web')->user()->id)->where('article_id', $name->id)->first();
   ?>
   @foreach($like as $names)
   <div class="card-header">
      <a href="{{ route('like_article', $name->id)}}">{{$names->status == 'NULL' ? 'Dislike' : 'Like'}}</a>
   </div>
   @endforeach



   <div class="text-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
         Comment
      </button>
   </div>
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
                  <input type="text" value="{{Auth::Guard('web')->user()->id}}" name="user_id">
                  <input type="text" value="{{$name->id}}" name="artical_id">
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


   @foreach($like as $like)
   @if($like)
   <button type="button" class="badge rounded-pill bg-success status"> Like </button>
   @else
   <button type="button" class="badge rounded-pill bg-success status"> Like </button>
   @endif
   @endforeach



   
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
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

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



15/12/2021 - setup/understand and analysis new project
16/12/2021 - setup admin panal and register/login(start)(individual)
17/12/2021 - register/login with verify register otp/ validation 
18/12/2021 - create/list store (manage status) with unique validation
21/12/2021 - edit/delete store with validation




<?php

namespace App\DataTables;

use App\Models\Seller;
use App\Models\Store;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Auth;

class StoreDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            // ->addColumn('action', 'storedatatable.action');
            ->addColumn('action', function ($data) {
                $action = Store::where('saller_id', Auth::user()->id)->first();
                if ($action) {
                    $result = '<div class="btn-group">';
                    $result .= '<a href="' . route('seller.show_store', $data->id) . '"><button class="btn-sm gradient-purple-bliss" title="store view" style="border-radius: 2.1875rem;"><i class="fa fa-eye" aria-hidden="true"></i></button></a>';
                    $result .= '<a href="' . route('seller.edit_store', $data->id) . '"><button class="btn-sm gradient-ibiza-sunset" title="store update" style="border-radius: 2.1875rem; "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>';
                    $result .= '<button type="submit" data-id="' . $data->id . '" class="btn-sm gradient-pomegranate delete" title="store delete" style="border-radius: 2.1875rem;"><i class="fa fa-trash" aria-hidden="true"></i></button>';
                    return $result;
                }
            })

            ->editColumn('status', function ($data) {
                $status = Store::where('saller_id', Auth::user()->id)->pluck('status')->toArray();
                foreach ($status as $status) {
                    if ($status == '0') {
                        return '<button type="button" data-id="' . $data->id . '" class="badge bg-light-success status"><b>Active</b></button>';
                    } else {
                        return '<button type="button" data-id="' . $data->id . '" class="badge bg-light-danger status"><b>Deactive</b></button>';
                    }
                }
            })

            ->editColumn('is_approve', function ($data) {
                $is_approve = Store::where('saller_id', Auth::user()->id)->pluck('is_approve')->toArray();
                foreach ($is_approve as $is_approve) {
                    if ($is_approve == '0') {
                        return '<button type="button" class="badge bg-light-warning approve"><b>Pending</b></button>';
                    } elseif ($data['is_approve'] == '1') {
                        return '<button type="button" class="badge bg-light-success"><b>Approve</b></button>';
                    } else {
                        return '<button type="button" class="badge bg-light-danger"><b>Rejected</b></button>';
                    }
                }
            })

            ->editColumn('en_name', function ($data) {
                $en_name = Store::where('saller_id', Auth::user()->id)->pluck('en_name')->toArray();
                return $en_name;
            })

            ->editColumn('id', function ($data) {
                $id = Store::where('saller_id', Auth::user()->id)->pluck('id')->toArray();
                
                return $id;
            })

            ->rawColumns(['action', 'status', 'is_approve'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\StoreDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Store $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('storedatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Blfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->data('DT_RowIndex'),
            Column::make('en_name')->title('Store Name'),
            Column::make('status'),
            Column::make('is_approve')->title('Approve'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Store_' . date('YmdHis');
    }
}
