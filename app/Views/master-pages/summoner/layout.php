<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="<?= $distDir; ?>assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= $distDir; ?>css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body id="page-top">
<!--  -->
<?php echo view($navbar); ?>
<?php echo view($content); ?>

<div id="alertModal" class="modal fade" name="modal" tabindex="-1" role="dialog" aria-labelledby="alertModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="modalContent" style="font-weight: bold !important;">

            </div>
            <div class="modal-footer">
                <button id="closeAlertModal" type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $distDir; ?>js/navScripts.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#closeAlertModal').on('click', function () {
                closeAlertModal();
            });
        });
        function alertModal(textHtml) {
            $('#modalContent','#alertModal').html(textHtml);
            $('#alertModal').modal('show');
        }
        function closeAlertModal() {
            $('#modalContent','#alertModal').html("");
            $('#alertModal').modal("hide");
        }
    </script>
    </body>
</html>