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
					<h3>Manage Testimonials</h3>
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
							<h2>Edit Testimonial</h2>
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
							<form action="{{route('testimonials.update',$testimonial['id'])}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" >
                                      @csrf 
									  @method('put')
										<div class="form-group mb-3 row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" required="required" class="form-control " name="name" value="{{old('name',$testimonial['name'])}}" >
												@error('name')
												<div class="alert alert-warning">{{$message}}</div>
												@enderror
											</div>
										</div>

										<div class="form-group mb-3 row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Profession<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="profession" required="required" class="form-control " name="profession" value="{{old('profession',$testimonial['profession'])}}">
												@error('profession')
												<div class="alert alert-warning">{{$message}}</div>
												@enderror
											</div>
										</div>
										<div class="form-group mb-3 row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea id="description" name="description" required="required" class="form-control">{{old('description',$testimonial['description'])}}</textarea>
												@error('description')
												<div class="alert alert-warning">{{$message}}</div>
												@enderror
											</div>
										</div>
										<div class="form-group mb-3 row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
											<div class="checkbox">
												<label>
												    <input type="hidden" name="pub" value="0">
													<input type="checkbox" class="flat" name="pub" value="1" @checked(old('pub',$testimonial['pub']))>
												</label>
											</div>
										</div>
										<div class="form-group mb-3 row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">
											</label>
											<div class="col-md-6 col-sm-6 ">
											    <input type="hidden" name="old_image" value="{{ $testimonial['image'] }}">
												<input type="file" id="image" name="image"  class="form-control" accept="image/*"/>
												@error('image')
												<div class="alert alert-warning">{{$message}}</div>
												@enderror
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group mb-3 row">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
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
			