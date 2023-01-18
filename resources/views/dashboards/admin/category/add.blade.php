@extends('layouts.admin')
@section('title') Banarsi lehnga House @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#1CD5E8;padding:20px;"> 
        <h3  class="black-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}">Admin Dashboard</a></h3>

        <p class="white-text" style="font-weight:bold;"> 

            <a href="{{url('admin-Subcategory')}}" class="badge badge-pill btn-outline-green px-3 py-2">  <i class="fas fa-file-powerpoint"></i>  &nbsp; Show All Categories</a> 
            <a href="{{url('admin-subcategory-add')}}" class="badge badge-pill btn-outline-green px-3 py-2">  <i class="fas fa-file-powerpoint"></i>  &nbsp;Add New Subcategory</a>
            <a href="{{url('admin-category-add')}}" class="badge badge-pill btn-dark   px-3 py-2">   <i class="fas fa-plus"></i>  &nbsp; Add New Category</a> 
            

        </p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
  

</div>

 

<div class="container py-5">
    <p align="left">
        <i class="fas fa-plus"></i> Add New Category
   </p>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              <form method="POST" action="{{url('admin-category')}}" enctype="multipart/form-data">
                  @csrf
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Category name</label>
                                  <input type="text" class="form-control" name="cat_name" placeholder="Category Name" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Category Slug</label>
                                  <input type="text" class="form-control" name="cat_slug" placeholder="Category Slug" required>
                              </div>
                          </div>
                        
                         
                          <div class="col-md-12">
                              <div class="form-group">
                              <button type="submit" class="btaobtn btaobtn-success">Add</button>
                              </div>
                          </div>



                      </div>



                  </div>
                

                 
                </form>
              </div>
        </div>
    </div>
</div>
<hr>
@endsection