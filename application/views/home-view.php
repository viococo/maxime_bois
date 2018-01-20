<div id="rs" <?php echo ( isset ($color) && $color === 'lightLeft' ) ? 'class="'.$color.'"':'' ?>>
    <span class="line"></span>
    <span class="line"></span>
    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
    <span class="line"></span>
</div>
<main id="fullpage">
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
    <?php for ($i = 0; $i<4 ; $i++) { ?>
    <section class="section project 
        <?php echo ($i == 0) ? 'active':'' ?>"
    >
    <div class="col2">
        <div class="txtArea middle">
            <h3>UX/UI Design</h3>
            <h2> Obataimu</h2>
            <p>
                Obataimu is a clothing brand 
                mixing Japanese art and Indian 
                know-how.
            </p>
            <a href="<?php base_url() ?>">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div><span class="vmiddle"></span>
    </div><div class="bgi col2" style="background-image: url(<?= base_url('assets/img/obataimu.jpg') ?>)"></div>
    </section>
    <?php } ?>
</main>