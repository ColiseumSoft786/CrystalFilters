<!DOCTYPE html>
<html>
<head>
	<title>Crystal Filters</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinModern.css">
	<link rel="stylesheet" type="text/css" href="css/my.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css">
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>

</head>
<body>

<script src="js/vendor/jquery-1.12.3.min.js"></script>
<script src="js/ion-rangeSlider/ion.rangeSlider.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>



<style>
    body{
        font-size: 90%;
    }
    .checkbox {
        padding-left: 20px; }
    .checkbox label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
    }
    .checkbox label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 3px;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
    .checkbox label::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: 0;
        top: 0;
        margin-left: -20px;
        padding-left: 3px;
        padding-top: 1px;
        font-size: 11px;
        color: #555555; }
    .checkbox input[type="checkbox"] {
        opacity: 0; }
    .checkbox input[type="checkbox"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px; }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c"; }
    .checkbox input[type="checkbox"]:disabled + label {
        opacity: 0.65; }
    .checkbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed; }
    .checkbox.checkbox-circle label::before {
        border-radius: 50%; }
    .checkbox.checkbox-inline {
        margin-top: 0; }

    .checkbox-primary input[type="checkbox"]:checked + label::before {
        background-color: #428bca;
        border-color: #428bca; }
    .checkbox-primary input[type="checkbox"]:checked + label::after {
        color: #fff; }

    .checkbox-danger input[type="checkbox"]:checked + label::before {
        background-color: #d9534f;
        border-color: #d9534f; }
    .checkbox-danger input[type="checkbox"]:checked + label::after {
        color: #fff; }

    .checkbox-info input[type="checkbox"]:checked + label::before {
        background-color: #5bc0de;
        border-color: #5bc0de; }
    .checkbox-info input[type="checkbox"]:checked + label::after {
        color: #fff; }

    .checkbox-warning input[type="checkbox"]:checked + label::before {
        background-color: #f0ad4e;
        border-color: #f0ad4e; }
    .checkbox-warning input[type="checkbox"]:checked + label::after {
        color: #fff; }

    .checkbox-success input[type="checkbox"]:checked + label::before {
        background-color: #5cb85c;
        border-color: #5cb85c; }
    .checkbox-success input[type="checkbox"]:checked + label::after {
        color: #fff; }

    .radio {
        padding-left: 20px; }
    .radio label {
        display: inline-block;
        position: relative;
        padding-left: 5px; }
    .radio label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 50%;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out;
        transition: border 0.15s ease-in-out; }
    .radio label::after {
        display: inline-block;
        position: absolute;
        content: " ";
        width: 11px;
        height: 11px;
        left: 3px;
        top: 3px;
        margin-left: -20px;
        border-radius: 50%;
        background-color: #555555;
        -webkit-transform: scale(0, 0);
        -ms-transform: scale(0, 0);
        -o-transform: scale(0, 0);
        transform: scale(0, 0);
        -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
    .radio input[type="radio"] {
        opacity: 0; }
    .radio input[type="radio"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px; }
    .radio input[type="radio"]:checked + label::after {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1); }
    .radio input[type="radio"]:disabled + label {
        opacity: 0.65; }
    .radio input[type="radio"]:disabled + label::before {
        cursor: not-allowed; }
    .radio.radio-inline {
        margin-top: 0; }

    .radio-primary input[type="radio"] + label::after {
        background-color: #428bca; }
    .radio-primary input[type="radio"]:checked + label::before {
        border-color: #428bca; }
    .radio-primary input[type="radio"]:checked + label::after {
        background-color: #428bca; }

    .radio-danger input[type="radio"] + label::after {
        background-color: #d9534f; }
    .radio-danger input[type="radio"]:checked + label::before {
        border-color: #d9534f; }
    .radio-danger input[type="radio"]:checked + label::after {
        background-color: #d9534f; }

    .radio-info input[type="radio"] + label::after {
        background-color: #5bc0de; }
    .radio-info input[type="radio"]:checked + label::before {
        border-color: #5bc0de; }
    .radio-info input[type="radio"]:checked + label::after {
        background-color: #5bc0de; }

    .radio-warning input[type="radio"] + label::after {
        background-color: #f0ad4e; }
    .radio-warning input[type="radio"]:checked + label::before {
        border-color: #f0ad4e; }
    .radio-warning input[type="radio"]:checked + label::after {
        background-color: #f0ad4e; }

    .radio-success input[type="radio"] + label::after {
        background-color: #5cb85c; }
    .radio-success input[type="radio"]:checked + label::before {
        border-color: #5cb85c; }
    .radio-success input[type="radio"]:checked + label::after {
        background-color: #5cb85c; }
</style>

<style>

</style>

<form id="filterform" action="ajax/filter.php">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h3>Search For Diamonds</h3>
                <hr>
            </div>
            <div class="col-4">
                <label for="">Shape</label>
                <?php
                include_once "ajax/Connection.php";
                $conn = new Connection();
                $conn = $conn->getConnection();
                $q = "SELECT DISTINCT shape FROM round_diamonds";
                $stmt = $conn->prepare($q);
                $stmt->execute();
                $shapes = $stmt->fetchAll();
//                print_r($shapes);

                ?>

                <div class="row">
                    <?php
                    foreach($shapes as $item){
                        ?>
                        <div class="col-md-3">
                            <div class="checkbox checkbox-info checkbox-circle">
                                <input checked onchange="change()" id="<?php echo $item['shape'] ?>" name="<?php echo $item['shape'] ?>" type="checkbox">
                                <label for="<?php echo $item['shape'] ?>">
                                    <?php echo $item['shape'] ?>
                                </label>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                    <!--<div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox2" name="princess" type="checkbox">
                            <label for="checkbox2">
                                Princess
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox3" name="emerald" type="checkbox">
                            <label for="checkbox3">
                                Emerald
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox4" name="asscher" type="checkbox">
                            <label for="checkbox4">
                                Asscher
                            </label>
                        </div>
                    </div>-->

<!--                    <div class="col-md-12" style="margin-top: 5px"></div>-->

                    <!--<div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox5" name="cushion" type="checkbox">
                            <label for="checkbox5">
                                Cushion
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox6" name="marquise" type="checkbox">
                            <label for="checkbox6">
                                Marquise
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox7" name="radiant" type="checkbox">
                            <label for="checkbox7">
                                Radiant
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox8" name="oval" type="checkbox">
                            <label for="checkbox8">
                                Oval&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox9" name="pear" type="checkbox">
                            <label for="checkbox9">
                                Pear&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input onchange="change()" id="checkbox10" name="heart" type="checkbox">
                            <label for="checkbox10">
                                Heart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </label>
                        </div>
                    </div>-->




                    <!--<div class="col-md-3" style="border-radius: 5px 5px;background-color: #434d32;text-align: center;padding-top: 2px;padding-bottom: 2px;color: white">
                        <span class="fa fa-arrow-circle-o-right"></span>
                    </div>-->
                </div>

            </div>



            <script>
                //pricetoinput();
                /*function pricetoinput(){
                    var val = $('#price').val();
                    val = val.split(";");
                    document.getElementById('pricest').value = val[0];
                    document.getElementById('priceen').value = val[1];
                }*/
                function changepriceslider(){
                    var val1 = document.getElementById('pricest').value;
                    var val2 = document.getElementById('priceen').value;
                    var price = $("#price").data("ionRangeSlider");
                    price.update({
                        from: val1,
                        to: val2
                    });
                }function changecaratslider(){
                    var val1 = document.getElementById('caratst').value;
                    var val2 = document.getElementById('caraten').value;
                    var price = $("#carat").data("ionRangeSlider");
                    price.update({
                        from: val1,
                        to: val2
                    });
                }function changedepthslider(){
                    var val1 = document.getElementById('depthst').value;
                    var val2 = document.getElementById('depthen').value;
                    var price = $("#depth").data("ionRangeSlider");
                    price.update({
                        from: val1,
                        to: val2
                    });
                }function changetableslider(){
                    var val1 = document.getElementById('tablest').value;
                    var val2 = document.getElementById('tableen').value;
                    var price = $("#table").data("ionRangeSlider");
                    price.update({
                        from: val1,
                        to: val2
                    });
                }
            </script>
            <div class="col-4">
                <label for="">Price</label>
                <div style="margin-bottom: 10px">
                    <input id="pricest" onblur="changepriceslider()" type="text" style="width: 80px;">
                    <input id="priceen" onblur="changepriceslider()" type="text" style="width: 80px" class="float-right">
                </div>
                <input onchange="change();" type="text" name="price" id="price">
            </div>
            <div class="col-4">
                <label for="">Carat</label>
                <div style="margin-bottom: 10px">
                    <input id="caratst" onblur="changecaratslider()" type="text" style="width: 80px;">
                    <input id="caraten" onblur="changecaratslider()" type="text" style="width: 80px" class="float-right">
                </div>
                <input onchange="change()" type="text" name="carat" id="carat">
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-4">
                <label for="">Cut</label>
                <input onchange="change()" type="text" name="cut" id="cut">
            </div>
            <div class="col-4">
                <label for="">Color</label>
                <input onchange="change()" type="text" name="color" id="color">
            </div>
            <div class="col-4">
                <label for="">Clarity</label>
                <input onchange="change()" type="text" name="clarity" id="clarity">
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row" id="toggle">
            <div class="col-12">
                <hr>
            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                    <label class="switch">
                        <input onchange="change()" type="checkbox" class="col-4" onclick="updatePolish()">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-12">
                    <div>
                        <label for="">Polish</label>
                        <input onchange="change()" name="polish" type="text" id="polish">
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                    <label class="switch">
                        <input onchange="change()" type="checkbox" onclick="updateSymmetry()">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-12">
                    <label for="">Symmetry</label>
                    <input onchange="change()" name="symmetry" type="text" id="symmetry">
                </div>
            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                    <label class="switch">
                        <input onchange="change()" type="checkbox" onclick="updateFluorescence()">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-12">
                    <label for="">Fluorescence</label>
                    <input onchange="change()" name="fluorescence" type="text" id="fluorescence">
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                    <label class="switch">
                        <input onchange="change()" type="checkbox" onclick="updateDepth()">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-12">
                    <label for="">Depth %</label>
                    <div style="margin-bottom: 10px">
                        <input id="depthst" disabled onblur="changedepthslider()" type="text" style="width: 80px;">
                        <input id="depthen" disabled onblur="changedepthslider()" type="text" style="width: 80px" class="float-right">
                    </div>
                    <input onchange="change()" name="depth" type="text" id="depth">
                </div>
            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                    <label class="switch">
                        <input onchange="change()" type="checkbox" onclick="updateTable()">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="col-12">
                    <label for="">Table %</label>
                    <div style="margin-bottom: 10px">
                        <input id="tablest" disabled onblur="changetableslider()" type="text" style="width: 80px;">
                        <input id="tableen" disabled onblur="changetableslider()" type="text" style="width: 80px" class="float-right">
                    </div>
                    <input onchange="change()" name="table" type="text" id="table">
                </div>
            </div>
            <div class="col-4">
                <div class="offset-10 col-2">
                </div>
            </div>
            <!--<div class="col-sm-5">
                <button type="button" class="btn btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
                    <div class="handle"></div>
                </button>
            </div>-->
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="offset-5 col-2">
                <button type="button" class="btn btn-primary btn-block" id="more">More Filters</button>
            </div>

        </div>
    </div>
   <!-- <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
        <label class="onoffswitch-label" for="myonoffswitch">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>-->
<!--    <input type="submit">-->
</form>



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%;font-size: 12px;margin-top: 20px">
        <thead>
            <tr>
                <th style="white-space: nowrap;width: 1%">#</th>
                <th>Shape</th>
                <th>Ct Weight</th>
                <th>Color</th>
                <th>Clarity</th>
                <th>Cut</th>
                <th>Polish</th>
                <th>Symmetry</th>
                <th>Fluorescence</th>
                <th>Price</th>
                <th>Discount</th>
            </tr>
        </thead>
        <tbody id="data">


        </tbody>
        <tfoot>
        <tr>
            <th style="white-space: nowrap;width: 1%">#</th>
            <th>Shape</th>
            <th>Ct Weight</th>
            <th>Color</th>
            <th>Clarity</th>
            <th>Cut</th>
            <th>Polish</th>
            <th>Symmetry</th>
            <th>Fluorescence</th>
            <th>Price</th>
            <th>Discount</th>
        </tr>
        </tfoot>
    </table>
        </div>
    </div>
</div>
<script src="js/my.js"></script>

<script type="text/javascript">

            datatable = $('#example').DataTable();
            change();


</script>

</body>
</html>