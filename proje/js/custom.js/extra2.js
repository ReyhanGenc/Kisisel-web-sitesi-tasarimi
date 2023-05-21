let data=fetch("https://jsonplaceholder.typicode.com/posts")
.then(response=>response.json())
.then(veri=>{
    veri.forEach(element => {
      if(element.id<=9)
      {
      listele.innerHTML+=`<li>${element.title}</li>`
      }    
    });
});
