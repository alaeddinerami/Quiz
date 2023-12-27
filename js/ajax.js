


const questionAnswer=document.querySelector("#questionAnswer")



const xhr=new XMLHttpRequest();

xhr.open("GET","./../vue/fromquiz.php")

xhr.onreadystatechange=function(){
    if (xhr.status===200 && xhr.readyState===4) {
        console.log(xhr.responseText);
      questionAnswer.innerHTML = xhr.responseText
    }
}



xhr.send();