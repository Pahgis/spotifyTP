
let audio = document.querySelector(".audio")
let audio2 = document.querySelector(".audio2")
let play = document.querySelector(".play")
let pause = document.querySelector(".pause")
let volume= document.querySelector("#volume")
let carrousel = document.querySelector(".carrouselOn")
let ajouts = document.querySelector(".albumlist")
let suivant = document.querySelector(".suivant")
let precedent = document.querySelector(".precedent")
let f = 0
suivant.addEventListener("click", function(e){
    let ids = document.querySelectorAll(".addpl")
    console.log(ids)
    f++
    if(f > ids.length - 1){
        f = 0
    }
    getmp3(ids[f].id)
   
    
})

audio.addEventListener("timeupdate", function(e){
    let ids = document.querySelectorAll(".addpl")
    let end = audio.duration
    let now = audio.currentTime
    if((end-now) < 5){
        audio.volume = audio.volume *0.2
        
    }
    if((end-now) < 4){
        audio.volume = audio.volume *0.2
        
    }
    if((end-now) <  3){
        audio.volume = audio.volume *0.2
        
    }
    if((end-now) <  2){
        audio.volume = audio.volume *0.2
        
    }
    if((end-now) <  1){
        audio.volume = audio.volume *0.2
        
    }
    if(end == 0){
        audio.classList.remove("audio")
        audio2.classList.remove("audio2")
    }
})

precedent.addEventListener("click", function(e){
    let ids = document.querySelectorAll(".addpl")
    f--
    if(f < 0){
        f = 0
    }
    getmp3(ids[f].id)
})

async function getmp3(cliqueId) {

   
    fetch("./process/searchbar/searchbar.php")
        .then((res) => {
          
            return res.json()
        })
        .then((datas) => {
            
            let img = document.querySelector(".albumImg")
            audio.src = ""
            datas.forEach(data => {
             
                if (data["id"] == cliqueId) {
                    audio.src = data['link']
                    console.log("ok")
                    img.src=data["image_album"]
                    audio.play()
                    pause.style.display ="block"
                    play.style.display="none"
                }
            });
        })


}


window.addEventListener("click", function (e) {
    if(e.target.classList[1] == "addplay"){
        addplaylist(e.target.id)
    }
    if(e.target.localName == "li"){
        let li = document.querySelectorAll("li")

    
            getmp3(e.target.id)
           
        
    }
    console.log(e.target)
if(e.target === pause){
    pause.style.display="none"
    play.style.display="block"
    audio.pause();
   
}else if(e.target===play){
    pause.style.display="block"
    play.style.display="none"
    audio.play();
}
if (e.target.name =="album"){
    carrousel.style.display="none"
    album(e.target.id)
}
})

volume.addEventListener("change",function(){
   
    audio.volume= volume.value/10
})



function album(id){
   
   
    fetch("./process/playlist/album.php")
    .then((res)=>{
       
        return res.json()
    })
    .then((datas)=>{
        ajouts.innerHTML = ""
       
        let li = document.createElement("li")
        ajouts.append(li)
        for (i = 0; i < datas.length; i++) { 
            if (datas[i]["id_album"]==id) {
                ajouts.innerHTML+= `<li id="${datas[i]["id"]}" class="card mb-1 py-2 ps-2 border border-black cardPerso" >${datas[i]["name_artist"]} : ${datas[i]["name"]} <button class="btn addplay" id="${datas[i]["id"]}">add</button></li>`
            }
        }
    })
}
let incre = 1; 
let suiv = 0
let array=[]
function addplaylist(id){

    let playlist = document.querySelector(".playlist")
    fetch("./process/playlist/album.php")
    .then((res)=>{
       
        return res.json()
    })
    .then((datas)=>{
       
        datas.forEach(element => {
            if (id == element["id"]) {
                if(incre === 1){
                    getmp3(id)
                }
                playlist.innerHTML  += `<li id="${element["id"]}" data-id="${incre}" class="addpl card mb-1 py-2 ps-2 border border-black cardPerso" >${element["name_artist"]} : ${element["name"]} <button class="btn addplay" id="${element["id"]}"></button></li>`
                incre++;
                array.push(element["id"])
               
            }
        });
        
    })
}
 console.log(array)

