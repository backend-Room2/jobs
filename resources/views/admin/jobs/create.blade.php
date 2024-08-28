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
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add JOb</h2>
        <form action="{{route('jobs.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Job Title:</label>
            <div class="col-md-10">
              <input type="text" placeholder="job title" name="jobTitle" class="form-control py-2" value="{{old('jobTitle')}}" />
              @error('jobTitle')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Location:</label>
            <div class="col-md-10">
              <input type="text" placeholder="Enter location" name="location" class="form-control py-2" value="{{old('location')}}" />
              @error('location')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Description:</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="5" class="form-control py-2" >{{old('description')}}</textarea>
              @error('description')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Responsibility:</label>
            <div class="col-md-10">
              <textarea name="responsibility" id="" cols="30" rows="5" class="form-control py-2" >{{old('responsibility')}}</textarea>
              @error('responsibility')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Qualifications:</label>
            <div class="col-md-10">
              <textarea name="qualifications" id="" cols="30" rows="5" class="form-control py-2" >{{old('qualifications')}}</textarea>
              @error('qualifications')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Company Detail:</label>
            <div class="col-md-10">
              <textarea name="companydetail" id="" cols="30" rows="5" class="form-control py-2" >{{old('companydetail')}}</textarea>
              @error('companydetail')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Salary From:</label>
            <div class="col-md-10">
              <input type="number"  placeholder="Enter salary from" name="salaryFrom" class="form-control py-2" value="{{old('salaryFrom')}}"/>
              @error('salaryFrom')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Salary To:</label>
            <div class="col-md-10">
              <input type="number"  placeholder="Enter salary to" name="salaryTo" class="form-control py-2" value="{{old('salaryTo')}}"/>
              @error('salaryTo')
              <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Select Image:</label>
          <div class="col-md-10">
		  <input type="file" id="image" name="image" accept="image/*">
          <!--<img src="../img/" alt="" style="width: 100px">-->
          @error('image')
          <div class="alert alert-warning">{{$message}}</div>
          @enderror
			</div>
         </div>
         
          <hr>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
            <div class="col-md-10">
              <input type="hidden" name="published" value="0">
              <input type="checkbox" class="form-check-input" name="published" style="padding: 0.7rem;" value="1" @checked(old('published')) />
            </div>
          </div>
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Featured:</label>
            <div class="col-md-10">
              <input type="hidden" name="featured" value="0">
              <input type="checkbox" class="form-check-input" name="featured" style="padding: 0.7rem;" value="1" @checked(old('featured')) />
            </div>
          </div>
         <!-- <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Time:</label>
            <div class="col-md-10">
              <input type="hidden" name="time" value="0">
              <input type="checkbox" class="form-check-input" name="time" style="padding: 0.7rem;" value="1" @checked(old('time')) />
            </div>
          </div> -->
          <!--<div class="form-group mb-3 row">
          <label for="employment_type">Employment Type</label> 
          <select name="employment_type" id="employment_type" required> 
            <option value="full-time" {{ old('employment_type') == 'full-time' ? 'selected' : '' }}>Full-Time</option> 
            <option value="part-time" {{ old('employment_type') == 'part-time' ? 'selected' : '' }}>Part-Time</option>
           </select>
          </div>-->
          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Time</label> 
            <div class="col-md-10">
            <select name="time" id="time" required class="form-control"> 
              <option value="full-time" {{ old('time') == 'full-time' ? 'selected' : '' }}>Full-Time</option> 
              <option value="part-time" {{ old('time') == 'part-time' ? 'selected' : '' }}>Part-Time</option> 
            </select>
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Category</label> 
            <div class="col-md-10">
            <select name="category_id" id="" required class="form-control" value="{{old('category_id')}}"> 
              <option value="">Select Category</option> 
              @foreach($categories as $category)
              <option value="{{$category->id}}" @selected(old('category_id')==$category->id)>{{$category->category_name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="alert alert-warning">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group mb-3 row">
            <label for="" class="form-label col-md-2 fw-bold text-md-end">Date Line:</label>
            <div class="col-md-10">
              <input type="date" class="form-control" placeholder="Enter date line" name="dateline" value="{{old('dateline')}}"/>
              @error('dateline')
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
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>