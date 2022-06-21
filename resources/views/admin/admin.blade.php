<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: wheat;
        }
        .admin-container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content-container{
            position: relative;
            max-width: 430px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);

        }
        .form-container{
            padding: 30px;
        }
        .form-container h2{
            position: relative;
            font-size: 27px;
            font-weight: 600;
            margin-bottom: 30px;
            margin-top: 20px;

        }
        .form-container .input-container{
            margin-bottom: 20px;
            height: 40px;
            width: 100%;
            margin-top: 20px ;
        }
        .form-container .input-container input{
            height: 100%;
            width: 100%;
            padding: 10px 20px;
            font-weight: 400;
            font-size: 14px;
            letter-spacing: 1px;
            border-radius: 10px;
            border: 1px solid rgb(224, 224, 224);
            outline: none;
        }
        .form-container .input-container input[type="submit"]{
            background-color: #452820;
            color: #ebebeb;
            outline: none;
            border: none;
            font-weight: 500;
            cursor: pointer;
        }
        .form-container .input-container input[type="submit"]:hover{
            background-color: #452820;
        }
        .error{
			color: #D8000C;
			background-color: #FFBABA;
			background-image: url('https://i.imgur.com/GnyDvKN.png');
		}
    </style>
</head>
<body>
        <div class="admin-container">
            <div class="content-container">
                <div class="form-container" id="login-form">
                    
                    <h2>Admin Login</h2>
                    <form action="{{route('admin.auth')}}" method="post">
                        @csrf
                        <div class="input-container">
                            <input type="email" name="email" placeholder="Email" require>
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Password" require>
                        </div>
                        <div class="input-container">
                            <input type="submit" value="Login" name="">
                        </div>
                        <div class="error">
                            {{session('error')}}
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

</body>
</html>