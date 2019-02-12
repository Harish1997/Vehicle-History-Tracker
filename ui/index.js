 function search(){
        console.log('called');
        var key=document.getElementById('vin');
        console.log(key.value);
        sessionStorage.setItem('key',key.value);
        window.location="./display.html";       
 }