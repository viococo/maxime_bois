<nav <?php echo ( isset ($color) && $color ) ? 'class="'.$color.'"':'' ?>>
    <div id="logo">
        <a href="<?= base_url() ?>"><?php include('assets/svg/logo.svg')?></a>
    </div>
    <ul>
        <li><a href="<?= base_url('Welcome/project/1') ?>"> Works</a></li>
        <li><a href="<?= base_url('Welcome') ?>"> About</a></li>
    </ul>
</nav>
<?php if(isset($rs) && $rs) { ?>
    <div id="rs" <?php echo ( isset ($color) && $color === 'lightLeft' ) ? 'class="'.$color.'"':'' ?>>
        <span class="line"></span>
        <span class="line"></span>
        <a href="https://fr.linkedin.com/in/maximebois" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://twitter.com/xoux370" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://dribbble.com/maxime-bois" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
        <span class="line"></span>
    </div>
<?php } ?>