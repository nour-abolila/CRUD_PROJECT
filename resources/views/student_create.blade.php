<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <style>
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
      max-width: 700px;
    }
    .form-control:focus {
      box-shadow: 0 0 8px rgba(33, 150, 243, 0.4);
    }
    .btn-submit {
      background: linear-gradient(to right, #00b09b, #96c93d);
      color: white;
      border: none;
      transition: all 0.3s ease;
    }
    .btn-submit:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Student Registration</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">All Students</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- User Info Form -->
  <div class="container my-5 animate__animated animate__fadeIn">
    <h3 class="text-center mb-4">Student Registration</h3>
    <form action="{{ route ('student.store') }}" method="post">
      @csrf
      {{-- هنا معناها انى بقولة صلاحية استخدام بوست عشان هو ميعرفهاش --}}
      @method('post') 
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
                          {{-- هنا لازم بكتب اسم الحاجة فكل صف بقا  --}}
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age">
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-submit px-4">Registration</button>
      </div>
    </form>
  </div>
</body>
</html>
