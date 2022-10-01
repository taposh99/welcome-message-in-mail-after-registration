<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/style.css">
    <title>Document</title>

    <style>
        *{
            padding:0;
            margin:0;
        }

        .container{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;


        }

        .card{
            height:210px;
            width:350px;
            background-color:#EAF9FF;
            position:relative;
            overflow:hidden;
            -webkit-box-shadow: 0px 1px 9px 3px #6996ad;
            -moz-box-shadow: 0px 1px 9px 3px #6996ad;
            box-shadow: 0px 1px 3px 1px #6996ad;

        }



        .card .content{
            display:flex;
            align-items:left;
            text-align:left;
            justify-content:flex-end;
            margin-top:20px;
            margin-right:20px;
            flex-direction:column;
        }


        .logo{
            position:absolute;
            height:20px;
        }
        .content2{
            font-size: 22px;
            padding-top: 27px;
            padding-left: 13px;
            color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card" style="color: black;/*! font-weight: 256px; */font-size: 22px;">
        <div class="content">
            <h5 style="text-align: center;font-size: 24px;color: black;">Welcome to EMS</h5>

            <div class="content2">
                <span>Person Name:{{$user->name}} </span><br>
                <span>your mail is: {{$user->email}}</span><br>

            </div>
            <p style="padding-top: \\;padding-top: 57px;text-align: center;color: black;font-size: 19px;">Support for EMS:support@everspicial.net</p>
        </div>
    </div>
</div>
{{--          <h1>Welcome to EVERSPECIAL--}}
{{--              MEDICAL SUPPORT </h1>--}}
{{--          <h2>Person Name: {{$user->name}}</h2>--}}
{{--          <p>your mail is : {{$user->email}}</p>--}}
</body>
</html>
