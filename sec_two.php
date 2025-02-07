<!-- # about
        ================================================== -->
<section id="about" class="s-about target-section">

    <div class="row s-about__content">
        <div class="column xl-12">

            <div class="section-header" data-num="01">
                <h2 class="text-display-title">About Me.</h2>
            </div> <!-- end section-header -->

            <p class="attention-getter">
                I have expertise in creating and enhancing web
                applications, as well as managing and designing
                databases. My programming skills include PHP, and I
                am well-versed in various web technologies such as
                HTML5, CSS3, JavaScript, Ajax, jQuery, and
                Bootstrap, <b>REST APIs</b>. Additionally, I am
                proficient in
                frameworks like WordPress and Laravel, and I have
                experience with databases such as MySQL and MySQL
                Workbench.
            </p>

            <div class="grid-list-items s-about__blocks">

                <div class="grid-list-items__item s-about__block">
                    <h4 class="s-about__block-title">Educations</h4>
                    <ul class="s-about__list">
                        <li>
                            Future Flame
                            <span>Software Web Development</span>
                        </li>
                        <li>
                            Dayavihar Degree College
                            <span>Bachelor Of Science (Physic
                                .Hons)</span>
                        </li>
                        <li>
                            Govt Voc Jr Clg Delang Clg Delang
                            <span>+2 Science</span>
                        </li>
                        <li>
                            UGV Niketana J.R.KPur
                            <span>10th</span>
                        </li>
                    </ul>
                </div> <!--end s-about__block -->
                <div class="grid-list-items__item s-about__block">
                    <h4 class="s-about__block-title">Experience</h4>
                    <ul class="s-about__list">
                        <li>
                            <a target="_blank"
                                href="https://www.maastrixsolutions.com/">
                                Maastrix Solution
                                <span>Software Developer</span></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.typof.com/">
                                Typof Technology
                                <span>Software Engineer</span></a>
                        </li>
                        <li>
                            <a target="_blank"
                                href="https://in.linkedin.com/company/multisoftweb">
                                Multisoft Communication
                                <span> Asst. Programmer</span></a>
                        </li>
                        <li>
                            <a target="_blank"
                                href="https://in.linkedin.com/company/finvolve-infotech-pvt-ltd">
                                Finvolve
                                <span> PHP Web Developer</span></a>
                        </li>
                    </ul>
                </div> <!--end s-about__block -->

                <div class="grid-list-items__item s-about__block">
                    <h4 class="s-about__block-title">Skills</h4>
                    <?php $skils = ['HTML', 'CSS', 'JavaScript', 'Ajax', 'JQuery', 'Bootstrap', 'PHP', 'Laravel', 'MySqli', 'Wordpress', 'REST APIs'];
                    // print_r($skils);
                    ?>

                    <ul class="s-about__list">
                        <div class="row">
                            <?php foreach ($skils as $k => $v) { ?>
                                <div class=" column xl-6">
                                    <li>
                                        <i class="fa fa-arrow-circle-o-right" style="color:#000 !important;"></i>
                                        <?= $v; ?>
                                    </li>
                                </div>
                            <?php } ?>
                        </div>
                    </ul>
                </div> <!--end s-about__block -->

            </div> <!-- grid-list-items -->

        </div> <!--end column -->
    </div> <!--end s-about__content -->

</section> <!-- end s-about -->