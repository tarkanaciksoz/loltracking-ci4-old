<?php
use App\Helpers\Constants;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>leagueoftrack</title>
        <link rel="icon" type="image/x-icon" href="<?= $distDir; ?>assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js?v=<?= Constants::ASSET_VERSION; ?>" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900?v=<?= Constants::ASSET_VERSION; ?>" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i?v=<?= Constants::ASSET_VERSION; ?>" rel="stylesheet" />
        <link href="<?= $distDir; ?>css/styles.css?v=<?= Constants::ASSET_VERSION; ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css?v=<?= Constants::ASSET_VERSION; ?>" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?v=<?= Constants::ASSET_VERSION; ?>"></script>
        <link href="<?= $distDir; ?>css/contentStyles.css?v=<?= Constants::ASSET_VERSION; ?>" rel="stylesheet" />
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?= Constants::ASSET_VERSION; ?>"></script>
    <script src="<?= $distDir; ?>js/navScripts.js?v=<?= Constants::ASSET_VERSION; ?>"></script>
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