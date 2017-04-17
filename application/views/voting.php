<!doctype html>
<head>
    <title>NWE | International Festival Of Social Entrepreneurship 2016</title>
    <link type="image/x-icon" rel="shortcut icon" href="<?=URL::base(); ?>assets/ifse/imgs/favicon.png" />

    <link rel="stylesheet" href="<?=URL::base(); ?>assets/vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=URL::base(); ?>assets//css/app_v1.css" media="screen">
    <link rel="stylesheet" href="<?=URL::base(); ?>assets/ifse/css/lp.css" media="screen">

    <script type="text/javascript" src="<?=URL::base(); ?>assets/vendor/jquery/dist/jquery.js"></script>
    <script src="/assets/frontend/production/voting.js"></script>
    <script type="text/javascript" src="<?=URL::base(); ?>assets/ifse/js/script.js"></script>
</head>

<body>
    <section>
        <div class="row landing_head" style="background-image:linear-gradient(to top, rgba(0,0,0,0.75), rgba(0,0,0,0.1)),url(http://ifse.ifmo.ru/wp-content/uploads/2015/03/Roofs_23_.jpg)">
            <div class="col-xs-12 col-md-12">
                <h1 class="event-title">International Festival Of Social Entrepreneurship 2016</h1>
            </div>
        </div>
        <div class="row landing-main_info grey_bg">
            <div class="col-xs-12 col-md-4 info-elem">
                <div class="info-elem_border">
                    <i class="fa fa-clock-o info-elem_title" aria-hidden="true"></i>
                    <span id="time-counter" class="info-elem_description"></span>
                    <span class="info-elem_description">14 December 11:00-18:30</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 info-elem">
                <div class="info-elem_border">
                    <i class="fa fa-map-marker info-elem_title" aria-hidden="true"></i>
                    <span class="info-elem_description" style="display:block;">Loft Project ETAGI</span>
                    <span class="info-elem_description" style="display:block;">Ligovsky prospekt, 74</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 info-elem">
                <div class="info-elem_border">
                    <i class="fa fa-flag info-elem_title" aria-hidden="true"></i>
                    <span class="info-elem_description" style="display:block;">ITMO University</span>
                    <span class="info-elem_description" style="display:block;"></span>
                </div>
            </div>
        </div>
        <div class="row event-description_form" style="padding:5%;">
            <div class="event-description" style="width:100%">
                <p><b>The International Festival of Social Entrepreneurship </b>is designed to provide university students from around the world with opportunities to practice and to develop the skills necessary for social enterprise and community projects in partnership with nonprofit organizations and businesses. The event also provides students with the tools necessary for managing and creating social enterprises through an acceleration program designed to be both instructive and practice-oriented.</p>
                <p><b>Scope:</b> The Festival is organized among the Universities of the world in order to share best practices of social entrepreneurship used in Global Universities to strengthen the PBL approach to education, development of students’ soft skills, enhancing their position on the labor market, improving Universities’ community engagement and stimulating Universities innovation ecosystems.</p>
                <p><b>Format of the Competition:</b> Each participating University uses its own procedures during February- December 2016 to select maximum 3 social projects of the students to be presented at the International Festival of Social Entrepreneurship. These projects have to be presented in December 2016 in a form of a 5 minutes long pitch. The key condition is that it has to be not a project idea, but already implemented project for the benefit of the society. By the time of the final session in December the project has to acquire the commercial profile, meaning that the project managers have to identify the business model, in accordance with which the social project is going to be further promoted.</p>
                <p>The project will be presented to the Jury board which will consist of the representatives of the countries, participating in the Festival. Each University has a right to present not less than one and not more than 3 projects.</p>
                <p><b>Training session:</b> International Festival of Social Entrepreneurship will comprise the training session for all the participating teams. The sessions will be held by internationally recognized experts in Social Entrepreneurship from participating Universities. During 4 day in December, 2016 the experts will work as mentors, give lectures for the students and assist them in developing the business models of their projects. By the day of the Final session the projects will be improved to be ready to pitch session.</p>
                <p>After the competition ends a seminar on learnt experiences will be held with the aim to suggest the best ways of development of social entrepreneurship in Universities.</p>
            </div>
        </div>
        <div class="row event-rating grey_bg">
            <ul class="top_nav clearfix">
                <a id="rating_people" class="valign col-xs-12 col-sm-6 active">
                    <span class="center">People's Choice Award</span>
                </a>
                <a id="rating_total" class="valign col-xs-12 col-sm-6">
                    <span class="center">Results</span>
                </a>

            </ul>

            <!--  People rating   -->
            <ul class="rating-list" id="rating_list_people" style="display:block">
                <li data-pk="1">
                    <div class="name">team1</div>
                    <div class="photo" style="background-image:url(<?=URL::base(); ?>assets/ifse/imgs/site/no-team.png);">
                        <div class="place-icon">1</div>
                    </div>
                    <div class="rating-bar">
                        <div style="width:0%;">
                            <span class="animate">0/20</span>
                        </div>
                    </div>
                </li>
                <li data-pk="2">
                    <div class="name">team2</div>
                    <div class="photo" style="background-image:url(<?=URL::base(); ?>assets/ifse/imgs/site/no-team.png);">
                        <div class="place-icon">1</div>
                    </div>
                    <div class="rating-bar">
                        <div style="width:0%;">
                            <span class="animate">0/20</span>
                        </div>
                    </div>
                </li>
            </ul>

            <!--  Judges rating   -->
            <ul class="rating-list" id="rating_list_total" style="display:none">
                <li data-pk="">
                    <div class="name">team1</div>
                    <div class="photo" style="background-image:url(<?=URL::base(); ?>assets/ifse/imgs/site/no-team.png);">
                        <div class="place-icon">1</div>
                    </div>
                    <div class="rating-bar">
                        <div style="width:0%;">
                            <span class="animate">0/10</span>
                        </div>
                    </div>
                </li>
                <li data-pk="">
                    <div class="name">team2</div>
                    <div class="photo" style="background-image:url(<?=URL::base(); ?>assets/ifse/imgs/site/no-team.png);">
                        <div class="place-icon">1</div>
                    </div>
                    <div class="rating-bar">
                        <div style="width:0%;">
                            <span class="animate">0/10</span>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <footer>
            <div class="col-xs-12 col-md-5 col-md-offset-1">
                <div class="nwe-about">
                    <h4><a href="//pronwe.ru" class="link_uppercase nwe-about_link">nwe</a></h4>
                    <p>
                       Information support of events
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="nwe-about">
                    <h4>Follow us</h4>
                    <p>
                        <a href="//vk.com/nwe_team" class="nwe-about_social">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                            <span>Vk</span>
                        </a>
                    </p>
                    <p>
                        <a href="//twitter.com/NWE_team" class="nwe-about_social">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <span>Twitter</span>
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </section>
<body>

<script>

    /**
     * Here we should get vote (id_participant) and make function set.
     *
     * @example
     * voting.setValue(el) - Element contains data-pk with id participant
     *
     * then
     *
     * voting.saveValue()
     */
    var zone = document.getElementById('rating_list_people');

    zone.addEventListener('click', function(event) {

        var target = event.target.parentNode;
        voting.setVote(target);
        voting.saveValue();

    }, false);
</script>

<!-- Yandex.Metrika counter - <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41483579 = new Ya.Metrika({ id:41483579, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41483579" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!- /Yandex.Metrika counter -->
