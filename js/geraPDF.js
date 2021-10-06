function CriaPDF() {
  var Skil = document.getElementById('pegarSkill').innerHTML;
  var Exp = document.getElementById('pegarExperiencia').innerHTML;
  var Sobre = document.getElementById('pegarSobre').innerHTML;
  var Nome = document.getElementById('pegarNome').innerHTML;
  var Cep = document.getElementById('CEP').innerHTML;
  var email = document.getElementById('pegarEmail').innerHTML;

  // CRIA UM OBJETO WINDOW

  var win = window.open('', '', 'height=700,width=700');

  win.document.write('<HTML><HEAD>');
  win.document.write(
    '<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">'
  );
  win.document.write('<TITLE></TITLE>');
  win.document.write(
    '<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">'
  );
  win.document.write(
    '<META NAME="CREATED" CONTENT="20161216;123900000000000">'
  );
  win.document.write('<META NAME="CHANGEDBY" CONTENT="leonardo karling">');
  win.document.write(
    '<META NAME="CHANGED" CONTENT="20211006;185700000000000">'
  );
  win.document.write('<META NAME="AppVersion" CONTENT="16.0000">');
  win.document.write(
    '<META NAME="ContentTypeId" CONTENT="0x010100AA3F7D94069FF64A86F7DFF56D60E3BE">'
  );
  win.document.write('<META NAME="DocSecurity" CONTENT="0">');
  win.document.write('<META NAME="HyperlinksChanged" CONTENT="false">');
  win.document.write('<META NAME="LinksUpToDate" CONTENT="false">');
  win.document.write('<META NAME="ScaleCrop" CONTENT="false">');
  win.document.write('<META NAME="ShareDoc" CONTENT="false">');

  win.document.write('</HEAD> <BODY LANG="pt-PT" LINK="#25c0d5" DIR="LTR">');
  win.document.write(
    '<P ALIGN=LEFT STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#151c3a"><FONT FACE="Arial, serif"><FONT SIZE=7 STYLE="font-size: 34pt"><B><SPAN LANG="pt-BR"><br><br>[' +
      Nome +
      ']<br><br></SPAN></B></FONT></FONT></FONT></P>'
  );
  win.document.write(
    '<P STYLE="margin-top: 0.11in; margin-bottom: 0.47in; line-height: 100%">'
  );
  win.document.write(
    '<FONT COLOR="#125f6a"><FONT FACE="Arial, serif"><SPAN LANG="pt-BR"> [' +
      Cep +
      '] | [' +
      email +
      ']</SPAN></FONT></FONT></P>'
  );
  win.document.write(
    '<H1 CLASS="western"><SPAN LANG="pt-BR">Objetivo</SPAN></H1>'
  );
  win.document.write(
    '<P STYLE="margin-bottom: 0.11in"><FONT SIZE=4 STYLE="font-size: 15pt"><SPAN LANG="pt-BR">' +
      Sobre +
      '</SPAN></FONT></P>'
  );
  win.document.write(
    '<H1 CLASS="western"><SPAN LANG="pt-BR">Experiência</SPAN></H1>'
  );
  win.document.write(
    '<P STYLE="margin-bottom: 0.11in"><SPAN LANG="pt-BR">' + Exp + '</SPAN></P>'
  );

  win.document.write(
    '<H1 CLASS="western"><SPAN LANG="pt-BR">Habilidades</SPAN></H1>'
  );
  win.document.write(
    '<H3 STYLE="margin-bottom: 0.11in"><SPAN LANG="pt-BR">' +
      Skil +
      '</SPAN></H2>'
  );
  win.document.write(
    '<P STYLE="margin-left: 0.25in; margin-bottom: 0.11in"><BR><BR>'
  );
  win.document.write('</P> </BODY> </HTML>');

  win.document.close();
  win.print();
}
