<!doctype html>
<html lang="en" dir="{{env('SITE_RTL') == 'on'?'rtl':''}}">

<head>
    <title>Help Desk</title>
    <!-- initiate head with meta tags, css and script -->

    <?= $this->include('include/head') ?>
    ?>
</head>

<body id="app">


    <div class="wrapper">
        <!-- initiate header-->
        <?= $this->include('include/header') ?>
        <div class="page-wrap">
            <!-- initiate sidebar-->

           
     
        <div class="main-content">
            <!-- yeild contents here -->
            <?= $this->include('homeadmin') ?>
            </div>
        </div>

        <!-- initiate chat section-->


        <div class="col-md-12">



            <!-- initiate footer section-->

        </div>
    </div>
    </div>
    <?= $this->include('include/script') ?>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</html>