// JavaScript para la interactividad del plano de red
document.addEventListener('DOMContentLoaded', function() {
    const equipos = document.querySelectorAll('.equipo');
    const buscador = document.getElementById('buscador-header');
    const placeholder = document.getElementById('placeholder');
    const infoItems = document.getElementById('info-items');
    const equipoSeleccionado = document.getElementById('equipo-seleccionado');
    
    let equipoActualSeleccionado = null;

    // Función para configurar tooltips siempre a la derecha
    function configurarTooltipsSimples() {
        const equipos = document.querySelectorAll('.equipo');
        equipos.forEach(equipo => {
            // Siempre poner el tooltip a la derecha para evitar superposiciones
            equipo.setAttribute('data-tooltip-pos', 'right');
        });
    }

    // Función para mostrar información del equipo
    function mostrarInfoEquipo(equipo) {
        const ip = equipo.getAttribute('data-ip');
        const nombre = equipo.getAttribute('data-nombre');
        const tipo = equipo.getAttribute('data-tipo');
        const ubicacion = equipo.getAttribute('data-ubicacion');
        const departamento = equipo.getAttribute('data-departamento');
        const id = equipo.getAttribute('data-id');
        const comentario = equipo.getAttribute('data-comentario');

        document.getElementById('info-ip').textContent = ip;
        document.getElementById('info-nombre').textContent = nombre;
        document.getElementById('info-tipo').textContent = tipo;
        document.getElementById('info-ubicacion').textContent = ubicacion;
        document.getElementById('info-departamento').textContent = departamento;
        document.getElementById('info-id').textContent = id;
        
        // Manejar comentarios
        const comentarioElement = document.getElementById('info-comentario');
        comentarioElement.textContent = comentario || 'Sin comentarios';
        
        // Aplicar estilos según el contenido del comentario
        comentarioElement.className = 'info-value comentario';
        
        if (comentario) {
            const comentarioLower = comentario.toLowerCase();
            if (comentarioLower.includes('duplicada') || comentarioLower.includes('revisar') || comentarioLower.includes('problema')) {
                comentarioElement.classList.add('comentario-alerta');
            } else if (comentarioLower.includes('critico') || comentarioLower.includes('no apagar') || comentarioLower.includes('urgente')) {
                comentarioElement.classList.add('comentario-critico');
            } else if (comentarioLower.includes('nuevo') || comentarioLower.includes('correctamente') || comentarioLower.includes('ok')) {
                comentarioElement.classList.add('comentario-info');
            }
        }

        placeholder.style.display = 'none';
        infoItems.style.display = 'block';
    }

    // Función para seleccionar equipo
    function seleccionarEquipo(equipo) {
        if (equipoActualSeleccionado) {
            equipoActualSeleccionado.classList.remove('seleccionado');
        }
        
        equipo.classList.add('seleccionado');
        equipoActualSeleccionado = equipo;
        equipoSeleccionado.textContent = '1';
        
        mostrarInfoEquipo(equipo);
    }

    // Configurar tooltips inicialmente
    configurarTooltipsSimples();

    // Event listeners para los equipos
    equipos.forEach(equipo => {
        equipo.addEventListener('click', function() {
            seleccionarEquipo(this);
        });
    });

    // Búsqueda en tiempo real
    buscador.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        equipos.forEach(equipo => {
            const ip = equipo.getAttribute('data-ip').toLowerCase();
            const nombre = equipo.getAttribute('data-nombre').toLowerCase();
            const departamento = equipo.getAttribute('data-departamento').toLowerCase();
            const comentario = equipo.getAttribute('data-comentario').toLowerCase();
            
            const matches = ip.includes(searchTerm) || 
                          nombre.includes(searchTerm) || 
                          departamento.includes(searchTerm) ||
                          comentario.includes(searchTerm);
            
            equipo.style.display = matches ? 'flex' : 'none';
        });

        // Reconfigurar tooltips después de la búsqueda
        setTimeout(configurarTooltipsSimples, 50);
    });

    // Contador de equipos visibles después de búsqueda
    buscador.addEventListener('input', function() {
        const equiposVisibles = document.querySelectorAll('.equipo[style="display: flex"]').length;
        document.getElementById('total-equipos').textContent = equiposVisibles;
        
        // Si no hay equipos visibles, resetear el contador de seleccionado
        if (equiposVisibles === 0) {
            equipoSeleccionado.textContent = '0';
            if (equipoActualSeleccionado) {
                equipoActualSeleccionado.classList.remove('seleccionado');
                equipoActualSeleccionado = null;
            }
            placeholder.style.display = 'block';
            infoItems.style.display = 'none';
        }
    });

    // Reconfigurar tooltips cuando la ventana cambie de tamaño
    window.addEventListener('resize', configurarTooltipsSimples);

    // Reconfigurar tooltips cuando se mueva el scroll del plano
    document.getElementById('plano').addEventListener('scroll', function() {
        setTimeout(configurarTooltipsSimples, 10);
    });

    // Doble click para centrar en el equipo (opcional)
    equipos.forEach(equipo => {
        equipo.addEventListener('dblclick', function() {
            const plano = document.getElementById('plano');
            const rect = plano.getBoundingClientRect();
            const equipoRect = this.getBoundingClientRect();
            
            // Centrar la vista en el equipo
            plano.scrollTo({
                left: equipoRect.left - rect.width / 2 + equipoRect.width / 2,
                top: equipoRect.top - rect.height / 2 + equipoRect.height / 2,
                behavior: 'smooth'
            });

            // Reconfigurar tooltips después de mover el scroll
            setTimeout(configurarTooltipsSimples, 100);
        });
    });
});