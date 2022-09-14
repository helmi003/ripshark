<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title> product details </title>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="../products/functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>product details</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="link">check your CSV file : </label>
                            <div class="col-md-4">
                                <a href="https://docs.google.com/spreadsheets/d/1-jTuPR2hxptkZLhXOy4ANB93n8jkpfiraSQEAKGkhyA/edit#gid=1037760261">Product details</a>
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import3" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export3" class="btn btn-success" value="export to excel"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
                include("../products/functions.php");
                get_all_details();
            ?>
        </div>
    </div>
</body>
</html>