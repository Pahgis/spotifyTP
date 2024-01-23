let monBouton = document.querySelector("#btn")

monBouton.addEventListener("click", function(){



})

async function getmp3(cliqueId){


fetch ("./process/Audio_data/play_audio.php")
.then((res)=>{
    console.log(res);
    return res.json()
})
.then((datas)=>{
    console.log(datas)
let sounds = document.querySelector("audio")


console.log(sounds)


datas.forEach(data => {
    if(data["id"] == cliqueId){
sounds.src = data['lien_song']
sounds.play()
console.log(sounds)
    }
});    
})


}


window.addEventListener("click", function(e){
console.log(e.target.id)
getmp3(e.target.id)
})

