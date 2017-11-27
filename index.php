<!DOCTYPE html>
<html>
    <head>
        <title>In2View - Voting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a href="http://ensoul.info/in2view/"><h1>EGREEN</h1></a>
                    <h4>5 GENNAIO | TUNNEL CLUB, MILANO | VOGLIO SENTIRE QUESTA TRACCIA!</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" id="playerContainer">
                    <div id="player"></div>
                    <div class="form">
                        <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search" id="titolo">
                                <input type="hidden" id="brano">
                        </div>
                        <div class="btn-toolbar">
                            <button class="btn btn-default btn-lg" id="cerca"><i class="fa fa-headphones"></i>CERCA</button>
                            <button class="btn btn-success btn-lg" id="vote"><i class="fa fa-thumbs-up"></i>QUESTA!</button>
                        </div>
                    </div>
                    <div class="thank">
                        <h5>Grazie per aver votato! Spero di vederti Sabato 5 al Tunnel Club!</h5>
                    </div>
                    <div class="wow">
                        <h5><a href="http://ensoul.info/in2view/results.php">RESULTS</a></h5>
                </div>
            </div>
        </div>
    </body>
    <script src="js/in2view.js"></script>
    <script>
        var width = $("#playerContainer").width();
        var height = Math.round((width/16)*9);
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Replace the 'ytplayer' element with an <iframe> and
        // YouTube player after the API code downloads.
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
                playerVars: {
                    controls: 0,
                    modestbranding: 1,
                    showinfo: 0,
                    autohide: 0,
                    color: "white"
                },
                height: height,
                width: width,
                videoId: 'rf5kxDgMkUs'
            });
        }
        $("#player").fitVids();
    </script>
</html>
