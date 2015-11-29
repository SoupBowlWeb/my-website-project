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
                <img src="img/acme-corp.png" alt="">
                Building Tour
            </a>
        </div>
        <div class="row">
            <div id="building">
                <div class="floor" id="floor-5">
                    <div class="wrap">
                        <h2>Floor 5 <small>Executive Floor</small></h2>
                        <img src="img/executive.jpg" alt="Floor 5">
                    </div>
                </div>
                <div class="floor" id="floor-4">
                    <div class="wrap">
                        <h2>Floor 4 <small>Junior Executive Floor</small></h2>
                        <img src="img/junior-executive.jpg" alt="Floor 4">
                    </div>
                </div>
                <div class="floor" id="floor-3">
                    <div class="wrap">
                        <h2>Floor 3 <small>Middle-Management Floor</small></h2>
                        <img src="img/middle-management.jpg" alt="Floor 3">
                    </div>
                </div>
                <div class="floor" id="floor-2">
                    <div class="wrap">
                        <h2>Floor 2 <small>Junior Floor</small></h2>
                        <img src="img/junior.jpg" alt="Floor 2">
                    </div>
                </div>
                <div class="floor" id="floor-1">
                    <div class="wrap">
                        <h2>Floor 1 <small>Entry-Level Floor</small></h2>
                        <img src="img/entry-level.jpg" alt="Floor 1">
                    </div>
                </div>
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
            <div id="floor-description-5" class="well floor-description">
                <h3>Floor 5</h3>
                <h5>Executive Floor</h5>
                <p>This is where all the big bosses work.</p>
            </div>
            <div id="floor-description-4" class="well floor-description">
                <h3>Floor 4</h3>
                <h5>Junior Executive Floor</h5>
                <p>These are the guys that do all the work that the people the floor above them get credit for.</p>
            </div>
            <div id="floor-description-3" class="well floor-description">
                <h3>Floor 3</h3>
                <h5>Middle Management Floor</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque eaque earum eos esse excepturi maiores minus perspiciatis velit. Asperiores atque doloribus, enim hic molestias porro quo recusandae sed sequi.</p>
            </div>
            <div id="floor-description-2" class="well floor-description">
                <h3>Floor 2</h3>
                <h5>Junior Floor</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda consequuntur, ducimus enim error excepturi hic mollitia qui, ratione reiciendis tempore ut veritatis voluptates. Adipisci at fugit minima tenetur ullam!</p>
            </div>
            <div id="floor-description-1" class="well floor-description">
                <h3>Floor 1</h3>
                <h5>Entry Level Floor</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis commodi corporis culpa et excepturi expedita illum laboriosam laudantium modi molestias mollitia nemo officia, pariatur quibusdam quo quos vero voluptatibus.</p>
            </div>
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
            mainAudio: 'audio/elevator.mp3',
            endAudio: 'audio/ding.mp3',
            duration: 15000
        });
    }
</script>
<script>

    for (var i = 5; i >= 1; i--) {
        (function(i) {
            new Waypoint({
                element: document.getElementById('floor-' + i),
                handler: function(direction) {
                    hideFloorDescriptions();

                    if(direction === 'up' && i !== 5) {
                        $('#floor-description-' + (i + 1)).show().addClass('animated slideInLeft');
                    } else if(direction === 'down') {
                        $('#floor-description-' + i).show().addClass('animated slideInLeft');
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