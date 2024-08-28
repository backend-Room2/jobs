<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trashed Categories</title>
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
        <h2 class="fw-bold fs-2 mb-5 pb-2">Trashed Categories</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col">Category Name</th>
              <th scope="col">No of Vacancy</th>
              <th scope="col">Restore</th>
              <th scope="col">Permenant Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
            <td scope="row">{{$category['category_name']}}</a></td>
            <td>{{$category['no_of_vacancy']}}</td>  
            <td><form action="{{ route('categories.restore',$category['id'])}}" method="post">
                   @csrf
                   @method('patch')
                   <button type="submit" class="btn btn-link m-0 p-0">Restore</button>
                   </form>
                  </td>
                  <td><form action="{{ route('categories.forcedelete',$category['id'])}}" method="post">
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-link m-0 p-0">Delete</button>
                   </form>
                  </td>
            @endforeach
          
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>