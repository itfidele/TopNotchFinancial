<?php require("configs/globals.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>News </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->

    <script src="plugins/ckeditor/ckeditor.js"></script>
</head>

<body class="sidebar-noneoverflow">

<!--  BEGIN NAVBAR  -->
<?php require("templates/navBar.php"); ?>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <?php
    require("templates/sideBar.php");
    ?>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing offset-md-2">

                    <div class="skills layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <form action="" method="post" enctype="multipart/form-data">
                                <h3 class="">New article</h3>
                                <div class="row p-4">
                                    <div class="col-md-12"><?php require("scripts/main.php"); ?></div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title" name="title"
                                                   value="" required>
                                        </div>
                                    </div>

                                    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="editor" name="description" placeholder="Description" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#editor'), {
                                                // Configuration options
                                            })
                                            .then(editor => {
                                                // Set the initial height
                                                editor.ui.view.editable.element.style.height = '200px';
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Choose language</label>
                                            <select name="language" id="" required class='form-control'>
                                                <option value="">-- select --</option>
                                                <option value="EN">English</option>
                                                <option value="KINY">Kinyarwanda</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Time Published</label>
                                            <input type="datetime-local" name="time" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="">Article Image <small class="text-success">[ Recommended: 1280x720 px ]</small></label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-primary mt-3 " type="submit" name="addArticle">Post Article
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php require("templates/footer.php"); ?>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="plugins/select2/custom-select2.js"></script>
<script>
    $(document).ready(function () {
        $(".news").addClass("active");

        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>