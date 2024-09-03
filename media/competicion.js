
function getPartidos(event) {
    const form = document.createElement('form');
    form.method = 'POST'; // o 'GET'
    form.action = '/holaMundo/partidos';
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'competicion';
    input.value = event.target.value;
    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();

    //console.log(event);
    //alert(event.target.value);
}


