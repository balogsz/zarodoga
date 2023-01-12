console.log(document.URL)

for(let obj of document.links)
    if(obj.href==document.URL) {
        obj.style.color="lightgreen"
    }