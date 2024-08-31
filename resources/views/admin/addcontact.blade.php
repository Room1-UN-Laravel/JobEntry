<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
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
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add Contact</h2>
        <form action="{{ route('contacts.store') }}" method="POST" class="px-md-5">
          @csrf

          <div class="form-group mb-3 row">
            <label for="name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Name" class="form-control py-2" name="name" value="{{ old('name') }}" />
              @error('name')
              <div class="alert alert-warning">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="email" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
            <div class="col-md-10">
              <input type="email" placeholder="Email" class="form-control py-2" name="email" value="{{ old('email') }}" />
              @error('email')
              <div class="alert alert-warning">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="subject" class="form-label col-md-2 fw-bold text-md-end">Subject:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Subject" class="form-control py-2" name="subject" value="{{ old('subject') }}" />
              @error('subject')
              <div class="alert alert-warning">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="message" class="form-label col-md-2 fw-bold text-md-end">Message:</label>
            <div class="col-md-10">
              <textarea name="message" id="message" cols="30" rows="5" class="form-control py-2">{{ old('message') }}</textarea>
              @error('message')
              <div class="alert alert-warning">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Add Contact
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>