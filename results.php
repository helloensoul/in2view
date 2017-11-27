<?php
$mysqli = new mysqli("localhost", "ensoulin_ensoul", "fuChong2014", "ensoulin_in2view");
if (mysqli_connect_errno()) {
        echo "Errore in connessione al DBMS: ".mysqli_connect_error();
        exit();
}
else {?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>In2View - Results</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" type="text/css">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/in2view.css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script src="js/jquery.fitvids.js"></script>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" id="header">
                        <h1><a href="http://ensoul.info/in2view">EGREEN</a></h1>
                        <h4>5 GENNAIO | TUNNEL CLUB, MILANO | VOGLIO SENTIRE QUESTA TRACCIA!</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" id="playerContainer">
                        <div class="chart">
                            <?php
                                $query = "SELECT * FROM in2view_voti ORDER BY num_voti DESC";
                                $result = $mysqli->query($query);
                                while($row = $result->fetch_array()) {
                                    $voti = $row['num_voti'];
                                    $brano = $row['brano'];?>
                                    <div class="record">
                                        <div class="titolo"><?php echo $brano;?></div>
                                        <div class="barra" data-voti="<?php echo $voti;?>"><?php echo $voti;?></div>
                                    </div><br>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <script>
            $(".barra").each(function(){
                $(this).css("width",$(this).attr("data-voti")*8);
            });
        </script>
    </html>
<?php
}
$mysqli->close();?>
