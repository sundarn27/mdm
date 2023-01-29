<?php


require('library/php-excel-reader/excel_reader2.php');

require('library/SpreadsheetReader.php');

require('db_con.php');


if(isset($_POST['Submit'])){


  $file = ['application/vnd.ms-excel','text/csv','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];

  if(in_array($_FILES["file"]["type"],$file)){


    $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


    $Reader = new SpreadsheetReader($uploadFilePath);


    $totalSheet = count($Reader->sheets());


    echo "You have total ".$totalSheet." sheets".


    $html="<table border='1'>";

    $html.="<tr><th>Title</th><th>Description</th></tr>";


    /* For Loop for all sheets */

    for($i=0;$i<$totalSheet;$i++){


      $Reader->ChangeSheet($i);


      foreach ($Reader as $Row)

      {

        $html.="<tr>";

        $id = isset($Row[0]) ? $Row[0] : '';

        $email = isset($Row[1]) ? $Row[1] : '';

        $email = isset($Row[2]) ? $Row[2] : '';

        $html.="<td>".$id."</td>";

        $html.="<td>".$email."</td>";

        $html.="<td>".$password."</td>";

        $html.="</tr>";


        $query = "insert into items(title,description) values('".$title."','".$description."')";


        $mysqli->query($query);

       }


    }


    $html.="</table>";

    echo $html;

    echo "<br />Data Inserted in dababase";


  }else { 

    die("<br/>Sorry, File type is not allowed. Only Excel file."); 

  }


}


?>