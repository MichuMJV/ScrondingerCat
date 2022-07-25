let url = 'http://localhost:8000/usuarios'
let botonG=document.getElementById("formu")
let errori=document.getElementById("error")

function post(event){
    event.preventDefault()
    console.log("hola")
    let ID_nameE=document.getElementById("ID_name").value
    let User_nameE=document.getElementById("User_name").value
    let correoE=document.getElementById("correo").value
    let contrasenaE=document.getElementById("contrasena").value
    let fotoE=document.getElementById("foto").value
    /*let data = {        
        ID_name:ID_nameE,
        User_name:User_nameE,
        correo:correoE,
        contrasena:contrasenaE,
        foto:fotoE};*/
    const data=new FormData()
    data.append('ID_name',ID_nameE)
    data.append('User_name',User_nameE)
    data.append('correo',correoE)
    data.append('contrasena',contrasenaE)
    data.append('foto',fotoE)
    console.log(data,new URLSearchParams(data).toString())
    fetch(url, {
        mode: 'no-cors',
        method:'POST',
        body:data,
        headers:{
            'Content-Type': 'application/json'
        }
        }).then(res => res.text())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));
    
}

botonG.addEventListener("submit", post)
