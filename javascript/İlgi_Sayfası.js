fetch("https://imdb8.p.rapidapi.com/auto-complete?q=game",{
    "method": "GET",
	"headers": {
		"X-RapidAPI-Key": "091059e830msh8fbfc85c13c8cb4p147ee2jsn12c21cc35575",
		"X-RapidAPI-Host": "imdb8.p.rapidapi.com"
	}
})

.then(response=>response.json())
.then(data=> {
    const list=data.d;

    list.map((item)=> {
        const name=item.l;
        const poster= item.i.imageUrl;
        const movie= `<li><img src="${poster}"> <h2>${name}</h2></li>`
        document.querySelector('.movies').innerHTML +=movie;
        
    })
})
    
.catch(err=>{
    console.error(err);
})

