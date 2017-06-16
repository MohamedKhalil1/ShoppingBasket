<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping Basket</title>

        <!-- Booststrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           .social{
            float: right;
            margin-top: 8px;
            margin-right: 30px;
           }
           .navbar{
            background-color: #FF8067; 
           }
           .navbar a{
            color: #FEF5E5;
           }
           .slider-image{
            height: 300px;
            margin: 0 auto;
           }
            .footer{
                background-color: #EEE;
                height: 300px;
                border-top: 3px solid #FF8067;
                border-bottom: 3px solid #FF8067;
            }
            .copy-right{
                background-color: #FF8067;
                text-align: right;
                height: 70px;
                margin-top: -49px;
            }
            .sub-container{
                margin-top: 40px;
            }
            .copyright-paragraph{
                padding-top: 25px;
                font-size: 80%;
            }
            .footer-paragraph{
                margin-bottom: 50px;
            }
            @yield('styles')
        </style>
    </head>

    <body>

        <!-- Nav Bar-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="#">Shopping Basket</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Men</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Women</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Girls</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Boys</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>  
                </ul>    
                
                 <ul class="nav navbar-nav navbar-right ml-auto">
                   
                    <li class="nav-item social">
                        <a class="fa fa-facebook" href="#" aria-hidden="true"></a>
                    </li>

                    <li class="nav-item social">
                        <a class="fa fa-twitter" href="#" aria-hidden="true"></a>
                    </li>  
                </ul>    
            </div>
        </nav>

        @yield('content')
        
        <!--Footer-->
        <div class="footer">
            <div class="container">
                <div class="sub-container">
                    <div class="row">
                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                        <p class="col-md-4 footer-paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>
                    </div> 
                </div>       
            </div>

            <div class="copy-right">
                <div class="container">
                    <span><p class="copyright-paragraph">copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Mohamed A. Khalil. All Rights reserved</span></p>
                </div>
            </div>
        </div>
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/17968ae4f4.js"></script>
    </body>
</html>
