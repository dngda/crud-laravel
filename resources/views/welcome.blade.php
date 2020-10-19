<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pemasaran - Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  body,html {
  height: 100%;
}
</style>
</head>
<body>
<div class="container h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="card">
      <form class="card-body" action="/login" method="post">
        @csrf
        <h2 class="text-center mb-3">Sign in</h2>       
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
        @if (Session::has('alert'))
        <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
        </div>
        @endif
      </form>
    </div>
  </div>
</div>
</body>
</html>