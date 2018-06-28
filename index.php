<!DOCTYPE html>
<html>
<head>
	<title>Crystal Filters</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinNice.css">
	<link rel="stylesheet" type="text/css" href="css/my.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3>Search For Diamonds</h3>
            <hr>
        </div>
        <div class="col-4">
            <span>
            <div class="col-xl-2" style="background-color: #434d32;"><div><img src="img/shape/emerad.png" style="width: 20px;height: 20px"></div></div>
            </span><span><div>aa</div></span>
            <div class="col-xl-2" style="background-color: #3131b2;"><div><img src="img/shape/emerad.png" style="width: 20px;height: 20px"></div></div>
        </div>
        <div class="col-4">
            <label for="">Price</label>
            <input type="text" id="price">
        </div>
        <div class="col-4">
            <label for="">Carat</label>
            <input type="text" id="carat">
        </div>
        <div class="col-12">
            <hr>
        </div>
        <div class="col-4">
            <label for="">Cut</label>
            <input type="text" id="cut">
        </div>
        <div class="col-4">
            <label for="">Color</label>
            <input type="text" id="color">
        </div>
        <div class="col-4">
            <label for="">Clarity</label>
            <input type="text" id="clarity">
        </div>

    </div>
</div>
<div class="container-fluid">
<div class="row" id="toggle">
    <div class="col-12">
        <hr>
    </div>
        <div class="col-4">
    <div class="float-right">
   <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updatePolish()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">Polish</label>
        <input type="text" id="polish">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right">
    <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updateSymmetry()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">Symmetry</label>
        <input type="text" id="symmetry">
    </div>
    </div>
     <div class="col-4">
    <div class="float-right">
   <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updateFluorescence()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">Fluorescence</label>
        <input type="text" id="fluorescence">
    </div>
    </div>
     <div class="col-12">
        <hr>
    </div>
     <div class="col-4">
    <div class="float-right">
    <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updateDepth()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">Depth %</label>
        <input type="text" id="depth">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right ">
      <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updateTable()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">Table %</label>
        <input type="text" id="table">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right">
    <label class="toggle">
    <input type="checkbox" class="toggle-input" onclick="updateLW()">
    <div class="toggle-controller default-success"></div>
  </label><!-- END .toggle -->
    </div>
    <div class="">
        <label for="">L/W Ratio</label>
        <input type="text" id="lw">
    </div>
    </div>
</div>
</div>
<button class="offset-md-6 btn-primary btn" id="more">More</button>
<button id="show_data">Show</button>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div id="tabel_show"></div>
        </div>
    </div>
</div>
<script src="js/vendor/jquery-1.12.3.min.js"></script>
<script src="js/ion-rangeSlider/ion.rangeSlider.js"></script>
<script src="js/my.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>