// variables
let v1list = [];
let v2list = [];
let v3list = [];
let v1 = 50;
let v2 = 50;
let v3 = 50;
let moy = 0


// Curseurs n°1 (Viandes / Vege)

$('.slide_container_verticlal_1').on('input',function(e){
    v1list.push($(this).val())
    console.log("valeur n°1",v1list)
    v1 = v1list[v1list.length-1]
    console.log(v1)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});


// Curseurs n°2 (Population)

$('.slide_container_verticlal_2').on('input',function(e){
    v2list.push($(this).val())
    console.log("valeur n°2",v2list)
    v2 = v2list[v2list.length-1]
    console.log(v2)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});


// Curseurs n°3 (Energies)

$('.slide_container_verticlal_3').on('input',function(e){
    v3list.push($(this).val())
    console.log("valeur n°3",v3list)
    v3 = v3list[v3list.length-1]
    console.log(v3)
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
    console.log(v1,v2,v3)
    console.log("MOYENNE",Number(moy))
});



// AVANT le final countdown déterminer les graphes


// FINAL COUNTDOWN
let cd_input = document.querySelector(".annee_fdm")
setInterval(function(){
    
    // Définition des unités de temps
    let fdm = Math.floor(2050 + (2050*(moy/100)))
    
    // Affichage
    cd_input.innerHTML = fdm
    
}, 1000);