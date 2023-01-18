@extends('layouts.admin')
@section('title') Banarsi lehnga House @endsection
@section('keywords') Home,About, @endsection
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
        <i class="fas fa-file-powerpoint"></i> All Category
   </p>
     
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                           
                            <th> Sr No.</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Parent Category</th>
                            <!-- <th>Images</th>
                            <th>Price</th>-->
                             <!-- <th>Show/?Hide</th>  -->
                            <th>Action</th> 
    
                        </thead>
                        <tbody>
                            @foreach ($scategory as $item)
                            <tr>
    
                                <td>{{$item->id}}</td>
                                <td>{{$item->subcat_name}}</td>
                                <td>{{$item->subcat_slug}}</td>
                                <td>{{$item->pro_cat->cat_name}}</td>
                             
    
                                
                                <td>
                                <a href="{{url('admin-subcategory-edit/'.$item->id)}}" class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                                <a href="{{url('admin-subcategory-delete/'.$item->id)}}" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
    
                                </td>
                        </tr>
                            @endforeach
     
                        </tbody>
    
                    </table>
                </div>
            </div>
        </div>
       
   
<hr>


@endsection