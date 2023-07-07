<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.header')
</head>
<body>
@include('partials.sidebar')
@include('partials.navbar')
<br> <br>
<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                      
                        <!-- <div id="agents"></div> -->
                        <div id="content">
                            <agents/>
                            <!-- <agents/> -->
                        </div>
                        @vite('resources/js/app.js')
                       @include('partials.footer')
                    </div>
                </div>
            </div>
        </div> 
        </div>
</body>
 @include('partials.jquery') 
</html>

