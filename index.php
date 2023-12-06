<DOCTYPE html>

<head>
    <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/chess.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.9.2.custom.min.css">
    <!—Tag Icon Page-->
    <link rel="shortcut icon"type="image/x-icon" href="img/favicon.ico"/>
    <title>Chesss</title>


</head>

<body>
<table><tr><td align="center">
            <!-- <img src='img/towerB.png' class="establishevents()">
             <img src='img/horseB.png' class="establishevents()">
             <img src='img/bishopB.png' class="establishevents()">
             <img src='img/qweenB.png' class="establishevents()">
             <img src='img/kingB.png' class="establishevents()">
             <img src='img/pawnB.png' class="establishevents()">
             <img src='img/towerB.png' class="ui-draggable">-->

            <img src="img/towerB.png" width="50" height="50"  style="cursor:move;" class="">
            <img src="img/bishopB.png" width="50" height="50"  style="cursor:move;"class="">
            <img src="img/qweenB.png" width="50" height="50"  style="cursor:move;" class="">
            <img src="img/kingB.png" width="50" height="50"  style="cursor:move;"  class="">
            <img src="img/pawnB.png" width="50" height="50"  style="cursor:move;"  class="">


            <!-- <img src="img/bishopB.png" width="50" height="50"  style="cursor:move;"class="file bishop fWhite bishopB">
             <img src="img/qweenB.png" width="50" height="50"  style="cursor:move;" class="file qween fWhite qweenB">
             <img src="img/kingB.png" width="50" height="50"  style="cursor:move;"  class="file king fWhite kingB">
             <img src="img/pawnB.png" width="50" height="50"  style="cursor:move;"  class="file pawn fWhite pawnB">-->
        </td></tr></table>

 <div id="board" >
    <div id="18" class="white" value="empty">
       <!--      <img src='img/towerN.png' class='file tower fBlack towerN'>-->
    </div>
    <div id="28" class="black" value="empty">
        <!--        <img src='img/horseN.png' class='file horse fBlack horseN'>-->
    </div>
    <div id="38" class="white" value="empty">
       <!--     <img src='img/bishopN.png' class='file bishop fBlack bishopN'>-->
    </div>
    <div id="48" class="black" value="empty">
        <!--      <img src='img/qweenN.png' class='file qween fBlack qweenN'>-->
    </div>
    <div id="58" class="white" value="empty">
        <!--     <img src='img/kingN.png' class='file king fBlack kingN'>-->
    </div>
    <div id="68" class="black" value="empty">
      <!--  <img src='img/bishopN.png' class='file bishop fBlack bishopN'>-->
    </div>
    <div id="78" class="white" value="empty">
      <!--  <img src='img/horseN.png' class='file horse fBlack horseN'>-->
    </div>
    <div id="88" class="black" value="empty">
        <!--    <img src='img/towerN.png' class='file tower fBlack towerN'>-->
    </div>
    <br />
    <div id="17" class="black" value="empty">
     <!--  <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="27" class="white" value="empty">
        <!--         <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="37" class="black" value="empty">
        <!--         <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="47" class="white" value="empty">
        <!--         <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="57" class="black" value="empty">
        <!--     <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="67" class="white" value="empty">
        <!-- <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="77" class="black" value="empty">
        <!--    <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <div id="87" class="white" value="empty">
        <!--   <img src='img/pawnN.png' class='file pawnN fBlack ' value='false'>-->
    </div>
    <br />
    <div id="16" class="white" value="empty"> </div>
    <div id="26" class="black" value="empty"> </div>
    <div id="36" class="white" value="empty"> </div>
    <div id="46" class="black" value="empty"> </div>
    <div id="56" class="white" value="empty"> </div>
    <div id="66" class="black" value="empty"> </div>
    <div id="76" class="white" value="empty"> </div>
    <div id="86" class="black" value="empty"> </div>
    <br />
    <div id="15" class="black" value="empty"> </div>
   <div id="25" class="white" value="empty"> </div>
    <div id="35" class="black" value="empty"> </div>
    <div id="45" class="white" value="empty"> </div>
    <div id="55" class="black" value="empty"> </div>
    <div id="65" class="white" value="empty"> </div>
    <div id="75" class="black" value="empty"> </div>
    <div id="85" class="white" value="empty"> </div>
    <br />
    <div id="14" class="white" value="empty"> </div>
    <div id="24" class="black" value="empty"> </div>
    <div id="34" class="white" value="empty"> </div>
    <div id="44" class="black" value="empty"> </div>
    <div id="54" class="white" value="empty"> </div>
    <div id="64" class="black" value="empty"> </div>
    <div id="74" class="white" value="empty"> </div>
    <div id="84" class="black" value="empty"> </div>
    <br />
    <div id="13" class="black" value="empty"> </div>
    <div id="23" class="white" value="empty"> </div>
    <div id="33" class="black" value="empty"> </div>
    <div id="43" class="white" value="empty"> </div>
    <div id="53" class="black" value="empty"> </div>
    <div id="63" class="white" value="empty"> </div>
    <div id="73" class="black" value="empty"> </div>
    <div id="83" class="white" value="empty"> </div>
    <br />
    <div id="12" class="white" value="empty">
      <!--     <img src='img/pawnB.png' class='file pawnB fWhite ' value='empty'>-->
    </div>
    <div id="22" class="black" value="busy">
             <img src='img/pawnB.png' class='file pawnB fWhite ' value='empty'>
    </div>
    <div id="32" class="white" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <div id="42" class="black" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <div id="52" class="white" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <div id="62" class="black" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <div id="72" class="white" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <div id="82" class="black" value="empty">
        <!--      <img src='img/pawnB.png' class='file pawnB fWhite ' value='false'>-->
    </div>
    <br />
    <div id="11" class="black" value="empty">
        <!--<img src='img/towerB.png' class='file tower fWhite towerB'>-->
    </div>
    <div id="21" class="white" value="busy">
            <img src='img/horseB.png' class='file horse fWhite horseB'>
    </div>
    <div id="31" class="black" value="empty">
        <!--      <img src='img/bishopB.png' class='file bishop fWhite bishopB'>-->
    </div>
    <div id="41" class="white" value="busy">
        <img src='img/qweenB.png' class='file qween fWhite qweenB'>
    </div>
    <div id="51" class="black" value="busy">
       <img src='img/kingB.png' class='file king fWhite kingB'>
    </div>
    <div id="61" class="white" value="busy">
             <img src='img/bishopB.png' class='file bishop fWhite bishopB'>
    </div>
    <div id="71" class="black" value="empty">
        <!--      <img src='img/horseB.png' class='file horse fWhite horseB'>-->
    </div>
    <div id="81" class="white" value="busy">
          <img src='img/towerB.png' class='file tower fWhite towerB'>
    </div>




   <!-- <form action="" method="get">
        Postion:
            <input type="text" name="position" size=15>

        Color
            <input type="color" name="color" size=15 />
        Piece
            <input type="text" name="piece" size=15>

        <input type="submit" name="submit" value="submit" id="gobutton" />
    </form>-->

     <img src='img/horseB.png' class="file horse fWhite horseB">

</body>

<?php

/*$pos=$_GET['position'];
$col=$_GET['color'];
$piece=$_GET['piece'];


        if($piece=='pawn')
        {
            echo '<div id="board">';

            echo '<div id="$pos" class="$col" value="empty">';
            echo '<img src="img/qweenN.png">';
            echo'</div>';
            echo'</div>';
        }

*/
?>
</html>
