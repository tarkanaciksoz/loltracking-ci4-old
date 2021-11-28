<div class="masthead">
    <div class="masthead-content text-white">
        <div class="container-fluid px-4 px-lg-0">
            <h1 class="fst-italic lh-1 mb-4">League Of Track</h1><br>
            <p class="mb-5">
                We're working hard to finish the development of this site.<br>
                Also you can search summoner profiles below for now.
            </p>
            <div class="row input-group-newsletter">
                <div class="col-auto">
                    <div class="btn-group">
                        <input class="form-control" id="summonerName" name="summonerName" placeholder="Summoner name..." aria-label="Enter Summoner Name..."/>
                        <!--<input type="hidden" id="sv" name="sv" value=""/>-->
                        <button id="server" type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split sv-btn-min-width" data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" id="serverList">
                            <?php if(isset($allowedServers)) {
                                foreach($allowedServers as $server) { ?>
                                    <li><a class="dropdown-item" href="#"><?= strtoupper($server); ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success" id="submitButton">Search</button>
                </div>
            </div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3 mt-2">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
        </div>
    </div>
</div>
<div class="social-icons">
    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
    </div>
</div>
<div>

<script type="text/javascript">
    $(document).ready(function(){
        var baseUrl = "<?= base_url(); ?>";

        $('#serverList li').on('click', function(){
            let serverName = $(this).text();
            let $server = jQuery('#server');
            $server.text(serverName);
        });

        $('#submitButton').on('click', function(){
            var allowedServers = <?php if(isset($allowedServers)) { echo json_encode($allowedServers); } else{ echo json_encode(array());} ?>;
            var server = ($('#server').text()).toLowerCase();
            var summonerName = document.getElementById("summonerName").value;

            if(!inArray(server.toUpperCase(), allowedServers)) {
                alertModal("Select server.");
            }else if(!(summonerName.length > 0)) {
                alertModal("Enter Summoner name");
            }else {
                window.location = baseUrl + "/summoner/profile/" + server + "/" + summonerName;
            }
        });

        function inArray(needle, haystack) {
            var length = haystack.length;
            for(var i = 0; i < length; i++) {
                if(haystack[i] == needle) return true;
            }
            return false;
        }
    });

</script>