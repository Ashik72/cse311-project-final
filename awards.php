<?php
require_once 'inc/class.awards_processor.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap.min.css" crossorigin="anonymous">

    <title>Student Academic Awards!</title>
</head>
<body>



<div class="container">
    <div class="row">
        <div class="col-sm">

<h1>Student Academic Awards</h1>
            <form method="post">

                <div class="form-group">
                    <label for="sel1">Select Student:</label>
                    <select name="s_id" class="form-control" id="sel1">
        <?php echo awards_processor::getStudents(); ?>
                    </select>
                </div>




                <table class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Place/Position</th>
                        <th scope="col">Organization</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>

<?php echo awards_processor::render_input_rows(3); ?>

                    </tbody>
                </table>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


<style>
    form input {
        width: 90%;
    }
</style>

<script src="assets/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>

<script src="assets/popper.min.js" crossorigin="anonymous"></script>
<script src="assets/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>