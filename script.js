let ubicacionPrincipal = window.pageYOffset;

    if (window.innerWidth <= 800) {
        document.getElementById('nav').style.top = '0';
    } 
    else {
        window.onscroll = () => {
            let Desplazamiento_Actual = window.pageYOffset;
            if (ubicacionPrincipal >= Desplazamiento_Actual) {
                document.getElementById('nav').style.top = '0';
            } else {
                document.getElementById('nav').style.top = '-200px';
            }
            ubicacionPrincipal = Desplazamiento_Actual;
        }
    }

const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");
    
    
    abrir.addEventListener("click", () => {
        nav.classList.add("visible");
    })
    
    cerrar.addEventListener("click", () => {
        nav.classList.remove("visible");
    })