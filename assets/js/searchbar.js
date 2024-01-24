
    let input = document.querySelector('#searchbar')
    let ajout = document.querySelector(".titreajout")
 
    input.addEventListener("keyup",async function(e){
      console.log(input.value)
       process(input.value)
    })
  



    function process(x){
        fetch("./process/searchbar/searchbar.php")
        .then((res)=>{
          
            return res.json()
        })
        .then((datas)=>{
           
            let li = document.createElement("li")
            ajout.append(li)
           
            ajout.innerHTML=""
        
            for (i = 0; i < datas.length; i++) { 
                if (datas[i]["name"].toLowerCase().includes(x) && x != "") {
                    ajout.innerHTML+= `<li id="${datas[i]["id"]}" class="card mb-1 py-2 ps-2 border border-black cardPerso" >${datas[i]["name_artist"]} : ${datas[i]["name"]} </li>`
                }
            }
        })
    }


   



    