<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Data</title>
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
    .info-box {
      background-color: #f0f9ff;
      border-left: 5px solid #0d6efd;
      padding: 1rem 1.5rem;
      margin-bottom: 1rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    .info-title {
      font-weight: bold;
      color: #333;
    }
    .info-value {
      color: #555;
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
            <a class="nav-link active" href="/">All Students</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- User Info Display -->
  <div class="container my-5 animate__animated animate__fadeIn">
    <h3 class="text-center mb-4">Student Data</h3>
    <div class="info-box">
      <div class="info-title">Name</div>
      <div class="info-value">{{$data->name}}</div>
    </div>
    <div class="info-box">
      <div class="info-title">Email</div>
      <div class="info-value">{{$data->email}}</div>
    </div>
    <div class="info-box">
      <div class="info-title">Age</div>
      <div class="info-value">{{$data->age}}</div>
    </div>
    <div class="info-box">
      <div class="info-title">Address</div>
      <div class="info-value">{{$data->address}}</div>
    </div>
  </div>
</body>
</html>
