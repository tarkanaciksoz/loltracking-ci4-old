<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LoLTracking</title>
    <link rel="icon" type="image/x-icon" href="<?= $distDir; ?>assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <link href="<?= $distDir; ?>css/contentStyles.css?v=1" rel="stylesheet" />
    <link href="<?= $distDir; ?>css/navStyles.css?v=1" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
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