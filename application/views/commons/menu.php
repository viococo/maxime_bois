<nav>
    <div id="logo"><?php include('assets/svg/logo.svg')?></div>
    <ul <?php echo ( isset ($color) && $color ) ? 'class="'.$color.'"':'' ?>>
        <li><a href="<?= base_url('Welcome') ?>"> Works</a></li>
        <li><a href="<?= base_url('Welcome') ?>"> About</a></li>
    </ul>
</nav>