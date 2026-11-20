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
        <img src="images\about\prag.jpg" alt="Image of me and my fiance in Pragh">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_who_title') ?></h1>
            <p class="aboutText"><?= t('a_who_text') ?></p>
        </div>
    </div>

    <div class="about">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_jam_title') ?></h1>
            <p class="aboutText"><?= t('a_jam_text') ?></p>
        </div>
        <img src="images\about\techathon.jpg" alt="Image of me and my team to techathon 2026 in Jelling">
    </div>

    <div class="about">
        <img src="images\about\knallertCol.png" alt="Image of two moped trips fomr the summer 2026">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_engine_title') ?></h1>
            <p class="aboutText"><?= t('a_engine_text') ?></p>
        </div>
    </div>

    <div class="about">
        <div class="aboutDescription">
            <h1 class="aboutTitle"><?= t('a_nature_title') ?></h1>
            <p class="aboutText"><?= t('a_nature_text') ?></p>
        </div>
        <img src="images\about\jagt.jpg" alt="Image of me with my first deer from hunting.">
    </div>
</div>