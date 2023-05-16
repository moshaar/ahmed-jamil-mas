<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Hello ,World</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md12">
                <div class="card">
                    <div class="card-header">
                        <h4>Schedule Add</h4>
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>

                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="m-p3">
                                <label>Schedule name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="m-p3">
                                <label>email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="m-p3">
                                <label> phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="m-p3">
                                <label>course</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="m-p3">
                                <button type="submit" name="Save_Schedule" class="btn btn-primary">
                                    Save Schedule
                                </button>
                            </div >
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>