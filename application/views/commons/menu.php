<nav class="desktop <?= ( isset ($color) && $color ) ? $color:'' ?> toAsk">
    <div class="logo">
        <a href="<?= base_url() ?>"><?php include('assets/svg/logo.svg')?></a>
    </div>
    <ul>
        <li><a href="<?= base_url('Welcome/project/1') ?>"> Works</a></li>
        <li><a href="<?= base_url('About') ?>"> About</a></li>
    </ul>
</nav>
<nav class="mobile <?= ( isset ($color) && $color ) ? $color:'' ?> toAsk">
    <div class="logo">
        <a href="<?= base_url() ?>"><?php include('assets/svg/logo.svg')?></a>
    </div>
    <div class="burgerContainer">
        <span class="burger"></span>
    </div>
</nav>

<ul class="mobile">
    <li><a href="<?= base_url('Welcome/project/1') ?>"> Works</a></li>
    <li><a href="<?= base_url('About') ?>"> About</a></li>
</ul>
<?php if(isset($rs) && $rs) { ?>
    <div id="rs" class=" <?= ( isset ($color) && $color === 'lightLeft' ) ? $color:'' ?>">
        <span class="line"></span>
        <span class="line"></span>
        <a href="https://fr.linkedin.com/in/maximebois" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://twitter.com/xoux370" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://dribbble.com/maxime-bois" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
        <span class="line"></span>
    </div>
<?php } ?>