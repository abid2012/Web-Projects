const fn1 =document.getElementById("fn1")
const em1 =document.getElementById("em1")
const pass1 =document.getElementById("pass1")
const cpass1 =document.getElementById("cpass1")
const ss =document.getElementById("ss")
const yoe =document.getElementById("yoe")
const qual =document.getElementById("qual")


function v(){
    if(fn1.value == ""){
        alert("Full Name is required")
        return false
    }
    else if(!fn1.value.match(
        /^[a-zA-Z]+$/
    )){
        alert("Full Name must be only alphabets")
        return false
    }

    if(em1.value == ""){
        alert("Email is required")
        return false
    }
    else if(!em1.value.toLowerCase()
                .match(
                  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    )){
        alert("Email not valid")
        return false
    }

    if(pass1.value == ""){
        alert("Password is required")
        return false
    }

    else if(pass1.value.length < 8){
        alert("Password must be at least 8 characters")
        return false
    }

    if(cpass1.value == ""){
        alert("Confirm Password required")
        return false
    }

    else if(pass1.value != cpass1.value){
        alert("Password and Confirm Password must match")
        return false
    }


    if(ss.value == ""){
        alert("Subject Specialization is required")
        return false
    }


    if(yoe.value == ""){
        alert("Years of experience is required")
        return false
    }

    else if(!yoe.value.match(
        /^\d+$/
    )){
        alert("Years of experience must be numeric")
        return false
    }

    if(qual.value == ""){
        alert("Qualification is required")
        return false
    }


}