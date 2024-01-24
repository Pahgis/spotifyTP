
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
            audio.src=""
            datas.forEach(data => {
                if (data["id"] === cliqueId) {
                    audio.src = data['link']
                    img.src=data["image_album"]
                    audio.play()
                    pause.style.display ="block"
                    play.style.display="none"
                }
            });
        })


}
let li = document.querySelectorAll("li")

li.forEach(el => {
   el.addEventListener("click", function(e){
    console.log(e.target)
    getmp3(e.target.id)
   })
});

window.addEventListener("click", function (e) {
    
    
    console.log(audio)
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