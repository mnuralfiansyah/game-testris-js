<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">

      table {
        border:1px solid black;
        border-collapse:collapse;
      }
      td.yellow { background-color: yellow; }
      td.blue { background-color: blue; }
    </style>
  </head>
  <body>

    <table border="1" class="tableGame">
      <?php for ($i=1; $i <=10 ; $i++) { ?>
        <tr>
          <?php for ($j=1; $j <=5 ; $j++) { ?>
            <td width="20px" align="center" class="yellow tr_<?=$i?> td_<?=$j?>">_</td>
          <?php } ?>
          </tr>
      <?php } ?>
    </table>

  </body>

  <script src="./jquery.js" ></script>
  <script>

  var lines_all = [];
  $('.tableGame tr').each(function(index, tr) {
      lines = $('td', tr).map(function(index, td) {
          return $(td).text();
      });


        lines_all[index] = lines;
  });

  console.log(lines_all);



  // for(var i = 1; i <= 10; i++){
  //
  // }

// var i           =0;
// var maxnya      = 10;
// var perulangan  = 1;
//   while (perulangan) {
//     i++;
//     if (i==maxnya) {
//       maxnya--;
//       i = 0;
//     }
//
//     if (maxnya==1) {
//       perulangan=0;
//     }
//
//     (function(i){
//         setTimeout(function(){
//             // console.log( i);
//             $('.tr_'+i).removeClass('yellow').addClass('blue');
//
//             if (i !=1) {
//               $('.tr_'+(i-1)).removeClass('blue').addClass('yellow');
//               console.log('.tr_'+(i-1));
//             }
//         }, i*1000);
//     })(i);
//   }

  var i = 0;
  var iterasi = 0;
  var perulangan = true;
  var maxnya      = 10;
  do {

    if (i == maxnya) {
      i=0;
      maxnya--;
    }
    i++;
    iterasi++;



    if (maxnya==1) {
      perulangan=false;
    }



    (function(i){
        setTimeout(function(){
            $('.tr_'+i).removeClass('yellow').addClass('blue');

            if (i !=1) {
              $('.tr_'+(i-1)).removeClass('blue').addClass('yellow');
              console.log('.tr_'+(i-1));
            }
        }, iterasi*1000);
    })(i);

  } while (perulangan);


  </script>
</html>
