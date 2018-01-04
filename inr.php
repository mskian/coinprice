<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Cryptocurrency price Ticker</title>
<meta name="description" content="CoinPrice - Online Cryptocurrency price Ticker Table."/>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/kt-2.3.2/r-2.2.1/datatables.min.css"/>

<style>
body {
    background-color: #ffffff;   
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
}
.navbar{
    background-color:#1976d2;
    border: 0;
    margin: 0;
    padding:5px 0 5px 0;
}
.navbar a:hover{
    opacity: 1;
}
.navbar-inverse .navbar-nav>li>a {
    color: #eeeeee;
}
.navbar-brand {
    font-weight: 800;
    font-style: italic;
    color: #eeeeee;
}
.navbar-inverse .navbar-brand {
    color: #eeeeee;
}
@media (max-width:767px) {

    .navbar-form {
        margin-top: 0;
        border: none;
    }

    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
        border-color: #eeeeee;
        box-shadow: none;
        border-bottom: none;
    }

}
.navbar {
    min-height: 60px;
}
.table-striped {
    border: 0
}
.table-bordered>tbody>tr>td,
.table-bordered>tbody>tr>th,
.table-bordered>tfoot>tr>td,
.table-bordered>tfoot>tr>th,
.table-bordered>thead>tr>td,
.table-bordered>thead>tr>th {
    text-align: center;
    padding: 10px 15px;
    font-size:14px;
    font-weight: 400
}
.table-bordered>thead>tr>td,
.table-bordered>thead>tr>th {
    font-weight: 600;
    font-size:14px;
    color: #FFF;
    background-color: #673AB7;
    padding: 10px 15px
}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #F5F5F5
}
.table-bordered>tbody>tr>td.strong,
.table-bordered>thead>tr>th.strong {
    font-size:14px;
    font-weight: 600;
    text-align: left
}
.table-holder {
    background-color: #FFF;
    border-radius: 4px
}
table .btn {
    padding: 4px 16px
}
@media (min-width: 768px) and (max-width: 991px) {
    .sm-hide {
        display: none
    }
    .header-intro {
        text-align: center
    }
}
@media (max-width: 767px) {
    .xs-hide {
        display: none
    }
    .header-intro {
        text-align: center
    }
    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
        text-align: center;
        padding: 5px;
        font-size:14px;
        font-weight: 400
    }
}
.hello-head{font-weight: bold;font-variant: small-caps;text-align: center;font-size: 28px;}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</head>
<body>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">Coin Price</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="nav-home nav-current"><a href="index.php">Home</a></li>
</ul>
</div>
<!-- /.container -->
</nav>
<br />
<br />

<div class="container">
<div class="page-header text-center">
<h2 class="hello-head">Cryptocurrency price Ticker</h2>
</div>
</div>

<div class="container">
<div class="row">     
<div class="col-lg-12"> 

<div class="table-responsive">  
<table id="pricetable" class="table table-striped table-bordered">
<thead>
<tr>
<th class="strong">Rank</th>
<th class="strong">Name</th>
<th class="strong">Price(INR)</th>
<th class="strong">BTC</th>
</tr>
</thead>
</table>
</div>

</div>
</div>
<div>
<br />
<br />

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/kt-2.3.2/r-2.2.1/datatables.min.js"></script>

<script type="text/javascript">

$(document).ready(function (){
   $('#pricetable').dataTable( {
     "ajax": {
         "url": "api/inrr.php",
         "dataSrc": "prices",
         "bDeferRender": true
     },

     "language": {
   "loadingRecords": "Please wait - Fetch Coin Pricing..."
},
     "columns": [
         { "data": "rank" },
         { "data": "name" },
         { "data": "price_inr" },
         { "data": "price_btc" }
     ]
   });
});

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>