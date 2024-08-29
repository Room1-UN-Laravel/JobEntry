
@extends('admin.layouts.main')
@section('head')
@include('admin.includes.head2')
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
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
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
								  @include("admin.includes.alert")
									<h2>Add Job</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
        <form action="{{route('jobs.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Job Title:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Job Title" class="form-control py-2" name="title" value="{{old('title')}}" />

              @error('title')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Description:</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="5" class="form-control py-2">{{old('description')}}</textarea>

              @error('description')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Location:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Job Location" class="form-control py-2" name="location" value="{{old('location')}}" />

              @error('location')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Minimum Salary:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" placeholder="min_salary" class="form-control py-2" name="min_salary" value="{{old('min_salary')}}" />
              @error('min_salary')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Maximum Salary:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" placeholder="max_salary" class="form-control py-2" name="max_salary" value="{{old('max_salary')}}" />
              @error('max_salary')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published" {{ old('published') ? 'checked' : '' }} />
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Company Name:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Company Name" class="form-control py-2" name="company_name" value="{{old('company_name')}}" />

              @error('company_name')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
            <div class="col-md-10">
              <select name="category_id" id="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" @selected(old('category_id') == $category->id)>{{$category->name}}</option>
                @endforeach
              </select>
              @error('category_id')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Job Nature:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Job Nature" class="form-control py-2" name="job_nature" value="{{old('job_nature')}}" />

              @error('job_nature')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Vacancy:</label>
            <div class="col-md-10">
              <input type="number" placeholder="Number of Vacancies" class="form-control py-2" name="Vacancy" value="{{old('Vacancy')}}" />

              @error('Vacancy')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
             <label for="" class="form-label col-md-2 fw-bold text-md-end">Job image:</label>
             <div class="col-md-10">

               <input type="file" class="form-control py-2" name="img" />

               @error('img')
               <div class="alert alert-warning">{{$message}}</div>
               @enderror
             </div>
           </div>

           <div class="ln_solid"></div>
						<div class="form-group mb-3 row">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<button class="btn btn-primary" type="button">Cancel</button>
									<button type="submit" class="btn btn-success">Add</button>
								</div>
						</div>
        </form>
        @if(isset($Job->img))
         <img src="{{ asset('assets/img/job/' . $job->img) }}" alt="" width="100">
         @endif
         </div>
							</div>
						</div>
					</div>

				</div>
			</div>
         <!-- /page content -->
@endsection

@section('javaLib')
@include('admin.includes.javascript_libs2')
@endsection		
      