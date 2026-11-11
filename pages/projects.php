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
        <h1 class="pageTitle"><?= t('p_title') ?></h1>
        <p class="pageText"><?= t('p_text') ?></p>
    </div>

    <!--projects-->
    <div class="project">
        <img src="images/icons/EUXIcon.png" alt="">
        <div class="projectDescription">
            <h1 class="projectTitle"><?= t('p_project1_title') ?></h1>
            <p class="projectText"><?= t('p_project1_text') ?></p>
        </div>
    </div>

    <div class="project">
        <div class="projectDescription">
            <h1 class="projectTitle"><?= t('p_project2_title') ?></h1>
            <p class="projectText"><?= t('p_project2_text') ?></p>
        </div>
        <img src="images/icons/EUXIcon.png" alt="">
    </div>
</div>