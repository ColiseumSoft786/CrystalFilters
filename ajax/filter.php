<?php
include_once "Connection.php";
$obj = new Connection();
$conn = $obj->getConnection();

$q = "SELECT DISTINCT shape FROM round_diamonds";
$stmt1 = $conn->prepare($q);
$stmt1->execute();
$shapesfromdb = $stmt1->fetchAll();

//print_r($_REQUEST);

$cuts = array("Poor"=>"p","Fair" => "f","Good" => "g","VG" => "vg","EX" => "ex");
$colors = array("J"=>'j',"I"=>"i","H"=>"h","G"=>"g","F"=>"f","E"=>"e","D"=>"d");
$claritys = array("SI2"=>"si2","SI1"=>"si1","VS2"=>"vs2","VS1"=>"vs1","VVS2"=>"VVS2","VVS1"=>"vvs1","IF"=>"if","FL"=>"fl");
$polishs = array("Poor"=>"p","Fair" => "f","Good" => "g","VG" => "vg","EX" => "ex");
$symmetrys = array("Poor"=>"p","Fair" => "f","Good" => "g","VG" => "vg","EX" => "ex");
$fluorescences = array("Very Strong" => "vsb","Strong" => " sb","Med." => " mb","Faint" => " faint","None / Neg."=> "none");

$round = "";
if(isset($_REQUEST['round'])){
    $round = $_REQUEST['round'];
}
$princess = "";
if(isset($_REQUEST['princess'])){
    $round = $_REQUEST['princess'];
}
$emerald = "";
if(isset($_REQUEST['emerald'])){
    $round = $_REQUEST['emerald'];
}
$asscher = "";
if(isset($_REQUEST['asscher'])){
    $round = $_REQUEST['asscher'];
}
$cushion = "";
if(isset($_REQUEST['cushion'])){
    $round = $_REQUEST['cushion'];
}
$marquise = "";
if(isset($_REQUEST['marquise'])){
    $round = $_REQUEST['marquise'];
}
$radiant = "";
if(isset($_REQUEST['radiant'])){
    $round = $_REQUEST['radiant'];
}
$oval = "";
if(isset($_REQUEST['oval'])){
    $round = $_REQUEST['oval'];
}
$pear = "";
if(isset($_REQUEST['pear'])){
    $round = $_REQUEST['pear'];
}
$heart = "";
if(isset($_REQUEST['heart'])){
    $round = $_REQUEST['heart'];
}
$qshape = "shape IN (";
    foreach($shapesfromdb as $item){
        if (isset($_REQUEST[$item['shape']])){
            $qshape .= "'". $item['shape'] . "' ,";
        }
    }
    /*if(isset($_REQUEST['round'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['princess'])){
        $qshape .= "'Princess' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['emerald'])){
        $qshape .= "'Emerald' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['asscher'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['cushion'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['marquise'])){
        $qshape .= "'Marquise' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['radiant'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['oval'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['pear'])){
        $qshape .= "'' ,";
    }else{
        $qshape .= "'' ,";
    }
    if(isset($_REQUEST['heart'])){
        $qshape .= "''";
    }else{
        $qshape .= "''";
    }*/
$qshape .= " '' )";

$color = explode(";",$_REQUEST['color']); // Strings
$clarity = explode(";",$_REQUEST['clarity']); // Strings
$ratio = array(0,10000);
if (isset($_REQUEST['ratio'])){
    $ratio = explode(";",$_REQUEST['ratio']); // Numbers
}
$depth = array(0,10000);
if (isset($_REQUEST['depth'])){
    $depth = explode(";",$_REQUEST['depth']); // Numbers
}
$table = array(0,10000);
if (isset($_REQUEST['table'])){
    $table = explode(";",$_REQUEST['table']); // Numbers
}
$cut = explode(";",$_REQUEST['cut']); // Strings
$polish = array("Poor","EX");
if (isset($_REQUEST['polish'])){
    $polish = explode(";",$_REQUEST['polish']); // Strings
}
$symmetry = array("Poor","EX");
if (isset($_REQUEST['symmetry'])){
    $symmetry = explode(";",$_REQUEST['symmetry']); // Strings
}
$fluorescence = array("Very Strong","None / Neg.");
if (isset($_REQUEST['fluorescence'])){
    $fluorescence = explode(";",$_REQUEST['fluorescence']); // Strings
}
$price = explode(";",$_REQUEST['price']); // Numbers
//$carat = "";

$qratio = "ratio BETWEEN $ratio[0] AND $ratio[1]";
$qdepth = "depth BETWEEN $depth[0] AND $depth[1]";
$qtable = "tbl BETWEEN $table[0] AND $table[1]";
$qprice = "orgprice BETWEEN $price[0] AND $price[1]";

// CUT Start
$is= array();
foreach($cut as $item){
    $i = 0;
    foreach ($cuts as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$cut = array_slice($cuts,$is[0],$is[1]+1);
$qcut = "cut IN (";
$lastind = end($cut);
foreach($cut as $key => $item){
    $qcut .= "'".$item ."'";
    if ($item != $lastind){
        $qcut .= " ,";
    }
}
$qcut .= " )";
// Cut END

// Color Start
$is= array();
foreach($color as $item){
    $i = 0;
    foreach ($colors as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$color = array_slice($colors,$is[0],$is[1]+1);
$qcolor = "color IN (";
$lastind = end($color);
foreach($color as $key => $item){
    $qcolor .= "'".$item ."'";
    if ($item != $lastind){
        $qcolor .= " ,";
    }
}
$qcolor .= " )";
// Color End

// Clarity Start
$is= array();

foreach($clarity as $item){
    $i = 0;
    foreach ($claritys as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$clarity = array_slice($claritys,$is[0],$is[1]+1);
$qclarity = "clarity IN (";
$lastind = end($clarity);
foreach($clarity as $key => $item){
    $qclarity .= "'".$item ."'";
    if ($item != $lastind){
        $qclarity .= " ,";
    }
}
$qclarity .= " )";
// Clarity End

// Polish Start
$is= array();
foreach($polish as $item){
    $i = 0;
    foreach ($polishs as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$polish = array_slice($polishs,$is[0],$is[1]+1);
$qpolish = "polish IN (";
$lastind = end($polish);
foreach($polish as $key => $item){
    $qpolish .= "'".$item ."'";
    if ($item != $lastind){
        $qpolish .= " ,";
    }
}
$qpolish .= " )";
// Polish End

// Symmetry Start
$is= array();
foreach($symmetry as $item){
    $i = 0;
    foreach ($symmetrys as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$symmetry = array_slice($symmetrys,$is[0],$is[1]+1);
$qsymmetry = "symmetry IN (";
$lastind = end($symmetry);
foreach($symmetry as $key => $item){
    $qsymmetry .= "'".$item ."'";
    if ($item != $lastind){
        $qsymmetry .= " ,";
    }
}
$qsymmetry .= " )";
// Symmetry End

// Fluorescence Start
$is= array();
foreach($fluorescence as $item){
    $i = 0;
    foreach ($fluorescences as $key => $inner){
        if ($item == $key){
            array_push($is,$i);
            break;
        }
        $i++;
    }
}
$fluorescence = array_slice($fluorescences,$is[0],$is[1]+1);
$qfluorescence = "fluorescence IN (";
$lastind = end($fluorescence);
foreach($fluorescence as $key => $item){
    $qfluorescence .= "'".$item ."'";
    if ($item != $lastind){
        $qfluorescence .= " ,";
    }
}
$qfluorescence .= " )";
// Fluorescence End

$query = "SELECT * FROM round_diamonds WHERE $qshape AND $qprice AND $qclarity AND $qcolor AND $qdepth AND $qfluorescence AND $qpolish AND $qcut AND $qsymmetry AND $qtable";

//echo $query ."<br><br>";

$stmt = $conn->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll();

$count = 1;
/*$start = '';

$start .= '<tr>
                    <td style="text-align: center" colspan="11">Total Rows: '.count($data).'</td>
                </tr>
                ';

foreach ($data as $item){

    $start .= '<tr>
                <td>'.$count.'</td>
                <td>'.$item["shape"].'</td>
                <td>$'.$item["orgprice"].'</td>
                <td>'.$item["cut"].'</td>
                <td>'.$item["color"].'</td>
                <td>'.$item["clarity"].'</td>
                <td>'.$item["polish"].'</td>
                <td>'.$item["symmetry"].'</td>
                <td>'.$item["fluorescence"].'</td>
                <td>'.$item["depth"].'</td>
                <td>'.$item["tbl"].'</td>
            </tr>';
    $count++;
}

$start .= '';*/

$json = array();
$i = 1;
foreach ($data as $item){
    $new = array($i,$item["shape"],$item["orgprice"],$item["cut"],$item["color"],$item["clarity"],$item["polish"],$item["symmetry"],$item["fluorescence"],$item["depth"],$item["tbl"]);
    array_push($json,$new);
    $i++;
}




echo json_encode($json);

/*
 * shape
 * color
 * clarity
 * ratio
 * depth
 * table
 * cut
 * polish
 * symmetry
 * fluorescence
 * orgprice
 * price/pricepercarat = carat
 * */



