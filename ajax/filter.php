<?php
include_once "Connection.php";
$obj = new Connection();
$conn = $obj->getConnection();

$cuts = array("Good"=>"g","Very Good" => "vg","Ideal" => "i","Astor Ideal" => "ai");
$colors = array("J"=>'j',"I"=>"i","H"=>"h","G"=>"g","F"=>"f","E"=>"e","D"=>"d");
$claritys = array("SI2"=>"si2","SI1"=>"si1","VS2"=>"vs2","VS1"=>"vs1","VVS2"=>"VVS2","VVS1"=>"vvs1","IF"=>"if","FL"=>"fl");
$polishs = array("G"=>"g","VG"=>"vg","EX" => "ex");
$symmetrys = array("G"=>"g","VG"=>"vg","EX" => "ex");
$fluorescences = array("Very Strong" => "vsb","Strong" => "sb","Med." => "mb","Faint" => "faint","None / Neg."=> "none");

//$shape = explode(";","12"); // Checkboxes
$color = explode(";",$_REQUEST['color']); // Strings
$clarity = explode(";",$_REQUEST['clarity']); // Strings
$ratio = explode(";",$_REQUEST['ratio']); // Numbers
$depth = explode(";",$_REQUEST['depth']); // Numbers
$table = explode(";",$_REQUEST['table']); // Numbers
$cut = explode(";",$_REQUEST['cut']); // Strings
$polish = explode(";",$_REQUEST['polish']); // Strings
$symmetry = explode(";",$_REQUEST['symmetry']); // Strings
$fluorescence = explode(";",$_REQUEST['fluorescence']); // Strings
$price = explode(";",$_REQUEST['price']); // Numbers
//$carat = "";

$qratio = "ratio BETWEEN $ratio[0] AND $ratio[1]";
$qdepth = "depth BETWEEN $depth[0] AND $depth[1]";
$qtable = "table BETWEEN $table[0] AND $table[1]";
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
$cut = array_slice($cuts,$is[0],$is[1]);
$qcut = "price IN (";
$lastind = end($cut);
foreach($cut as $key => $item){
    $qcut .= $item;
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
$color = array_slice($colors,$is[0],$is[1]);
$qcolor = "color IN (";
$lastind = end($color);
foreach($color as $key => $item){
    $qcolor .= $item;
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
$clarity = array_slice($claritys,$is[0],$is[1]);
$qclarity = "clarity IN (";
$lastind = end($clarity);
foreach($clarity as $key => $item){
    $qclarity .= $item;
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
$polish = array_slice($polishs,$is[0],$is[1]);
$qpolish = "polish IN (";
$lastind = end($polish);
foreach($polish as $key => $item){
    $qpolish .= $item;
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
$symmetry = array_slice($symmetrys,$is[0],$is[1]);
$qsymmetry = "symmetry IN (";
$lastind = end($symmetry);
foreach($symmetry as $key => $item){
    $qsymmetry .= $item;
    if ($item != $lastind){
        $qsymmetry .= " ,";
    }
}
$qsymmetry .= " )";
// Symmetry End

// Fluorescence Start
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
$fluorescence = array_slice($fluorescences,$is[0],$is[1]);
$qfluorescence = "fluorescence IN (";
$lastind = end($fluorescence);
foreach($fluorescence as $key => $item){
    $qfluorescence .= $item;
    if ($item != $lastind){
        $qfluorescence .= " ,";
    }
}
$qfluorescence .= " )";
// Fluorescence End


$query = "SELECT * FROM round_diamonds WHERE $qcut AND $qclarity AND $qcolor AND $qdepth AND $qfluorescence AND $qpolish AND $qprice AND $qsymmetry AND $qtable";






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



