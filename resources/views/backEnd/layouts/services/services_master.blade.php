@extends('backEnd.layouts.master')
@section('dashboard')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
                <strong> Services Home </strong>
          
        </div>
    </div>
</div>
@endsection
@section('content-header')
<div class="container">
    <div class="row">
                <div class="col-sm-3">
       <div class=" service-button"><a href="{{url('admin/add/services/category')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Services Category</a></div>
        </div>
                 <div class="col-sm-2">
       <div class=" service-button"><a href="{{url('admin/add/services')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Services</a>
       </div>
   </div>
        <div class="col-sm-2">
       <div class="service-button"><a href="{{url('admin/view/all/services')}}"> <i class="fa fa-list-alt" aria-hidden="true"></i> All Services</a></div>


        </div>
                <div class="col-sm-2">
       <div class=" service-button "><a href="{{url('admin/view/active/services')}}"> <i class="fa fa-eye" aria-hidden="true"></i> Active Services</a></div>

        </div>
        <div class="col-sm-3">
       <div class="service-button"><a href="{{url('admin/view/inactive/services')}}"><i class="fa fa-eye-slash" aria-hidden="true"></i> Inactive Services</a></div>


        </div>



    </div>
</div>
@endsection