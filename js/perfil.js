function adicionarEXP(){
    
    var modal = document.getElementById("addExp");

    var row = document.createElement("div");
    row.setAttribute('class','row');

    var col = document.createElement("div");
    col.setAttribute('class','col-md-12');
    
    var input = document.createElement("input");
    input.setAttribute('type', 'text');
    input.setAttribute('class','form-control');
    input.setAttribute('style','background-color: #333;border: none;');
    input.setAttribute('placeholder','Fale um pouco sobre sua experiência');
    input.setAttribute('aria-label','With textarea');

    var hr = document.createElement("hr");
    col.appendChild(input);
    row.appendChild(col);
    modal.appendChild(row);
    modal.appendChild(hr);

}

function adicionarSKIL(){

    var modal = document.getElementById("addSkil");

    var row = document.createElement("div");
    row.setAttribute('class','row');

    var col = document.createElement("div");
    col.setAttribute('class','col-md-12');

    var input_text= document.createElement("input");
    input_text.setAttribute('type', 'text');
    input_text.setAttribute('class','form-control');
    input_text.setAttribute('style','background-color: #333;border: none;');
    input_text.setAttribute('placeholder','Título de skill');
    input_text.setAttribute('aria-label','With textarea');

    var range = document.createElement("div");
    range.setAttribute('class','range');
    var input_barra= document.createElement("input");
    input_barra.setAttribute('type', 'range');
    input_barra.setAttribute('class','form-range');
    input_barra.setAttribute('min','0');
    input_barra.setAttribute('max','5');
    
    var hr = document.createElement("hr");

    col.appendChild(input_text);
    col.appendChild(input_barra);
    col.appendChild(range);
    row.appendChild(col);
    modal.appendChild(row);
    modal.appendChild(hr);
}


