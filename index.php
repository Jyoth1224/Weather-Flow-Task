<?php
  ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Weather</title>
  </head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
  <body>
    <nav class="navbar navbar-expand-sm ">
      <div class="container">
        <a href="/" class="navbar-brand ">
        <img src="images/logo1.PNG" style="height:70px;width:280px"> &nbsp;
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fas fa-bars"></i>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <b>
              <li class="nav-item">
                <a href="" class="nav-link active" style="font-size: 15px;">
                Home
                </a>
              </li>
            </b>
            <b>
              <li class="nav-item">
                <a href="" class="nav-link"style="font-size: 15px;">
                Contact Us
                </a>
              </li>
            </b>
          </ul>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li>
              <a href="#">
              <img class="icon" src="images/linkedin.PNG" >
              </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li>
              <a href="#">
              <img class="icon" src="images/twitter.PNG">
              </a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li>
              <a href="#">
              <img class="icon" src="images/insta.PNG">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5" >
      <div class="row"style="margin-top: 40px;">
        <div class="col-sm-7">
          <span class="welcome">Welcome to the Weather Predictor ! </span>
          <p class="mt-4"  style="font-size: 15px;">
            You're in <?php $cityname = $_POST['batch']; echo $cityname; ?> <br><br>
            fsefnobeso nfoen fowendf owiend foiwend ioend ioennifew <br> fseoiuendf oseifneoisfneoifnoeisnf oseinfoiesfneionf ieonfoei!! <br>
          </p>
          <br>
        </div>
        <div class="col-sm-5">
          <img src="images/image1.PNG" style="height:150px; width:350px">
        </div>
      </div>
      <div class="row">
        <div class="btnStyle">
          <button type="button" class="btn btn-danger" style="height: 40px;" data-bs-toggle="modal" data-bs-target="#forecast">
          <span class="btnText">CHECK FORECAST</span>
          </button>&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#change-loc">
          <span class="btnfont" style="color: black;">Change location</span>
          </button>
          <!-- Check forecast modal -->
          <div class="modal fade" id="forecast" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="forecast" aria-hidden="true" >
            <div class="modal-dialog " >
              <div class="modal-content" style="background-color: #d7e8f1;">
                <div class="modal-header">
                  <h5 class="modal-title" id="forecast" style="font-size: 20px; font-weight: bold;">
                    <i class="fa fa-map-marker " aria-hidden="true"></i> <?php $cityname = $_POST['batch']; echo $cityname; ?>
                  </h5>
                  <br>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <label>High: 28 C</label><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b><label>Low: 24 C</label>
                  </form>
                </div>
                <div class="row" style="background-color: #578fab; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                  <label style="font-size: 15px;">HOURLY FORECAST:</label><br><br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>Now</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="ParaID"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>10:30</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="ParaID1"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>11:30</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="ParaID2"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>12:30</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="ParaID3"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>01:30</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="ParaID4"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <br>  <br> 
                </div>
                <br><br>
                <div class="row" style="background-color: #578fab; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                  <label style="font-size: 15px;">Details :</label><br><br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>Precipitation</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="DetailID"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>East Wind</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="DetailID1"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>HUM</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="DetailID2"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>Visibility</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="DetailID3"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>UV</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="DetailID4"></p>
                      </center>
                    </div>
                  </div>
                  <br>
                  <br>  <br> 
                </div>
                <br><br>
                <div class="row" style="background-color: #4d8eb1; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                  <script>
                    $(function() {
                    
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("ParaID").innerHTML = (data.hourly[0].Temperature.Value +" " +data.hourly[0].Temperature.Unit );
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("ParaID1").innerHTML = (data.hourly[1].Temperature.Value +" " +data.hourly[1].Temperature.Unit );
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("ParaID2").innerHTML = (data.hourly[2].Temperature.Value +" " +data.hourly[2].Temperature.Unit );
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("ParaID3").innerHTML = (data.hourly[3].Temperature.Value +" " +data.hourly[3].Temperature.Unit );
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("ParaID4").innerHTML = (data.hourly[4].Temperature.Value +" " +data.hourly[4].Temperature.Unit );
                    });
                    
                    });
                    
                  </script>
                </div>
                <br>
                <div class="row" style="background-color: #4d8eb1; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                  <script>
                    $(function() {
                    
                    $.getJSON('Delhi.json', function(data) {
                    document.getElementById("DetailID").innerHTML = (data.hourly[0].PrecipitationProbability + " mm");
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("DetailID1").innerHTML = (data.hourly[0].Wind.Speed.Value + " km/h");
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("DetailID2").innerHTML = (data.hourly[0].RelativeHumidity+" %");
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("DetailID3").innerHTML = (data.hourly[0].Visibility.Value + " km");
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("DetailID4").innerHTML = (data.hourly[0].UVIndexText);
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                        var city = "<?php echo $cityname ?>";
                            var appendIT = city+".json"
                    
                    $.getJSON(appendIT, function(data) {
                    document.getElementById("DetailID5").innerHTML = (data.hourly[0].UVIndexText);
                    });
                    
                    });
                    
                  </script>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
          <!-- Check forecast-5 modal -->
          <div class="modal fade" id="forecast-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="forecast-5" aria-hidden="true" >
            <div class="modal-dialog">
              <div class="modal-content" style="background-color: #d7e8f1;">
                <div class="modal-header">
                  <h5 class="modal-title" id="forecast" style="font-size: 20px; font-weight: bold;">
                    <i class="fa fa-map-marker " aria-hidden="true"></i> 
                  </h5>
                  <br>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <label>High: <label id="MaxTemp"> </label> C</label><b>&nbsp;&nbsp;|&nbsp;&nbsp;</b><label>Low:<label id="MinTemp"> </label> C </label>
                  </form>
                </div>
                <div class="row" style="background-color: #4d8eb1; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                  <p style="font-size:20px"; > Daily Forecast</p>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>28/10</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="Para"></p>
                      </center>
                    </div>
                    <div class="row" style="font-size: 9px"; id="subtitle2">
                      <center>High:<label style="font-weight:0"; id="Max"></label>|Low:<label id="Min"></label></center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>29/10</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="Para1"></p>
                      </center>
                    </div>
                    <div class="row" style="font-size: 9px"; id="subtitle2">
                      <center>High:<label style="font-weight:0"; id="Max1"></label>|Low:<label id="Min1"></label></center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>30/10</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="Para2"></p>
                      </center>
                    </div>
                    <div class="row" style="font-size: 9px"; id="subtitle2">
                      <center>High:<label style="font-weight:0"; id="Max2"></label>|Low:<label id="Min2"></label></center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>31/10</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="Para3"></p>
                      </center>
                    </div>
                    <div class="row" style="font-size: 9px"; id="subtitle2">
                      <center>High:<label style="font-weight:0"; id="Max3"></label>|Low:<label id="Min3"></label></center>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm">
                    <div class="row" id="title">
                      <center>01/11</center>
                    </div>
                    <div class="row" id="subtitle1">
                      <center>
                        <p  id="Para4"></p>
                      </center>
                    </div>
                    <div class="row" style="font-size: 9px"; id="subtitle2">
                      <center>High:<label style="font-weight:0"; id="Max4"></label>|Low:<label id="Min4"></label></center>
                    </div>
                    <br> <br>
                  </div>
                  <br>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Max = data.Fiveday[0].Temperature.Maximum.Value;
                    
                    document.getElementById("Max").innerHTML = Max;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[0].Temperature.Minimum.Value;
                    
                    document.getElementById("Min").innerHTML = Min;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Max = data.Fiveday[1].Temperature.Maximum.Value;
                    
                    document.getElementById("Max1").innerHTML = Max;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[1].Temperature.Minimum.Value;
                    
                    document.getElementById("Min1").innerHTML = Min;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Max = data.Fiveday[2].Temperature.Maximum.Value;
                    
                    document.getElementById("Max2").innerHTML = Max;
                    document.getElementById("MaxTemp").innerHTML = Max;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[2].Temperature.Minimum.Value;
                    
                    document.getElementById("Min2").innerHTML = Min;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Max = data.Fiveday[3].Temperature.Maximum.Value;
                    
                    document.getElementById("Max3").innerHTML = Max;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[3].Temperature.Minimum.Value;
                    
                    document.getElementById("Min3").innerHTML = Min;
                    document.getElementById("MinTemp").innerHTML = Min;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Max = data.Fiveday[4].Temperature.Maximum.Value;
                    
                    document.getElementById("Max4").innerHTML = Max;
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[4].Temperature.Minimum.Value;
                    
                    document.getElementById("Min4").innerHTML = Min;
                    });
                    
                    });
                    
                    
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[0].Temperature.Minimum.Value;
                    var Max = data.Fiveday[0].Temperature.Maximum.Value;
                    var Avg = (Min+Max)/2 + " C";
                    document.getElementById("Para").innerHTML = (Avg);
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[1].Temperature.Minimum.Value;
                    var Max = data.Fiveday[1].Temperature.Maximum.Value;
                    var Avg = (Min+Max)/2 + " C";
                    document.getElementById("Para1").innerHTML = (Avg);
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[2].Temperature.Minimum.Value;
                    var Max = data.Fiveday[2].Temperature.Maximum.Value;
                    var Avg = Math.ceil((Min+Max)/2) + " C";
                    document.getElementById("Para2").innerHTML = (Avg);
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[3].Temperature.Minimum.Value;
                    var Max = data.Fiveday[3].Temperature.Maximum.Value;
                    var Avg = (Min+Max)/2 + " C";
                    document.getElementById("Para3").innerHTML = (Avg);
                    });
                    
                    });
                    
                  </script>
                  <script>
                    $(function() {
                    
                            var city = "<?php echo $cityname ?>";
                            var appendIT = city+"5Day.json"                                   
                    
                    $.getJSON(appendIT, function(data) {
                    var Min = data.Fiveday[4].Temperature.Minimum.Value;
                    var Max = data.Fiveday[4].Temperature.Maximum.Value;
                    var Avg = (Min+Max)/2 + " C";
                    document.getElementById("Para4").innerHTML = (Avg);
                    });
                    
                    });
                    
                  </script>
                </div>
                <br>
                <div class="row" style="background-color: #4d8eb1; margin-left: 10px; margin-right: 10px; border-radius: 5px;">
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
          <!-- Change location modal -->
          <div class="modal fade" id="change-loc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="change-loc" aria-hidden="true" >
            <div class="modal-dialog">
              <div class="modal-content" style="background-color: #d7e8f1;">
                <div class="modal-header">
                  <h5 class="modal-title" id="change-loc" style="font-size: 20px; font-weight: bold;">Change the location</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" method = "POST">
                    <label style="font-size: 15px; font-weight:10; padding-left: 20px; padding-right: 20px; font-style: inherit;">Please Select the location for you've to check the weather condition!</label>
                    <div class="form-group">
                      <label for="dest">Destination</label>
                      <div class="dropdown">
                        <select class="select-option btn-outline-sebtncondary dropdown-toggle" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 40%; padding: 10px 10px 10px 10px ; font-size: 13px; color: black;"   name="batch" required>
                          <option selected>Bangalore</option>
                          <option >Delhi</option>
                          <option >Chennai</option>
                          <option >Mumbai</option>
                          <option >Hyderabad</option>
                        </select>
                        <!-- <button class=" btn-outline-sebtncondary dropdown-toggle" type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 40%; padding: 10px 10px 10px 10px ; font-size: 13px; color: black;">
                          Select Your Destination
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                          <a class="dropdown-item" href="#">Bangalore</a>
                          <a class="dropdown-item" href="#">Chennai</a>
                          <a class="dropdown-item" href="#">Delhi</a>
                          <a class="dropdown-item" href="#">Hyderabad</a>
                          <a class="dropdown-item" href="#">Mumbai</a>
                          </div> -->
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit"  name="submit" class="btn btn-danger" data-bs-dismiss="modal">CHANGE</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 auto-layout">
        <span class="pred"> How do we get the data and prediction?</span>
        <br>
        <span style="font-size: 18px;">
        Lorem epsum fbsdifcbij fkjebfkjebfkejbfewkjbfwkejbfwkefefb wef wef efnwekjfbkewjfb wkje febf weubfwef wiuefb
        ewfu webfuwe bfewufb efb ebf uewbfiuwefbwefweiuf wueibf iuwbefiu efewiufbwiuefbi euwbiuebfe bfe fejsdefsjnekdf
        ksjdnf kjsdnfkjesdnf kjsekdfjeskfjc fksdjfcekejsdfjkes efjebsf beskdb efkjebf kjbejk fbwekjsf bkewb</span>
        <div class="mt-4">
          <button type="button" class="btn btn-outline-secondary"data-bs-toggle="modal" data-bs-target="#forecast-5">
          <span style="color: black; font-size: 15px;">5- Day forecast</span>
          </button>
        </div>
        <br><br>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <img src="images/image2.PNG" style="height:200px;width:250px">
        </div>
        <div class="col-sm-8 text">
          <p style="font-size: 15px;">
            Lorem epsum fbsdifcbij fkjebfkjebfkejbfewkjbfwkejbfwkefefb wef wef efnwekjfbkewjfb wkje febf weubfwef wiuefb ewfu webfuwe bfewufb efb ebf uewbfiuwefbwefweiuf wueibf iuwbefiu efewiufbwiuefbi euwbiuebfe bfe fejsdefsjnekdf ksjdnf kjsdnfkjesdnf kjsekdfjeskfjc fksdjfcekejsdfjkes efjebsf beskdb efkjebf kjbejk fbwekjsf bkewb
          </p>
        </div>
      </div>
    </div>
    <footer class="text-center text-lg-start  text-white">
      <section class="">
        <div class="container text-center text-md-start">
          <div class="row mt-5">
            <div class="col-sm-3 mx-auto mb-4 mt-5">
              <h6 class="fw-bold mb-2">
                <img src="images/logo2.PNG" style="height: 70px; width:170px;">
              </h6>
              <p>
                cosibncno eincoiwencoiewncoew inwdw slkxc malsx Ikdclw dlwd flke dflwkef kleflkew flwkeflek fike fefkelflefleflekwflke flek fkl e
              </p>
              <button type="button" class="btn btn mx-2 ">
              <span class="btn" style="background-color: rgb(224, 60, 87); color: white; width: 200px; margin-left: -50px;">Check Forecast <i class='fas fa-arrow-right'></i>
              </span>
              </button>
            </div>
            <div class="col-sm-4 mx-auto mb-3 mt-5">
              <h6 class="text-uppercase fw-bold mb-4">
                GET IN TOUCH
              </h6>
              <span>
              <i class="fa fa-map-marker"></i> &nbsp; llesfnee cnu efoin eoifn oewifnewo inf sdc csdcneno ie wolwemfwokm fwe w ecen cloenwo
              we - 355233
              <br>
              <i class="fa fa-envelope"></i> &nbsp;cisubdcusb@gmail.com</span>
              <br>
              <br>
              <span class="mt-3">
              <b>FOLLOW US</b><br>
              <a href="#">
              <img class="icon" src="images/twit.PNG">
              </a>
              <a href="#">
              <img class="icon" src="images/fb.PNG">
              </a>
              <a href="#">
              <img class="icon" src="images/ln.PNG">
              </a><br>
              </span>
            </div>
            <div class="col-md-5 col-lg-3 mb-md-0 mb-4 mt-5 col-xl-3  ">
              <h6 class="text-uppercase fw-bold mb-4">QUICK LINKS</h6>
              <p>
                <a href="#">Home</a>
              </p>
              <p>
                <a href="#"> Contact US</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr class="p-2 border-top">
      <label>Copyright© 2023. Weather prediction</label>
    </footer>
  </body>
</html>