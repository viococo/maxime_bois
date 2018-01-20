<nav <?php echo ( isset ($color) && $color ) ? 'class="'.$color.'"':'' ?>>
    <div id="logo"><?php include('assets/svg/logo.svg')?></div>
    <ul>
        <li><a href="<?= base_url('Welcome') ?>"> Works</a></li>
        <li><a href="<?= base_url('Welcome') ?>"> About</a></li>
    </ul>
</nav>