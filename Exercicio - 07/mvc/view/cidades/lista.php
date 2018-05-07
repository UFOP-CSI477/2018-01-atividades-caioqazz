<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de cidades(as)</title>
	<style type="text/css">
      /* Comentário CSS */
      body{
        background-color: MintCream ;
      }
      table, th, td {
        border: 1px dotted; black;
        border-right: medium solid black;
        border-left: medium solid black;
        font-family: arial , tahoma;
        font-size: 15px;
         background-color: white;
      }
      h1 {
          font-size: 28pt;
          text-align: center;
          color: black;
      }
      table {
        margin:auto; 
        width: 70%;
        height: 80%;
      }
      caption {
        font-size: 14pt;
        font-family: arial black, tahoma;
      }
      .number{
        text-align: center;
        font-size: 16pt;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      }
      .id{
        width: 2%;
        height: 2%;
        text-align: center;
        font-size: 16pt;
        font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;

      }
      .first{
         border: 3px solid black;
        font-size: 16pt;
        font-family: Palatino, "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, serif;
      }
      tr{
        
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      }
    </style>
	
  </head>
  <body>
    <h1>Tabela de Estados(as)</h1>
    <table>

      <tr >
        <th class="first">Identificação</th>
        <th class="first">Nome</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td class="id"><?= $linha['id'] ?></td>
        <td class="number"><?= $linha['nome'] ?></td>
      </tr>
    <?php endforeach ?>

    </table>








  </body>
</html>
