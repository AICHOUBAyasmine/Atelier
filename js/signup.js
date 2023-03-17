const form =document.querySelector(".signup form");
continueBtn = document.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();//preventing form from submitting
}
continueBtn.onclick = ()=> {
     //use ajax
     let xhr = new XMLHttpRequest(); //creating xml object
     xhr.open("post", "/pages/signup.php", true);
     xhr.onload =()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                
            }
            
        }

     }
     let formData = new FormData(form)
     xhr.send(formData);

}
     
