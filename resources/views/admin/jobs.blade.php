@extends('admin.layouts.main')
@section('head')
  @include('admin.includes.head')
  @endsection

  @section('content')
  <!-- page content -->
    <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage Jobs</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              @include('admin.includes.alert')
              <h2>List of Jobs</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
         <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr class="table-dark">
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Location</th>
              <th scope="col">maxSalary</th>
              <th scope="col">minSalary</th>
              <th scope="col">Published</th>
              <th scope="col">CompanyName</th>
              <th scope="col">CategoryName</th>
              <th scope="col">JobNature</th>
              <th scope="col">Vacancy</th>
              <!-- <th scope="col">Image</th> -->
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
          
         @foreach($jobs as $job)
            <tr>
              <td scope="row">{{$job['title']}}</td>
              <td>{{ Str::limit($job['description'], 15,'....')}}</td>
              <td>{{$job['location']}}</td>
              <td>{{$job['max_salary']}}</td>
              <td>{{$job['min_salary']}}</td>
              <td>@if($job['published'] === 1) YES @else NO @endif</td>
              <td>{{$job['company_name']}}</td>
              <td>{{$job['category']['category_name']}}</td>
              <td>{{$job['job_nature']}}</td>
              <td>{{$job['Vacancy']}}</td>
              <!-- <td><img src="{{ asset('assets/img/job/'.$job['img']) }}" alt="Job Image" width="50"></td> -->
              <td><a href="{{route('admin.jobs.edit', $job['id'])}}">Edit</a></td>
              <td><a href="{{route('admin.jobs.show', $job['id'])}}">Show</a></td>
              <td><a href="{{route('admin.jobs.destroy', $job['id'])}}" onclick=" return confirm('Are you sure you want to delete?')">delete</a></td>
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
      </div>
    </div>
  </div>
<!-- /page content -->
  @endsection
        
  @section('javaLib')
  @include('admin.includes.javascript_libs')
  @endsection