
    let input = document.querySelector('#searchbar1')
    let input1 = document.querySelector('#searchbar2')
    let ajout = document.querySelector(".titreajout")
    let accueil = document.querySelector(".accueil")
    input.addEventListener("keyup",function(e){
        if(input.value===""){
            accueil.style.display ="block"
        }
        accueil.style.setProperty("display","none","important")
       process(input.value)
    })
    input1.addEventListener("keyup",function(e){
        if(input1.value==""){
            accueil.style.display = "block"
        }
        accueil.style.setProperty("display","none","important")
        process(input1.value)
     })



    function process(x){
        fetch("./process/searchbar/searchbar.php")
        .then((res)=>{
          console.log("okokok")
            return res.json()
        })
        .then((datas)=>{
           console.log("okok")
            let li = document.createElement("li")
            ajout.append(li)
           
            ajout.innerHTML=""
        
            for (i = 0; i < datas.length; i++) { 
                if (datas[i]["name"].toLowerCase().includes(x) && x != "") {
                    ajout.innerHTML+= `<li id="${datas[i]["id"]}" class="card mb-1 py-2 ps-2 border border-black cardPerso" >${datas[i]["name_artist"]} : ${datas[i]["name"]}   <button class="btn addplay" id="${datas[i]["id"]}">Add</button></li>`
                }
            }
        })
    }


   



    