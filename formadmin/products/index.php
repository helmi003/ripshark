<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title> Products </title>
</head>
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Products</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="link">check your CSV file : </label>
                            <div class="col-md-4">
                                <a href="https://docs.google.com/spreadsheets/d/1cHMGI76oUeyq1w8qrzqm6WOq6iFOciou1VXp5uECpFk/edit#gid=1490899541">Products</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="link">don't forget to change the product details : </label>
                            <div class="col-md-4">
                                <a href="../prod_detail/prod_detail.php">Product Details</a>
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
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
                include("functions.php");
                get_all_records();
            ?>
        </div>
    </div>
</body>
</html>