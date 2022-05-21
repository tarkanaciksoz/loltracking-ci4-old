<div class="container pageBanner px-5 blur centerize" id="banner"></div> <!--TODO : backround image değişken olmalı-->
<div class="container px-5 centerize asd"> 
    <div class="row padding-top-150">
        <div class="col-2" id="profile-icon-area">
            <div class="row">
                <div class="profile-icon-div">
                    <img class="profile-icon" src="http://ddragon.leagueoflegends.com/cdn/11.23.1/img/profileicon/542.png"/>
                </div>
            </div>
            <div class="row lvl-area">
                <div class="summoner-level text-center">031 Level</div>
            </div>
        </div>
        <div class="col-10 summoner-name-area">
            <div class="row">
                <div class="col-12 sna-col"></div>
                <div class="col-12 sna-col"></div>
                <div class="col-12 sn-col">
                    <h2 class="summoner-name">
                        Muckmeister <!--TODO : boşluk fix edilecek-->
                    </h2>
                </div>
                <div class="col-12 sn-col">
                    <div class="row">
                        <h4 class="flagname text-left">
                            (TR)
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="scroll">
    <div class="container centerize">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 order-lg-2">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 main-content main-content-blur" id="rank-icon-soloq">
                        <div class="row">
                            <div class="col-4 text-start">asd</div>
                            <div class="col-4 rankname text-center ">Solo/Queue</div>
                            <div class="col-4 text-end">asddsfsdfdsfas</div>
                        </div>
                        <img class="rank-icon-image" src="http://localhost:8080/dist/assets/img/Emblem_Platinum.png" alt="..." />
                        <div class="row">
                            <div class="col-4">asd</div>
                            <div class="col-4">asdsa</div>
                            <div class="col-4">asdas</div>
                        </div>     
                    </div>
                    <div class="col-lg-1 order-lg-2" id="divider"></div>
                    <div class="col-lg-5 order-lg-2 main-content main-content-blur" id="rank-icon-soloq">
                        <div class="row">
                            <div class="col-4 text-start">asd</div>
                            <div class="col-4 rankname text-center ">Ranked Flex</div>
                            <div class="col-4 text-end">asddsfsdfdsfas</div>
                        </div>
                        <img class="rank-icon-image" src="http://localhost:8080/dist/assets/img/Emblem_Platinum.png" alt="..." />
                        <div class="row">
                            <div class="col-4">asd</div>
                            <div class="col-4">asdsa</div>
                            <div class="col-4">asdas</div>
                        </div>     
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>
        <!-- Content section 2-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid rounded-circle" src="<?= $distDir; ?>assets/img/02.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">We salute you!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="<?= $distDir; ?>assets/img/03.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Let there be rock!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="py-5 bg-black">
    <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $distDir; ?>js/scripts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#profile-icon-area').attr("class", "profile-icon-area")
        $('#divider').css("max-width", "18px")
        $('#divider').css("min-width", "18px")
        $('#divider').css("width", "18px")
        $('#divider').css("padding-right", "0")
        $('#divider').css("padding-left", "0")


        /*$( window ).resize(function() { 
            var width = $(window).width()
            if(width > 768) {
                $('.sna-col').each(function(element){
                    element.style.height = "100%"
                })
            }
        })*/
    });
</script>