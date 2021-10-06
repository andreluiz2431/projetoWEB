function CriaPDF() {
   
    var Skil = document.getElementById('pegarSkill').innerHTML;
    var Exp = document.getElementById('pegarExperiencia').innerHTML;
    var Sobre = document.getElementById('pegarSobre').innerHTML;

    var style = "<style>";
    style = style + "table {width: 100%;font: 20px Calibri;}";
    style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
    style = style + "padding: 2px 3px;text-align: center;}";
    style = style + "</style>";
    // CRIA UM OBJETO WINDOW
   
   
    var win = window.open('', '', 'height=700,width=700');
    
    win.document.write('<html><head>');
    win.document.write('<title>Currículo-FourDevs</title>');   // <title> CABEÇALHO DO PDF.
    win.document.write(style);  // INCLUI UM ESTILO NA TAB HEAD
    win.document.write('<h1>NOME DA PESSOA</h1>');
    win.document.write('<legend>[Endereço] | [Cidade, Estado, CEP] | [telefone] | [email] </legend>');                              
    
    win.document.write('</head>');
    
    win.document.write('<body>');
      
    win.document.write(Sobre);         
    
    
    win.document.write(Skil);

    
    win.document.write(Exp);

    win.document.write('</body></html>');
    win.document.close(); 	                                         // FECHA A JANELA
    win.print();                                                     // IMPRIME O CONTEUDO

}