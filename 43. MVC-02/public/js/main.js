
const items = document.querySelectorAll(".bEliminar");

items.forEach(item => {
    item.addEventListener("click", function(){
        const matricula = this.dataset.matricula;

        const confirm = window.confirm("Deseas eliminar el elemento?");

        if(confirm){
            httpRequest("http://localhost/curso/43.%20MVC-02/consulta/eliminarAlumno/" + matricula, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-alumnos");
                const fila  = document.querySelector("#fila-" + matricula);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}