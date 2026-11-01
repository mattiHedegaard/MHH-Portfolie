

<span class="frontpage">
    <!--Left navigation menu div-->
    <div class="navigationBar">
        <div class="profile">
            <img src="images/mattiKliterne.jpg" alt="Billede af Matti Hedegaard Hansen">
            <p id="nbName"><?= t('matti_h_h') ?></p>
            <p id="nbTitle"><?= t('title') ?></p>
        </div>

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

    <!--right Timeline div-->
    <div class="timeline">
        <!--title and text (horizotnal)-->
        <div class="timelineText">
            <p id="tlTitle1">Matti Hedegaard</p>
            <p id="tlTitle2">Hansen</p>
            <p id="tlText"><?= t('fp_text') ?></p>
        </div>

        <!--top of timeline (vertical)-->
        <div class="timelineRow1 timelineRow">
            <!--first box (vertical)-->
            <div class="timelineTextbox">
                <h1><?= t('fp_eux_title') ?></h1>
                <p><?= t('fp_eux_text') ?></p>
            </div>

            <!--First icon-->
            <img class="timelineImage" src="images/mekanikerIcon.png" alt="EUX Icon">

            <!--second box (vertical)-->
            <div class="timelineTextbox">
                <h1><?= t('fp_medialogy_title') ?></h1>
                <p><?= t('fp_medialogy_text') ?></p>
            </div>

            <!--second image-->
            <img class="timelineImage" src="images/CEIcon.png" alt="Medialogy Icon">
        </div>    

        
        <!--Timeline arrow-->
        <div class="timelineArrow">
            <!--arrow-->
            <div class="timelineStart"></div>

            <!--First year div-->
            <div>
                <p>2017-2022</p>
                <img src="images/blueTimelineBox.png">
                <p></p>
            </div>

            <!--second year div-->
            <div>
                <p></p>
                <img src="images/lightblueTimelineBox.png">
                <p>2022-2023</p>
            </div>

            <!--third year div-->
            <div>
                <p>2023-2026</p>
                <img src="images/blueTimelineBox.png">
                <p></p>
            </div>

            <!--fourth year div-->
            <div>
                <p></p>
                <img src="images/lightblueTimelineBox.png">
                <p>2026-2028</p>
            </div>
        </div>

        <!--Bottom of timeline (vertical)-->
        <div class="timelineRow2 timelineRow">
            <!--First icon-->
            <img class="timelineImage" src="images/EUXIcon.png" alt="EUX Icon" style="width: 185px; height: auto;">

            <!--first box (vertical)-->
            <div class="timelineTextbox row2">
                <h1><?= t('fp_mechanic_title') ?></h1>
                <p><?= t('fp_mechanic_text') ?></p>
            </div>

            <!--second image-->
            <img class="timelineImage" src="images/medialogyIcon.png" alt="Computer ingenør Icon">

            <!--second box (vertical)-->
            <div class="timelineTextbox row2">
                <h1><?= t('fp_ce_title') ?></h1>
                <p><?= t('fp_ce_text') ?></p>
            </div>
        </div>
    </div>
</span>