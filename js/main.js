// variables
let v1list = [];
let v2list = [];
let v3list = [];
let v1 = 50;
let v2 = 50;
let v3 = 50;
let moy = 0
let cd_input = document.querySelector(".texte_date_fin_du_monde")
let min_fdm = 2050



// Curseurs n°1 (Viandes / Vege)

$('.slide_container_verticlal_1').on('input',function(e){
    v1list.push($(this).val())
    v1 = v1list[v1list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})


// Curseurs n°2 (Population)

$('.slide_container_verticlal_2').on('input',function(e){
    v2list.push($(this).val())
    v2 = v2list[v2list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})


// Curseurs n°3 (Energies)

$('.slide_container_verticlal_3').on('input',function(e){
    v3list.push($(this).val())
    v3 = v3list[v3list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})

// FINAL COUNTDOWN

setInterval(function(){
    // Définition du temps restants
    let fdm = Math.floor(min_fdm + min_fdm*(moy/100))
    
    // Affichage
    cd_input.innerHTML = fdm
    
}, 1000);
