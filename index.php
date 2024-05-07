<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/resumestyles.css">

        <title>Stewart Resume</title>
    </head>
    <body>
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Stewart</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="bx bx-home nav__icon"></i> Home
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#profile" class="nav__link">
                                <i class="bx bx-user nav__icon"></i> Profile
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#education" class="nav__link">
                                <i class="bx bx-book nav__icon"></i> Education
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="bx bx-award nav__icon"></i> Skills
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#experience" class="nav__link">
                                <i class="bx bx-briefcase-alt nav__icon"></i> Experience
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#certificates" class="nav__link">
                                <i class="bx bx-trophy nav__icon"></i> Certificates
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#references" class="nav__link">
                                <i class="bx bx-link-external nav__icon"></i> References
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </nav>
        </header>

        <main class="l-main bd-container">
            <!-- All elements within this div, is generated in PDF -->
            <div class="resume" id="area-cv">
                <div class="resume__left">
                    <!--========== HOME ==========-->
                    <section class="home" id="home">
                        <div class="home__container section bd-grid">
                            <div class="home__data bd-grid">
                                <img src="assets/img/profile.JPG" alt="profile image" class="home__img">

                                <h1 class="home__title">CHRISTIAN <b>STEWART</b></h1>
                                <h3 class="home__profession">Fullstack Developer</h3>
                                
                                <!-- Button to generate and download the pdf. Available for desktop. -->
                                <div class="">
                                    <a download="" href="assets/pdf/ResumeCv.pdf" class="home__button-movil">Download</a>
                                </div>
                            </div>

                            <div class="home__address bd-grid">
                                <span class="home__information">
                                    <i class="bx bx-map home__icon"></i> Justice Street, Lahug, Cebu City, Philippines
                                </span>

                                <span class="home__information">
                                    <i class="bx bx-envelope home__icon"></i> christianstewart5111@gmail.com
                                </span>

                                <span class="home__information">
                                    <i class="bx bx-phone home__icon"></i> 0943 - 0877 - 544
                                </span>
                            </div>
                        </div>

                        <!-- Theme change button -->
                        <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>

                        <!-- Button to Generate and Download the PDF for Desktop -->
                        <i class='bx bx-download generate-pdf' title="Generate PDF" id="resume-button"></i>
                    </section>          
                    
                    <!--========== SOCIAL ==========-->
                    <section class="social section">
                        <h2 class="section__title">SOCIAL</h2>

                        <div class="social__container bd-grid">
                            <a href="https://www.linkedin.com/in/christian-anthony-stewart/" target="" class="social__link">
                                <i class="bx bxl-linkedin-square social__icon"></i> @christian-anthony-stewart
                            </a>

                            <a href="https://github.com/TheLast22" target="" class="social__link">
                                <i class="bx bxl-github social__icon"></i> @TheLast22
                            </a>

                            <a href="https://www.facebook.com/stewart.ca.8/" target="" class="social__link">
                                <i class="bx bxl-facebook-square social__icon"></i> @stewart.ca.8
                            </a>

                            <a href="https://www.instagram.com/tianthonyyy/" target="" class="social__link">
                                <i class="bx bxl-instagram social__icon"></i> @tianthonyyy
                            </a>
                        </div>
                    </section>

                    <!--========== PROFILE ==========-->
                    <section class="profile section" id="profile">
                        <h2 class="section__title">Profile</h2>

                        <p class="profile__description">
                            I am currently a graduating Computer Science Student from the University of San Carlos.
                            Focused mainly on Software or Web Development and Graphic designs but I am open to Mobile Development projects as well.
                            I have worked with basic HTML, CSS, and JS projects. I have been exposed to libraries and languages such as ReactJS and Python.
                            I'm also interested in traditional and digital graphics are .
                        </p>
                    </section>
                    
                    <!--========== EDUCATION ==========-->
                    <section class="education section" id="education">
                        <h2 class="section__title">Education</h2>

                        <div class="education__container bd-grid">
                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <span class="education__line"></span>
                                </div>

                                <div class="education__data bd-grid">
                                    <h3 class="education__title">BS in Computer Science</h3>
                                    <span class="education__studies">University of San Carlos</span>
                                    <span class="education__year">2020 - 2024</span>
                                </div>
                            </div>

                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <span class="education__line"></span>
                                </div>

                                <div class="education__data bd-grid">
                                    <h3 class="education__title">Senior High Graduate</h3>
                                    <span class="education__studies">University of San Carlos</span>
                                    <span class="education__year">2018 - 2020</span>
                                </div>
                            </div>

                            <div class="education__content">
                                <div class="education__time">
                                    <span class="education__rounder"></span>
                                    <!-- <span class="education__line"></span> -->
                                </div>

                                <div class="education__data bd-grid">
                                    <h3 class="education__title">Junior High Graduate</h3>
                                    <span class="education__studies">University of San Carlos</span>
                                    <span class="education__year">2014 - 2018</span>
                                </div>
                            </div>
                        </div>
                    </section>


                    <!--========== SKILLS  ==========-->
                    <section class="skills section" id="skills">
                        <h2 class="section__title">Skills</h2>

                        <div class="skills__content bd-grid">
                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> HTML
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> CSS
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> JS
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Vue
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> React
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Git
                                </li>
                            </ul>

                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> PHP
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Laravel
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> NodeJS
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> C#
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> JavaScript
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Python
                                </li>
                            </ul>

                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> MySQL
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> SQL Server
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Firebase
                                </li>
                            </ul>

                            <ul class="skills__data">
                                <li class="skills__name">
                                    <span class="skills__circle"></span> Xamarin
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> Dot NET
                                </li>

                                <li class="skills__name">
                                    <span class="skills__circle"></span> React Native
                                </li>
                            </ul>
                        </div>
                    </section>

                </div>

                <div class="resume__right">
                    <!--========== EXPERIENCE ==========-->
                    <section class="experience section" id="experience">
                        <h2 class="section__title">Experience</h2>

                        <div class="experience__container bd-grid">
                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <span class="experience__line"></span>
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">Quality Assurance Tester Internship</h3>
                                    <span class="experience__company">Alliance Inc.  | 2023 - 2024</span>
                                    <p class="experience__description">
                                        Create a user manual (screens and logical flow).
                                        Identified vulnerabilities & documented them on a collaborative software development tool.
                                        Verify fixes for bugs identified.
                                        Perform regression testing on specific modules (screens) of the project.

                                    </p>
                                </div>
                            </div>

                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <span class="experience__line"></span>
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">Natural Language Processing Thesis</h3>
                                    <span class="experience__company"> Multilabel Emotion Recognition | 2023</span>
                                    <p class="experience__description">
                                        Conceptualized, Designed, and executed the study using deep learning 
                                        algorithms to advance the understanding of human emotion within frameworks.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <span class="experience__line"></span>
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">Fullstack Developer</h3>
                                    <span class="experience__company">Talent Management System | 2022</span>
                                    <p class="experience__description">
                                        Created UI/UX Design for the entire system along with colleagues. Created
                                        the backend of the system using Laravel and MySQL. The frontend of the system
                                        was made using Vue JS framework.
                                    </p>
                                </div>
                            </div>

                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <span class="experience__line"></span>
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">Graphic Designer</h3>
                                    <span class="experience__company">Guadalupe Emergency Response Team | 2020 - 2022</span>
                                    <p class="experience__description">
                                        Created graphical displays to be used immediately. Collaborated with GERT to
                                        provide timely information on COVID-19 pandemic within the barangay.
                                    </p>
                                </div>
                            </div>

                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <span class="experience__line"></span>
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">Computing in Python</h3>
                                    <span class="experience__company">Development Academy of the Philippines  | 2021 - 2022</span>
                                    <p class="experience__description">
                                        Determine the basic statements and functions - lists, tuples, dictionaries, loops,
                                        etc... and be fluent in object-oriented programming including uses of classes and
                                        inheritance provided by Project Smarter Philippines through Data Analytics (SPARTA).
                                    </p>
                                </div>
                            </div>

                            <div class="experience__content">
                                <div class="experience__time">
                                    <span class="experience__rounder"></span>
                                    <!-- <span class="experience__line"></span> -->
                                </div>

                                <div class="experience__data bd-grid">
                                    <h3 class="experience__title">UI/UX Designer</h3>
                                    <span class="experience__company">Budiga App  | 2021 - 2022</span>
                                    <p class="experience__description">
                                        Developed the User Interface for a Inventory Management System for local
                                        MSME business and the User Experience interactions. Created a mockup and prototype of
                                        Budiga App to be coded in C#.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--========== CERTIFICATES ==========-->
                    <section class="certificate section" id="certificates">
                        <h2 class="section__title">Certificates</h2>

                        <div class="certificate__container bd-grid">
                            <div class="certificate__content">
                                <h3 class="certificate__title">DICT Startup Pitch Challenge</h3>
                                <p class="certificate__description">
                                    Certification offered by DICT for Startup Competition Participants
                                    placing 35th or higher, out of 80 regional contestants.
                                </p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Google Cloud Skills Boost</h3>
                                <p class="certificate__description">
                                    Google Cloud training offered during the Google Cloud Skills Boost
                                    1 month challenge to earn badges through course completion using
                                    Google Cloud.
                                </p>
                            </div>
                            
                            <div class="certificate__content">
                                <h3 class="certificate__title">Data Analysis</h3>
                                <p class="certificate__description">
                                    Certification offered by a course from the Development
                                    Academy of the Philippines.
                                </p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Computer Hardware Servicing NC II</h3>
                                <p class="certificate__description">
                                    Certification offered by TESDA regarding computer system
                                    competencies.
                                </p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Programming NC IV</h3>
                                <p class="certificate__description">
                                    Certification offered by TESDA regarding computer programming
                                    competencies.
                                </p>
                            </div>

                            <div class="certificate__content">
                                <h3 class="certificate__title">Project Management 101</h3>
                                <p class="certificate__description">
                                    Certification offered by Google Developer Student Clubs for
                                    participation in their workshop.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!--========== REFERENCES ==========-->
                    <!-- <section class="references section" id="references">
                        <h2 class="section__title">References</h2>

                        <div class="references__container bd-grid">
                            <div class="references__content bd-grid">
                                <span class="references__subtitle"></span>
                                <h3 class="references__title"></h3>
                                <ul class="references__contact">
                                    <li>Phone: </li>
                                    <li>Email: </li>
                                </ul>
                            </div>

                            <div class="references__content bd-grid">
                                <span class="references__subtitle"></span>
                                <h3 class="references__title"></h3>
                                <ul class="references__contact">
                                    <li>Phone: </li>
                                    <li>Email: </li>
                                </ul>
                            </div>

                            <div class="references__content bd-grid">
                                <span class="references__subtitle"></span>
                                <h3 class="references__title"></h3>
                                <ul class="references__contact">
                                    <li>Phone: </li>
                                    <li>Email: </li>
                                </ul>
                            </div>
                        </div>
                    </section> -->

                    <!--========== LANGUAGES ==========-->
                    <section class="languages section">
                        <h2 class="section__title">Languages</h2>

                        <div class="languages__container">
                            <ul class="languages__content bd-grid">
                                <li class="languages__name">
                                    <span class="languages__circle"></span> English
                                </li>

                                <li class="languages__name">
                                    <span class="languages__circle"></span> Cebuano
                                </li>

                                <li class="languages__name">
                                    <span class="languages__circle"></span> Tagalog
                                </li>
                            </ul>
                        </div>
                    </section>
                    
                    <!--========== INTERESTS ==========-->
                    <section class="interests section">
                        <h2 class="section__title">Interests</h2>

                        <div class="interests__container bd-grid">
                            <div class="interests__content">
                                <i class="bx bx-headphone interests__icon"></i>
                                <span class="interests__name">Music</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bxs-game interests__icon'></i>
                                <span class="interests__name">Games</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bx-basketball interests__icon'></i>
                                <span class="interests__name">Basketball</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bxs-plane-alt interests__icon'></i>
                                <span class="interests__name">Travel</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bx-book-bookmark interests__icon'></i>
                                <span class="interests__name">Reading</span>
                            </div>

                            <div class="interests__content">
                                <i class='bx bx-dumbbell interests__icon'></i>
                                <span class="interests__name">Fitness</span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>        
        </main>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-circle scrolltop__icon'></i>
        </a>

        <!--========== HTML2PDF ==========-->
        <script src="assets/js/html2pdf.bundle.min.js"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/resumemain.js"></script>
    </body>
</html>