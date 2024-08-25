<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Job</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
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
        <form action="{{route('jobs.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
          @csrf 
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Job Title:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Job title" class="form-control py-2" name="jobtitle" value="{{old('jobtitle')}}"/>
              @error('jobtitle')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Description:</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="5" class="form-control py-2" value="{{old('description')}}"></textarea>
              @error('description')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Responsability:</label>
            <div class="col-md-10">
              <textarea name="responsability" id="" cols="30" rows="5" class="form-control py-2" value="{{old('responsability')}}"></textarea>
              @error('responsability')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Qualifications:</label>
            <div class="col-md-10">
              <textarea name="qualifications" id="" cols="30" rows="5" class="form-control py-2" value="{{old('qualifications')}}"></textarea>
              @error('qualifications')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Company Detail:</label>
            <div class="col-md-10">
              <textarea name="companydetail" id="" cols="30" rows="5" class="form-control py-2" value="{{old('companydetail')}}"></textarea>
              @error('companydetail')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Location:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Add location" class="form-control py-2" name="location" value="{{old('location')}}"/>
              @error('location')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Salary from:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" placeholder="Enter salary from" class="form-control py-2" name="salaryfrom" value="{{old('salaryfrom')}}"/>
              @error('salaryfrom')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Salary To:</label>
            <div class="col-md-10">
              <input type="number" step="0.1" placeholder="Enter salary to" class="form-control py-2" name="salaryto" value="{{old('salaryto')}}"/>
              @error('salaryto')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Full time:</label>
            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="fulltime" value="1" @checked(old('fulltime'))/>
            </div>
          </div>
          <div class="form-group mb-3 row">
            {{-- <label for="" class="form-label col-md-2 fw-bold text-md-end">Date line:</label>
            <div class="col-md-10">
              <input type="date" class="form-check-input" style="padding: 0.7rem;" name="dateline"  value="{{old('dateline')}}"/>
            </div>
          </div> --}}
          <div class="form-group mb-3 row">
            <label class="form-label col-md-2 fw-bold text-md-end" for="image">Image:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
              @error('image')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Featured:</label>
            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="featured" value="1" @checked(old('featured'))/>
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
            <div class="col-md-10">
              <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" name="published" value="1" @checked(old('published'))/>
            </div>
          </div>
          <div class="text-md-end">
            <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
              Add Job
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>