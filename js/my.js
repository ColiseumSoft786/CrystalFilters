function myFunction() {
    var newvar = 'false';
    var price = document.getElementById("price").value;
    var carat = document.getElementById("carat").value;
    var cut = document.getElementById("cut").value;
    var color = document.getElementById("color").value;
    var clarity = document.getElementById("clarity").value;
    var polish = document.getElementById("polish").value;
    console.log(price);
    console.log(carat);
    console.log(cut);
    console.log(color);
    console.log(clarity);
    console.log(polish);

}
$("#price").ionRangeSlider({
    type: "double",
    grid: true,
    min: 278,
    max: 30291,
    from: 200,
    to: 30000,
    prefix: "$"
});

// Call sliders update method with any params

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
$("#polish").ionRangeSlider({
    type: "double",
    grid: true,
    values: ["G","VG","EX"],
    disable: true
});
$("#symmetry").ionRangeSlider({
    type: "double",
    grid: true,
    values: ["G","VG","EX"],
    disable: true
});
$("#fluorescence").ionRangeSlider({
    type: "double",
    grid: true,
    values: ["Very Strong","Strong","Med","Faint","None/Neg."],
    disable: true
});
$("#depth").ionRangeSlider({
    type: "double",
    grid: true,
    min: 45.0,
    max: 86.0,
    postfix: "%",
    disable: true
});
$("#table").ionRangeSlider({
    type: "double",
    grid: true,
    min: 49.0,
    max: 89.0,
    postfix: "%",
    disable: true
});
$("#lw").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0.75,
    max: 2.75,
    disable: true
});
var polish_slider = $("#polish").data("ionRangeSlider");
var polish_sataus = false;
function updatePolish(){
    if (polish_sataus == false){
        polish_slider.update({
            disable: false
        });
        polish_sataus = true;
    }
    else{
        polish_slider.update({
            disable: true
        });
        polish_sataus = false;
    }
}

var symmetry_sataus = false;
var symmetry_slider = $("#symmetry").data("ionRangeSlider");
function updateSymmetry(){
    if (symmetry_sataus == false){
        symmetry_slider.update({
            disable: false
        });
        symmetry_sataus = true;
    }
    else{
        symmetry_slider.update({
            disable: true
        });
        symmetry_sataus = false;
    }
}
var fluorescence_sataus = false;
var fluorescence_slider = $("#fluorescence").data("ionRangeSlider");
function updateFluorescence(){
    if (fluorescence_sataus == false){
        fluorescence_slider.update({
            disable: false
        });
        fluorescence_sataus = true;
    }
    else{
        fluorescence_slider.update({
            disable: true
        });
        fluorescence_sataus = false;
    }
}
var depth_sataus = false;
var depth_slider = $("#depth").data("ionRangeSlider");
function updateDepth(){
    if (depth_sataus == false){
        depth_slider.update({
            disable: false
        });
        depth_sataus = true;
    }
    else{
        depth_slider.update({
            disable: true
        });
        depth_sataus = false;
    }
}
var table_sataus = false;
var table_slider = $("#table").data("ionRangeSlider");
function updateTable(){
    if (table_sataus == false){
        table_slider.update({
            disable: false
        });
        table_sataus = true;
    }
    else{
        table_slider.update({
            disable: true
        });
        table_sataus = false;
    }
}
var lw_sataus = false;
var lw_slider = $("#lw").data("ionRangeSlider");
function updateLW(){
    if (lw_sataus == false){
        lw_slider.update({
            disable: false
        });
        lw_sataus = true;
    }
    else{
        lw_slider.update({
            disable: true
        });
        lw_sataus = false;
    }
}
$(document).ready(function(){
    $("#more").click(function(){
        $("#toggle").slideToggle();
    });
    $("#toggle").hide();

});