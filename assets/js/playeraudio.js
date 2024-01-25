
let audio = document.querySelector(".audio")
let play = document.querySelector(".play")
let pause = document.querySelector(".pause")
let volume= document.querySelector("#volume")

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
                    pause.style.display ="block"
                    play.style.display="none"
                }
            });
        })


}


window.addEventListener("click", function (e) {
    
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
    
})

volume.addEventListener("change",function(){
   
    audio.volume= volume.value/10
})

let ajout = document.querySelector(".albumlist")
function album(name){
   
    console.log(ajout)
    fetch("./process/playlist/album.php")
    .then((res)=>{
        return res.json()
    })
    .then((datas)=>{
        ajout.innerHTML = ""
        console.log(datas)
        let li = document.createElement("li")
        ajout.append(li)
        datas.forEach(data => {
            if(data["name_artist"] === name){
                ajout.innerHTML += `${data["name"]}`
            }
        });
    })
}

album(Rammstein)