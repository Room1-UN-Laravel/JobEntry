<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Job</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add Job</h2>
        <form action="{{route('job.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
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
                <option value="{{$category->id}}" @selected(old('category_id', $job->category_id ?? '') == $category->id)>{{$category->category_name}}</option>
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

          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Add Job
            </button>
          </div>
        </form>
        @if(isset($Job->img))
         <img src="{{ asset('assets/img/job/' . $job->img) }}" alt="" width="100">
         @endif
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>