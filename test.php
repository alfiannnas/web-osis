<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Linktree Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .linktree-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .linktree-header, .linktree-footer {
      text-align: center;
      padding: 20px 0;
    }
    .linktree-footer {
      margin-top: 20px;
      border-top: 1px solid #ced4da;
    }
    .linktree-list {
      list-style: none;
      padding: 0;
    }
    .linktree-list li {
      margin-bottom: 10px;
    }
    .linktree-list li a {
      display: block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .linktree-list li a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="linktree-container">
    <div class="linktree-header">
      <h1>My Linktree</h1>
    </div>
    <ul class="linktree-list">
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
      <li><a href="#">Link 4</a></li>
      <!-- Add more links as needed -->
    </ul>
    <div class="linktree-footer">
      <p>&copy; 2024 My Linktree</p>
    </div>
  </div>
</body>
</html>
