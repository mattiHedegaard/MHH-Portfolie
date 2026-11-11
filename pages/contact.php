<div class="frontpage">

    <!--Left navigation menu-->
    <div class="navigationBar">
        <div class="profile">
            <img src="images/matti/mattiKliterne.jpg" alt="<?= t('profile_alt') ?>">
            <p id="nbName"><?= t('matti_h_h') ?></p>
            <p id="nbTitle"><?= t('title') ?></p>
        </div>

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

    <!--Page content-->
    <main class="contactContent">

        <div class="contactText">
            <h1><?= t('c_title') ?></h1>
            <p class="contactIntro"><?= t('c_intro') ?></p>

            <div class="contactList">
                <!-- TODO: replace the placeholder address and links with your own -->
                <a class="contactItem" href="mailto:matti.hedegaard@gmail.com">
                    <span class="contactLabel"><?= t('c_email') ?></span>
                    <span class="contactValue">matti.hedegaard@gmail.com</span>
                </a>

                <a class="contactItem" href="tel:+4512345678">
                    <span class="contactLabel"><?= t('c_phone') ?></span>
                    <span class="contactValue">+45 24 40 01 57</span>
                </a>

                <a class="contactItem" href="https://www.linkedin.com/in/matti-hedegaard-37772b267/" target="_blank" rel="noopener noreferrer">
                    <span class="contactLabel"><?= t('c_linkedin') ?></span>
                    <span class="contactValue">linkedin.com/in/matti-hedegaard</span>
                </a>

                <a class="contactItem" href="https://github.com/mattiHedegaard" target="_blank" rel="noopener noreferrer">
                    <span class="contactLabel"><?= t('c_github') ?></span>
                    <span class="contactValue">github.com/mattiHedegaard</span>
                </a>

                <div class="contactItem contactItemStatic">
                    <span class="contactLabel"><?= t('c_location') ?></span>
                    <span class="contactValue"><?= t('c_location_value') ?></span>
                </div>
            </div>

            <p class="contactNote"><?= t('c_lang_note') ?></p>
        </div>

        <div class="contactPhoto">
            <img src="images/matti/mattiKliterne.jpg" alt="Photo of Matti Hedegaard Hansen">
        </div>

    </main>
</div>