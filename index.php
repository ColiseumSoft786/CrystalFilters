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
    <label class="switch">
        <input type="checkbox" class="col-4" onclick="updatePolish()">
        <span class="slider round"></span>
    </label>
    </div>
    <div class="">
        <label for="">Polish</label>
        <input type="text" id="polish">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right">
    <label class="switch">
        <input type="checkbox" onclick="updateSymmetry()">
        <span class="slider round"></span>
    </label>
    </div>
    <div class="">
        <label for="">Symmetry</label>
        <input type="text" id="symmetry">
    </div>
    </div>
     <div class="col-4">
    <div class="float-right">
    <label class="switch">
        <input type="checkbox" onclick="updateFluorescence()">
        <span class="slider round"></span>
    </label>
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
    <label class="switch">
        <input type="checkbox" onclick="updateDepth()">
        <span class="slider round"></span>
    </label>
    </div>
    <div class="">
        <label for="">Depth %</label>
        <input type="text" id="depth">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right">
    <label class="switch">
        <input type="checkbox" onclick="updateTable()">
        <span class="slider round"></span>
    </label>
    </div>
    <div class="">
        <label for="">Table %</label>
        <input type="text" id="table">
    </div>
    </div>
    <div class="col-4">
    <div class="float-right">
    <label class="switch">
        <input type="checkbox" onclick="updateLW()">
        <span class="slider round"></span>
    </label>
    </div>
    <div class="">
        <label for="">L/W Ratio</label>
        <input type="text" id="lw">
    </div>
    </div>
<div class="col-sm-5">
      <button type="button" class="btn btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
        <div class="handle"></div>
      </button>
    </div>
</div>
</div>
<div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
<button class="offset-md-6 btn-primary btn" id="more">More</button>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
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