<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Vali Admin">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        
                
        <title>ICTSTORE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>

    <body>
        
        <header class="app-header">
            <a href="/main" class="app-header__logo" >ICTSTORE</a>
            <!-- main.css-->
            <ul class="app-nav">
                <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>

                <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
                <aside class="app-sidebar">
                <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

                    <ul class="app-menu">
                    <li>
                        <div>
                            <label for="">ระดับการศึกษา</label>
                            <select name="" id="" class="form-control ">
                            <option value="Bachelor’s">ปริญญาตรี</option>
                            <option value="PhD&Master's">ปริญญาเอก โท</option>
                            </select>
                        </div><br>
                        <div>
                            <label for="">ประเภท</label>
                            <select name="" id="" class="form-control">
                            <option value="">ทั้งหมด</option>
                            <option value=""></option>
                            </select>
                        </div><br>
                        <div>
                            <label for="">หมวดหมู่</label>
                            <select name="" id="" class="form-control">
                            <option value="">ทั้งหมด</option>
                            <option value=""></option>
                            </select>
                        </div><br>
                        <div>
                            <label for="">ชนิดเอกสาร</label>
                            <select name="" id="" class="form-control">
                            <option value="">ทั้งหมด</option>
                            <option value=""></option>
                            </select>
                        </div><br>
                        <div>
                            <label for="">สาขาวิชา</label>
                            <select name="" id="" class="form-control">
                            <option value="">ทั้งหมด</option>
                            <option value=""></option>
                            </select>
                        </div>
                    </li>
                    <style>
                        hr {
                            display: block;
                            unicode-bidi: isolate;
                            margin-inline-start: auto;
                            margin-inline-end: auto;
                            overflow: hidden;
                            border-style: inset;
                            border-width: 2px;
                            }
                    </style>
                    <p><hr></p>
                    
                    <div class="layoutlogre">
                    @if (Route::has('login'))
                        <div class="top-right links front">
                            @auth
                                <a href="{{ url('/home') }}" >ออกระบบ</a><br>
                            @else
                            
                                <a href="{{ route('login') }}" >เข้าสู่ระบบ</a><br>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">สมัครสมาชิก</a><br>
                                @endif
                                
                            @endauth
                            <a href="{{ url('/data') }}" class="view">ดูรายละเอียดผู้ใช้</a><br>
                        </div>
                    @endif
                    </div>
                    </ul>
                    </li>
                    </aside>
                </header>

        <!-- app.css -->



        <content>
        <div class="row ">
        <div class="column" >Column</div>
        <div class="column1" >Column</div>
        <div class="column2" >Column</div>
        </div>
        </content>
        
         
                
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="js/plugins/chart.js"></script>
        
    </body>
</html>
