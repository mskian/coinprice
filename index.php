<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Cryptocurrency price Ticker</title>
<meta name="description" content="CoinPrice - Online Cryptocurrency price Ticker Table."/>
<link rel="shortcut icon" href="favicon.png" type="image/png" />
<?php $current_page = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo '<link rel="canonical" href="'.$current_page.'" />'; ?>


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/kt-2.3.2/r-2.2.1/datatables.min.css"/>

<style>
body {
    background-color: #ffffff;   
    font-family:'Exo 2',sans-serif;
    font-size: 16px;
}
.navbar {
    background-color:#1976d2;
}
.navbar-nav > li{
    font-size: 18px;
    padding-left: 10px;
    padding-right: 10px;
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

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark">
<a class="navbar-brand" href="/">
Coin Price                
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
<ul class="navbar-nav ml-auto">
<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
<li class="nav-item active"><a class="nav-link" href="inr.php">Price (INR)</a></li>
</ul>
</div>
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
<th class="strong">MarketCap (USD)</th>
<th class="strong">Price(USD)</th>
<th class="strong">BTC</th>
<th class="strong">Circulating Supply</th>
<th class="strong">Volume 24h (USD)</th>
<th class="strong">Change (1H)</th>
<th class="strong">Change (24H)</th>
<th class="strong">Change (7d)</th>
</tr>
</thead>
</table>

</div>
</div>
</div>
</div>

<br />
<br />

<script src="https://cdn.datatables.net/v/dt/dt-1.10.16/kt-2.3.2/r-2.2.1/datatables.min.js"></script>

<script>

$(document).ready(function (){
    var table = $('#pricetable').DataTable( {
     "ajax": {
         "url": "api/getall.php",
         "dataSrc": "prices",
         "bDeferRender": true
     },

     "language": {
   "loadingRecords": "Please wait - Fetch Coin Pricing..."
},

     "columnDefs": [ {

        "aTargets": [7,8,9],
        "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
           if ( sData < "0" ) {
                            $(nTd).css('color', 'red')
                            $(nTd).css('font-weight', 'bold')
          }
          if ( sData > "0" ) {
                            $(nTd).css('color', 'green')
                            $(nTd).css('font-weight', 'bold')
          }
        }
}],

     "columns": [
         { "data": "rank" },
         { "data": "name" },
         { "data": "market_cap_usd"},
         { "data": "price_usd" },
         { "data": "price_btc" },
         { "data": "available_supply" },
         { "data": "24h_volume_usd" },
         { "data": "percent_change_1h" },
         { "data": "percent_change_24h" },
         { "data": "percent_change_7d" }
     ]
   });
   setInterval(function () {
      table.ajax.reload();
  }, 120000);
});

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>