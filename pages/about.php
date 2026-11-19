<div class="navigationBar">
    <!--Menu buttons-->
    <div class="navigationBtn" onclick="location.href='<?= url('frontpage') ?>'">
        <img src="images/icons/HomeIcon.png" alt="Home icon">
        <p><?= t('nav_home') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('projects') ?>'">
        <img src="images/icons/projectIcon.png" alt="Projects icon">
        <p><?= t('nav_projects') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('background') ?>'">
        <img src="images/icons/backgroundIcon.png" alt="Background icon">
        <p><?= t('nav_background') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('about') ?>'">
        <img src="images/icons/aboutIcon.png" alt="About icon">
        <p><?= t('nav_about') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('contact') ?>'">
        <img src="images/icons/contactIcon.png" alt="Contact icon">
        <p><?= t('nav_contact') ?></p>
    </div>
</div>

<div class="pageContent">
    <!--Page description-->
    <div class="pageDescription">
        <h1 class="pageTitle"><?= t('a_title') ?></h1>
        <p class="pageText"><?= t('a_text') ?></p>
    </div>

    <!--abouts-->
    <div class="about">
        <img src="images/icons/EUXIcon.png" alt="">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_who_title') ?></h1>
            <p class="aboutText"><?= t('a_who_text') ?></p>
        </div>
    </div>

    <div class="about">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_nature_title') ?></h1>
            <p class="aboutText"><?= t('a_nature_text') ?></p>
        </div>
        <img src="images/icons/EUXIcon.png" alt="">
    </div>
</div>