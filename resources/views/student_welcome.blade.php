<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <style>
    @media (max-width: 768px) {
  .table th, .table td {
    font-size: 13px;
    padding: 8px;
  }
  .create-post-btn {
    width: 100%;
    margin-bottom: 10px;
  }
}
    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      perspective: 1000px;
    }
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      animation: flipInX 1s ease;
    }
    .navbar-brand {
      font-weight: bold;
      color: #ff6b6b !important;
    }
    .nav-link {
      color: #555 !important;
    }
    .container {
      background: linear-gradient(to bottom right, #ffffff, #f9f9ff);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      animation: zoomIn 1s ease;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .table {
      background-color: #fff3cd;
      border-radius: 15px;
      overflow: hidden;
      animation: fadeInUp 0.8s ease;
    }
    .btn {
      margin: 0 3px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .btn:hover {
      transform: translateY(-2px) scale(1.05);
    }
    .create-post-btn {
      background: linear-gradient(to right, #00b4db, #0083b0);
      color: white;
      border: none;
    }
    .btn-info {
      background: linear-gradient(to right, #36d1dc, #5b86e5);
      color: white;
      border: none;
    }
    .btn-primary {
      background: linear-gradient(to right, #ff758c, #ff7eb3);
      color: white;
      border: none;
    }
    .btn-danger {
      background: linear-gradient(to right, #f857a6, #ff5858);
      color: white;
      border: none;
    }
    @keyframes flipInX {
      from {
        transform: rotateX(90deg);
        opacity: 0;
      }
      to {
        transform: rotateX(0);
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Students Data</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container my-5 animate__animated animate__fadeIn">
    <div class="text-center mb-3">
      <a href="{{ route ('student.create') }}" class="btn create-post-btn">Student Registration</a>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center align-middle">
        <thead style="background-color: #ffeeba;">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {{-- هنا خزنت المتغير بتاعى فى متغير جديد --}}
          @foreach ($data as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->address}}</td>
            <td>
              <div class="d-flex flex-wrap justify-content-center gap-1">
              <a href="{{ route('student.show', $item->id) }}" class="btn btn-info">View</a>
              <a href="{{ route ('student.edit' , $item->id) }}" class="btn btn-primary">Edit</a>
              <form action="{{ route('student.destroy' ,$item->id) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
