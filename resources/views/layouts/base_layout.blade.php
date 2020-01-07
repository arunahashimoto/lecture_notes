<html>
<head>
    <title>@yield('title')</title>
    <style>
    body { background-color: #eeece9; }
    h1 { 
        font-family: 'Arial Black',sans-serif;
        font-size:50pt; text-align:center; 
        color:#3f5170; 
        margin:20px 0px 0px 0px; 
        letter-spacing:-4pt;
        border-bottom: 3px dotted #3f5170;
        }
    h2 { font-family: 'Arial Black',sans-serif; font-size:30px; color: #3f5170; }
    form { text-align:center; margin-top:20px; }
    .content { width: 65%; margin:0 auto; margin-top:20px; }
    .add { width: 600px; margin: 0 auto; line-height: 30px; }
    input { width:400px; line-height: 10px; }
    </style>
</head>
<body>
    <h1>lecture notes</h1>
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>