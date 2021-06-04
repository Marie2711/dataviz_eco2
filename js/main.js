// JS

// jQuery
let v1 = [];
let v2 = [];
let v3 = [];
var myv1 = 0;
var myv2 = 0;
var myv3 = 0;

$('.slide_container_verticlal_1').on('input',function(e){
    v1.push($(this).val());
    var myv1 = v1[v1.length-1]
    console.log(myv1)

});

$('.slide_container_verticlal_2').on('input',function(e){
    v2.push($(this).val());
    var myv2 = v2[v2.length-1]
    console.log(myv2)
});

$('.slide_container_verticlal_3').on('input',function(e){
    v3.push($(this).val());
    var myv3 = v3[v3.length-1]
    console.log(myv3)
});