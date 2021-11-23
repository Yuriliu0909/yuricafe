//Get products from the db on page load
document.addEventListener('DOMContentLoaded', ()=>{
    postData('/yuricafe/services/service-main.php',{req:'menu'} ).then((response)=>{
        response.forEach((res)=>{
            console.log(res['name'] + ' '+ res['price']);
        })
    });
});

async function postData(url, data) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    return response.json();
}