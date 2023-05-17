<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Snaple</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesheet.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-2">
                <p><a href="#">What is this? Also, Rules.</a></p>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-2">
                <!-- php get logo -->
                <?php echo '<img src=".." class="img-fluid" alt="Snaple logo">' ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-8 col-sm-6">
                <?php echo '<img src="imgs/Mystery-Variant.webp" class="img-fluid img-mystery" alt="Snaple logo">' ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col col-sm-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter card name" aria-label="Enter card name"
                        aria-describedby="basic-addon1">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Try!</button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col col-sm-8">
                <table class="table table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">Card</th>
                            <th class="text-center" scope="col">Energy</th>
                            <th class="text-center" scope="col">Power</th>
                            <th class="text-center" scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-nowrap">Thor</td>
                            <td class="text-nowrap text-center table-danger">10 🔼</td>
                            <td class="text-nowrap text-center table-danger">6 🔽</td>
                            <td class="text-nowrap text-center table-danger">Ongoing ❌</td>
                        </tr>

                        <tr>
                            <td class="text-nowrap">White Queen</td>
                            <td class="text-nowrap text-center table-success">5 ✅</td>
                            <td class="text-nowrap text-center table-danger">4 🔽</td>
                            <td class="text-nowrap text-center table-success">On reveal ✅</td>
                        </tr>

                        <tr>
                            <td class="text-nowrap table-success">Teenage Negasonic Warhead</td>
                            <td class="text-nowrap text-center table-success">5 ✅</td>
                            <td class="text-nowrap text-center table-success">2 ✅</td>
                            <td class="text-nowrap text-center table-success">On reveal ✅</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="button" class="btn btn-primary btn-onemore">One more!</button>
            </div>
        </div>

        <div class="footer">
            <div class="update">
                <p>Last data update: XX/XX/XX</p>
                <p>Last app update: XX/XX/XX</p>
                <p>If you wish to help in maintaining this, you can <a href="">buy me a coffee</a>.</p>
            </div>

            <div class="contact">
                <p>Created by <a href="">@vcesauron</a>.</p>
                <p><a href="">Github</a></p>
                <p>SNAPLE is only a fan project, and is not affiliated with Marvel, nor Second Dinner.</p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <script src="js/client.js"></script>
    </div>
</body>

</html>