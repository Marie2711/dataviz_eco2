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
let today = new Date().getFullYear()
let time_difference = min_fdm - today

// JQUERY


// Curseurs n°1 (Viandes / Vege)

$('.slide_container_verticlal_1').on('input',function(e){
    v1list.push($(this).val())
    v1 = v1list[v1list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})


// Curseurs n°2 (Population)

$('.slide_container_verticlal_2').on('input',function(e){
    let input_value = document.querySelector('.slide_container_verticlal_2')
    v2list.push(($(this).val())*(100 / input_value.max)) // retourner une valeur par rapport à 100
    v2 = v2list[v2list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})


// Curseurs n°3 (Energies)

$('.slide_container_verticlal_3').on('input',function(e){
    v3list.push($(this).val())
    v3 = v3list[v3list.length-1]
    moy = (Number(v1)+Number(v2)+Number(v3)) / 3
})



// JS

// FINAL COUNTDOWN
setInterval(function(){
    if(moy) {
         // Définition du temps restants
        let diff_moy = 1 - (moy/100)
        let fdm = Math.floor(time_difference * diff_moy)
        
        // Affichage
        cd_input.innerHTML = min_fdm + fdm
    }
    
}, 1000);