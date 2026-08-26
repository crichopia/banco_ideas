function rotarIcono(el){
    console.log('rotarIcono called', el);
    if (!el) {
        console.warn('rotarIcono: no element passed');
        return;
    }
    el.classList.toggle('rotado');
}

function abrirDescripcion(id){
    let descripcion;
    if (!id) return;
    if (typeof id === 'string') {
        descripcion = document.getElementById(id);
    } else if (id instanceof Element) {
        descripcion = id;
    } else {
        descripcion = id;
    }
    if (!descripcion) return;
    descripcion.classList.toggle('hidden');
}

const mostrarTodas = document.getElementById('mostrarTodas');


function filtrarIdeas(){
    const filtro = document.getElementById('filtroCategoria').value;
    const ideas = document.querySelectorAll('.Idea');
    
    ideas.forEach(idea => {
        if (filtro === '' || idea.classList.contains(filtro)) {
            idea.style.display = 'flex';
        } else {
            idea.style.display = 'none';
            mostrarTodas.style.display = 'flex';
        }
    });
}

function ideaAleatoria(){

    const elementos = document.querySelectorAll('.Idea');
    const indiceAleatorio = Math.floor(Math.random() * elementos.length);
    const elementoElegido = elementos[indiceAleatorio];
    const idElegido = elementoElegido.id;


    document.querySelectorAll('.Idea').forEach(idea => idea.style.display = 'none');
    elementoElegido.style.display = 'flex';
    mostrarTodas.style.display = 'flex';
}

function mostrarTodasLasIdeas() {
    const elementos = document.querySelectorAll('.Idea');
    elementos.forEach(elemento => {
        elemento.style.display = 'flex';
    });
    mostrarTodas.style.display = 'none';
}