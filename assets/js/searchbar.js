
    let input = document.querySelector('#searchbar')
    
 console.log(input)
 let interval;
    input.addEventListener("keyup",async function(e){
      
       process(input.value)
    })
  



    function process(x){
        fetch("./process/searchbar/searchbar.php")
        .then((res)=>{
            return res.json()
        })
        .then((datas)=>{
            let p = document.querySelector(".test")
                    p.innerHTML=""
            console.log(datas)
            datas.forEach(data => {
                if(x===data["name"]){
                    console.log("ok")
                    
                    p.innerHTML+= `<p>${data["name"]}</p>`
                }
            });
        })
    }


   



    