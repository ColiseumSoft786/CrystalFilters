<!DOCTYPE html>
<html>
<head>
	<title>Crystal Filters</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinNice.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3>Search For Diamonds</h3>
            <hr>
        </div>
        <div class="col-4">
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




<script src="js/vendor/jquery-1.12.3.min.js"></script>
<script src="js/ion-rangeSlider/ion.rangeSlider.js"></script>
<script>
    $("#price").ionRangeSlider({
        type: "double",
        grid: true,
        min: 278,
        max: 30291,
        from: 200,
        to: 800,
        prefix: "$"
    });
    $("#carat").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0.23,
        max: 21.00,
        from: 1.5,
        to: 15,
        step: 0.1
    });
    $("#cut").ionRangeSlider({
        type: "double",
        grid: true,
        from: 1,
        to: 5,
        values: ["Good", "Very Good", "Ideal", "Astor Ideal"]
    });
    $("#color").ionRangeSlider({
        type: "double",
        grid: true,
        from: 3,
        to: 6,
        values: ["J","I","H","G","F","E","D"]
    });
    $("#clarity").ionRangeSlider({
        type: "double",
        grid: true,
        from: 1,
        to: 5,
        values: ["SI2","SI1","VS2","VS1","VVS2","VVS1","IF","FL"]
    });
</script>

</body>
</html>