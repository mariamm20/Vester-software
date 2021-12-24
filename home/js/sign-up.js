


//api countries

fetch('https://restcountries.com/v2/all').then(res =>{
    return res.json();
}).then(data =>{
    let output= '<option>Select Country</option>';
    
    data.forEach(data =>{
         output += `<option value=${data.name}> ${data.name} (+${data.callingCodes})</option>`
        // console.log(`<img width="10" height="10" src="${data.flag}" />`)
    })
    document.getElementById("countries").innerHTML = output;
    
}).catch(err =>{
    console.log(err);
})


