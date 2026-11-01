<div class="navigationBar">
    <!--Menu buttons-->
    <div class="navigationBtn" onclick="location.href='<?= url('frontpage') ?>'">
        <img src="images/HomeIcon.png" alt="Home icon">
        <p><?= t('nav_home') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('projects') ?>'">
        <img src="images/projectIcon.png" alt="Projects icon">
        <p><?= t('nav_projects') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('background') ?>'">
        <img src="images/backgroundIcon.png" alt="Background icon">
        <p><?= t('nav_background') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('about') ?>'">
        <img src="images/aboutIcon.png" alt="About icon">
        <p><?= t('nav_about') ?></p>
    </div>

    <div class="navigationBtn" onclick="location.href='<?= url('contact') ?>'">
        <img src="images/contactIcon.png" alt="Contact icon">
        <p><?= t('nav_contact') ?></p>
    </div>
</div>

<div class="pageContent">
    <!--Page description-->
    <div class="pageDescription">
        <h1 class="pageTitle"><?= t('p_title') ?></h1>
        <p class="pageText"><?= t('p_text') ?></p>
    </div>

    <div class="backgroundDiv">
        <!--Education-->
        <div class="educationDiv">
            <h1 class="columnTitle"><?= t('bg_education') ?></h1>

            <div class="bgBox">
                <div class="year">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_eux_title') ?></h1>
                <p><?= t('bg_eux_text') ?></p>
            </div>

            <div class="bgBox">
                <div class="year">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_eux_title') ?></h1>
                <p><?= t('bg_eux_text') ?></p>
            </div>

            <div class="bgBox">
                <div class="year">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_eux_title') ?></h1>
                <p><?= t('bg_eux_text') ?></p>
            </div>
        </div>

        <!--Experiance-->
        <div class="experianceDiv">
            <h1 class="columnTitle"><?= t('bg_experiance') ?></h1>

            <div class="bgBox bgBoxEx">
                <div class="year yearEx">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_bosch_title') ?></h1>
                <p><?= t('bg_bosch_text') ?></p>
            </div>

            <div class="bgBox bgBoxEx">
                <div class="year yearEx">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_bosch_title') ?></h1>
                <p><?= t('bg_bosch_text') ?></p>
            </div>

            <div class="bgBox bgBoxEx">
                <div class="year yearEx">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_bosch_title') ?></h1>
                <p><?= t('bg_bosch_text') ?></p>
            </div>

            <div class="bgBox bgBoxEx">
                <div class="year yearEx">
                    <p>2017-2022</p>
                </div>

                <h1><?= t('bg_bosch_title') ?></h1>
                <p><?= t('bg_bosch_text') ?></p>
            </div>
        </div>
    </div>
</div>