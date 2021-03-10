<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Details1</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">College</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alumni.php">Alumni</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2 col-md-4 col-lg-4">
            <table class="table table-borderless">
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Rollno</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Admno</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>College</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary">REGISTER</button></td>
                </tr>
            </table>
            </div>
            <div class="col col-12 col-sm-2 col-md-4 col-lg-4">
                <table class="table table-borderless">
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">LOGIN</button></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>