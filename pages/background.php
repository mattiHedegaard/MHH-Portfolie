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

<div class="bgPage">

    <header class="bgIntro">
        <h1><?= t('bg_title') ?></h1>
        <p><?= t('bg_intro') ?></p>
    </header>

    <!--Skills-->
    <section aria-labelledby="skillsTitle">
        <h2 class="bgSectionTitle" id="skillsTitle"><?= t('bg_skills_title') ?></h2>

        <div class="skillGrid">
            <div class="skillGroup">
                <h3><?= t('bg_sk_tech') ?></h3>
                <ul>
                    <li><?= t('sk_web') ?></li>
                    <li><?= t('sk_ml') ?></li>
                    <li><?= t('sk_vision') ?></li>
                    <li><?= t('sk_audio') ?></li>
                    <li><?= t('sk_db') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_pro_lan') ?></h3>
                <ul>
                    <li><?= t('sk_cs') ?></li>
                    <li><?= t('sk_cp') ?></li>
                    <li><?= t('sk_python') ?></li>
                    <li><?= t('sk_html') ?></li>
                    <li><?= t('sk_css') ?></li>
                    <li><?= t('sk_js') ?></li>
                    <li><?= t('sk_php') ?></li>
                    <li><?= t('sk_json') ?></li>
                    <li><?= t('sk_jquery') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_embedded') ?></h3>
                <ul>
                    <li><?= t('sk_arduino') ?></li>
                    <li><?= t('sk_audio') ?></li>
                    <li><?= t('sk_physical') ?></li>
                    <li><?= t('sk_micro') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_network') ?></h3>
                <ul>
                    <li><?= t('sk_iot') ?></li>
                    <li><?= t('sk_cybersec') ?></li>
                    <li><?= t('sk_emulation') ?></li>
                    <li><?= t('sk_disturbuted') ?></li>
                    <li><?= t('sk_net_com') ?></li>
                </ul>
            </div>
        </div>
    </section>

    <div class="skillGrid">
            <div class="skillGroup">
                <h3><?= t('bg_sk_tools') ?></h3>
                <ul>
                    <li><?= t('sk_git') ?></li>
                    <li><?= t('sk_docker') ?></li>
                    <li><?= t('sk_3d') ?></li>
                    <li><?= t('sk_unity') ?></li>
                    <li><?= t('sk_figma') ?></li>
                    <li><?= t('sk_vscode') ?></li>
                    <li><?= t('sk_linux') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_design') ?></h3>
                <ul>
                    <li><?= t('sk_interaction') ?></li>
                    <li><?= t('sk_hci') ?></li>
                    <li><?= t('sk_prototyping') ?></li>
                    <li><?= t('sk_ui/ux') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_hardware') ?></h3>
                <ul>
                    <li><?= t('sk_assembly') ?></li>
                    <li><?= t('sk_cabling') ?></li>
                    <li><?= t('sk_hydraulics') ?></li>
                    <li><?= t('sk_troubleshooting') ?></li>
                    <li><?= t('sk_mec_el_design') ?></li>
                </ul>
            </div>

            <div class="skillGroup">
                <h3><?= t('bg_sk_methods') ?></h3>
                <ul>
                    <li><?= t('sk_teams') ?></li>
                    <li><?= t('sk_scrum') ?></li>
                    <li><?= t('sk_pbl') ?></li>
                </ul>
            </div>
        </div>
    </section>

    <!--Education and experience-->
    <div class="bgColumns">

        <!--Education-->
        <section aria-labelledby="eduTitle">
            <h2 class="bgSectionTitle" id="eduTitle"><?= t('bg_education') ?></h2>

            <article class="entry entryEdu">
                <span class="entryYears">2026–2028</span>
                <h3><?= t('bg_msc_title') ?></h3>
                <p><?= t('bg_msc_text') ?></p>
            </article>

            <article class="entry entryEdu">
                <span class="entryYears">2023–2026</span>
                <h3><?= t('bg_bsc_title') ?></h3>
                <p><?= t('bg_bsc_text') ?></p>
            </article>

            <article class="entry entryEdu">
                <span class="entryYears">2017–2022</span>
                <h3><?= t('bg_eux_title') ?></h3>
                
                <p><?= t('bg_eux_text') ?></p>
            </article>
            
        </section>

        <!--Experience-->
        <section aria-labelledby="workTitle">
            <h2 class="bgSectionTitle" id="workTitle"><?= t('bg_experience') ?></h2>

            <article class="entry entryWork">
                <span class="entryYears"><?= t('bg_liqtech_years') ?></span>
                <h3><?= t('bg_liqtech_title') ?></h3>
                <p><?= t('bg_liqtech_text') ?></p>
            </article>

            <article class="entry entryWork">
                <span class="entryYears">2022–2023</span>
                <h3><?= t('bg_bosch_title') ?></h3>
                <p><?= t('bg_bosch_text') ?></p>
            </article>
        </section>

    </div>
</div>