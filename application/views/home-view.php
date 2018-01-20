<div id="rs">
    <span class="line"></span>
    <span class="line"></span>
    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
    <span class="line"></span>
</div>
<main id="fullpage">
    <?php for ($i = 0; $i<3 ; $i++) { ?>
    <section class="section">
    <div class="col2">
        <div class="txtArea middle">
            <h1>
                Hi, my name is Maxime,<br>
                I’m a UX Designer
            </h1>
        </div><span class="vmiddle"></span>
    </div><div class="bgi col2" style="background-image: url(<?= base_url('assets/img/home.jpg') ?>)"></div>
    </section>
    <?php } ?>
</main>