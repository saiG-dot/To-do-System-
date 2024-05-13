
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel = "stylesheet" href ="style.css">


  </head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card">
  <div class="card-header">
    Saving System
  </div>
  <div class="card-body">
    <h3>Username</h3>
    <input type="text" id="username" class="form-control fw-bold <style">
    <h3>Password</h3>
    <input type="password" id="password" class="form-control fw-bold mb-3">
    <button class="btn btn-success" onclick="submit();">Save</button>
  </div>
</div>
    </div>
</body>

<script>

  function submit(){
     let username = $('#username').val(); 
     let password = $('#password').val();
     $.ajax({
      url: '../controller/index_contr.class.php',
      type: 'POST',
      data: {action : 'submitFunction',
        username: username,
        password: password
      },
      success: result => {
        alert(result);
      }
     })
  }

</script>
</html>