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
        <br>
        <p class="projectTitle projectLink"><a onclick="window.open('https://github.com/mattiHedegaard', '_blank')"><?= t('p_github_link') ?></a></p>
    </div>

    <!--projects-->
    <div class="project">
        <img src="images\icons\EUXIcon.png" alt="Photo of fthe weather station prototype.">
        <div class="projectDescription">
            <h1 class="projectTitle" onclick="window.open('https://github.com/mattiHedegaard/Weather_Station', '_blank')"><?= t('p_ws_title') ?></h1>
            <p class="projectText"><?= t('p_ws_text') ?></p>
        </div>
    </div>

    <div class="project">
        <div class="projectDescription">
            <h1 class="projectTitle" onclick="window.open('https://github.com/mattiHedegaard/MHH-Portfolie', '_blank')"><?= t('p_portfolio_title') ?></h1>
            <p class="projectText"><?= t('p_portfolio_text') ?></p>
        </div>
        <img src="images\icons\EUXIcon.png" alt="Image of the MHH Portfolie project.">
    </div>

    <div class="project">
        <img src="images\projects\rc\finalRC.png" alt="Photo of final protoype of the RC car project">
        <div class="projectDescription">
            <h1 class="projectTitle" onclick="window.open('https://github.com/mattiHedegaard/RCcar-arduino', '_blank')"><?= t('p_rc_title') ?></h1>
            <p class="projectText"><?= t('p_rc_text') ?></p>
        </div>
    </div>

    <div class="project">
        <div class="projectDescription">
            <h1 class="projectTitle" onclick="window.open('https://github.com/mattiHedegaard/GMTK-Game-Jam-2025', '_blank')"><?= t('p_gmtk2025_title') ?></h1>
            <p class="projectText"><?= t('p_gmtk2025_text') ?></p>
        </div>
        <img src="images\projects\gmtk\trainwreckMenu.png" alt="Photo of the Train Wreck's menu from the GMTK Game Jam 2025 project">
    </div>
</div>