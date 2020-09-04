<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin/login</title>
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('assets/vendor/login.css')}}" rel="stylesheet">
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
   

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <img src="{{asset('assets/img/logo1.png')}}" id="icon" alt="User Icon">
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="email" class="fadeIn second" placeholder="Email">
      <input type="text" id="password" class="fadeIn third"  placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" id="login">
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>

<script>
    $(document).ready(function(){

        $('#login').click(function(e){
            e.preventDefault()
            $.ajax({
            method: "post",
            url: "{{url('api/login')}}", 
            data:{
                'email' : $('#email').val(),
                'password': $('#password').val()
            },
            datatype:'json',
            success: function(data)
            {   token = data.access_token
                window.localStorage.setItem('access_token',token)
                window.location = 'admin'              
            }
            })
        })

    })
</script>
</html>