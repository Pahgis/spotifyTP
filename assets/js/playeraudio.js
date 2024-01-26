
let audio = document.querySelector(".audio")
let play = document.querySelector(".play")
let pause = document.querySelector(".pause")
let volume= document.querySelector("#volume")
let carrousel = document.querySelector(".carrouselOn")
let ajouts = document.querySelector(".albumlist")
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
                    console.log(audio)
                    audio.play()
                    console.log(audio.duration)
                    pause.style.display ="block"
                    play.style.display="none"
                }
            });
        })


}


window.addEventListener("click", function (e) {
    console.log(e.target)
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
                ajouts.innerHTML+= `<li id="${datas[i]["id"]}" class="card mb-1 py-2 ps-2 border border-black cardPerso" >${datas[i]["name_artist"]} : ${datas[i]["name"]} </li>`
            }
        }
    })
}

