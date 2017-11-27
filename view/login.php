<!Doctype HTML>
<html lang=pt>
<head>
  <meta charset ="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <div class="container ">
    <div class="panel-body">
      <div class="row justify-content-lg-center">
        <div class="col-6">
          <h3>Login</h3>
          <form id="login-form" action="./painel" method="post" role="form" style="display: block;">
            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password"  class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="row">
                <input type="submit" name="login-submit" id="login-submit"  class="form-control"  value="Log In">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
