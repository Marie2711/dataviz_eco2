// jQuery
var v1list = [];
var v2list = [];
var v3list = [];
var v1 = 0;
var v2 = 0;
var v3 = 0;

var moy = 0

$('.slide_container_verticlal_1').on('input',function(e){
    v1list.push($(this).val())
    console.log("valeur n°1",v1list)
    v1 = v1list[v1list.length-1]
    console.log(v1)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});

$('.slide_container_verticlal_2').on('input',function(e){
    v2list.push($(this).val())
    console.log("valeur n°2",v2list)
    v2 = v2list[v2list.length-1]
    console.log(v2)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});

$('.slide_container_verticlal_3').on('input',function(e){
    v3list.push($(this).val())
    console.log("valeur n°3",v3list)
    v3 = v3list[v3list.length-1]
    console.log(v3)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});