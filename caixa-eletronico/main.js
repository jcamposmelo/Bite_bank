//função que trata valor de input do usaurio
function formatarMoeda(elemento) {   
    let valor = elemento.value.replace(/\D/g, '');    
    valor = parseFloat(valor);

    // Verificar se o valor é um valor não numerico e definir como zero
    if (isNaN(valor)) {
        valor = 0;
    }
    //converte input para padrão de moeda brasieliro
    valor = valor.toLocaleString('pt-BR', { 
        style: 'currency', 
        currency: 'BRL',
        maximumSignificantDigits: 5
    });    
    elemento.value = valor;
}
//função que esconde valor de saldo
function toggleVisibility() {
    var saldoParagraph = document.getElementById('saldo-paragraph');
    var eyeIcon = document.getElementById('eye-icon');

    // Alternar a visibilidade e o filtro de desfoque no css
    if (saldoParagraph.style.filter === 'blur(5px)') {
        saldoParagraph.style.filter = 'none';
        eyeIcon.innerHTML = '👁️';
    } else {
        saldoParagraph.style.filter = 'blur(5px)';
        eyeIcon.innerHTML = '👁️';
    }
}
