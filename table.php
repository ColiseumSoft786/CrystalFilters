<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="css/ion.rangeSlider.skinNice.css">
	<link rel="stylesheet" type="text/css" href="css/my.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
  <style type="text/css">
    .toggle {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  height: auto;
  width: 5rem;
  margin: auto;
  cursor: pointer;
}
.toggle-input {
  display: none;
  margin: 0;
}
.toggle-off,
.toggle-on {
  height: 1.8125rem;
  width: 1.8125rem;
  color: rgba(46, 45, 44, 0.1);
  vertical-align: top;
  text-align: center;
  line-height: 1.8125rem !important;
}
.toggle-input:checked + .toggle-controller.default-success {
  border: 0.125rem solid rgba(108, 211, 61, 0.75);
  background: blue;
}
.toggle-input:checked + .toggle-controller.default-success:after {
  left: 1.5625rem;
}
.toggle-controller.default-success {
  position: relative;
  display: inline-block;
  height: 1.5625rem;
  width: 3.325rem;
  border: 0.125rem solid rgba(46, 45, 44, 0.05);
  -webkit-border-radius: 1.5625rem;
  -moz-border-radius: 1.5625rem;
  border-radius: 1.5625rem;
  -webkit-box-shadow: inset 0 0 0.1875rem rgba(46, 45, 44, 0.25);
  -moz-box-shadow: inset 0 0 0.1875rem rgba(46, 45, 44, 0.25);
  box-shadow: inset 0 0 0.1875rem rgba(46, 45, 44, 0.25);
  background: rgba(46, 45, 44, 0.025);
  -webkit-transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.toggle-controller.default-success:after {
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  display: block;
  height: 1.25rem;
  width: 1.5625rem;
  -webkit-border-radius: 1.5625rem;
  -moz-border-radius: 1.5625rem;
  border-radius: 1.5625rem;
  -webkit-box-shadow: 0 0.0625rem 0.125rem rgba(46, 45, 44, 0.2);
  -moz-box-shadow: 0 0.0625rem 0.125rem rgba(46, 45, 44, 0.2);
  box-shadow: 0 0.0625rem 0.125rem rgba(46, 45, 44, 0.2);
  background: white;
  -webkit-transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.toggle-off.active {color:black;}
.toggle-on.active {color:blue;}

  </style>

	</head>
<body>
<?php
    echo $_POST['symmetry'];
    echo $_POST['price'];

?>
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
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>
