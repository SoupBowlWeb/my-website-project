<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website Project</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/lib/animate.min.css">
    <link rel="stylesheet" href="css/clouds.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div id="cloud-wrapper">
        <div id="clouds">
            <div class="cloud x1"></div>
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>
        </div>
    </div>

    <div class="container" id="content">
        <div class="row">
            <a href="./" id="logo">
                <img src="http://www.bitchyonline.com/wp-content/uploads/2014/09/TayKay-660x400.jpg" alt="">
                The Feud
            </a>
        </div>
        <div class="row">
            <div id="building">

                <?php include 'partials/floors.php'; ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <br>
                <button id="back-to-top" class="btn btn-lg btn-block btn-primary"><i class="glyphicon glyphicon-arrow-up"></i> Back to Top <i class="glyphicon glyphicon-arrow-up"></i></button>
                <br>

            </div>
        </div>

    </div>

    <div class="row" id="grass">

    </div>

    <div class="row">
        <div id="floor-descriptions">
            <?php include 'partials/descriptions.php'; ?>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/lib/elavator.min.js"></script>
<script src="js/lib/jquery.waypoints.min.js"></script>
<script>
    window.onload = function() {
        var elevator = new Elevator({
            element: document.querySelector('#back-to-top'),
            mainAudio: 'audio/bad-blood.mp3',
            duration: 22500
        });
    }
</script>
<script>

    for (var i = 2; i <= 32; i++) {
        (function(i) {
            new Waypoint({
                element: document.getElementById('floor-' + i),
                handler: function(direction) {
                    hideFloorDescriptions();
                    //$('.floor img').removeClass('animated zoomIn');

                    if(direction === 'up' && i !== 2) {
                        $('#floor-description-' + (i + 1)).show().addClass('animated slideInLeft');
                        //$(this.element).prev('.floor').find('img').addClass('animated zoomIn');
                        //$(this.element).prev('.floor').find('img').fadeIn();
                    } else if(direction === 'down') {
                        $('#floor-description-' + i).show().addClass('animated slideInLeft');
                        //$(this.element).find('img').addClass('animated zoomIn');
                        //$(this.element).find('img').fadeIn();
                    }
                }
            });
        })(i);
    }

    function hideFloorDescriptions() {
        $('.floor-description').removeClass('animated slideInLeft').fadeOut();
    }


</script>
</body>
</html>