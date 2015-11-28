<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website Project</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
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
            <div id="building">
                <div class="floor">
                    <h1>Welcome to Floor 5</h1>
                </div>
                <div class="floor">
                    <h1>Welcome to Floor 4</h1>
                </div>
                <div class="floor">
                    <h1>Welcome to Floor 3</h1>
                </div>
                <div class="floor">
                    <h1>Welcome to Floor 2</h1>
                </div>
                <div class="floor">
                    <h1>Welcome to Floor 1</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <br>
                <button id="back-to-top" class="btn btn-lg btn-block btn-primary"><i class="glyphicon glyphicon-arrow-up"></i> Back to Top <i class="glyphicon glyphicon-arrow-up"></i></button>
                <br>
                <br>
            </div>
        </div>


    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/lib/elavator.min.js"></script>
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
</body>
</html>