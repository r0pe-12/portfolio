<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Petar Simonovic</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/ccdfe4c82e.js" crossorigin="anonymous"></script>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
<div class="overflow-x-hidden">
    <div class="fixed-top bg-info-subtle">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a href='/' class="navbar-brand fw-bold text-primary nameGradient">Petar Simonovic</a>
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-end" id="navbarSupportedContent">
                    <div class="navbar-nav ms-auto mb-2 mb-md-0">
                        <a href="#skills" class="nav-link text-center">
                            Skills
                        </a>
                        <a href="#projects" class="nav-link text-center">
                            Projects
                        </a>
                        <button class="btn" id="darkModeToggle">
                            <i class=""></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <section class="py-5">
        <div class="container mt-4">
            <div>
                <p>Hey, I'm</p>
                <h1 class="nameGradient fw-bolder" style="font-size: 7vw;">Petar Simonovic</h1>
                <div class="text_hide"></div>
                <p>
                    I'm an 18-year-old full-stack web developer hailing from Montenegro. 🌍 My love of coding is
                    limitless, and I've been on an exciting journey of learning and producing in the digital world.
                    <br><br>

                    My portfolio includes an <b>[array]</b> of projects that highlight my passion for web development. I'm on a
                    mission to make the web a more interesting and functional place, from designing flexible websites to
                    developing dynamic web applications.
                    <br><br>

                    Explore my work to see how I've used my creativity and technical skills to bring ideas to life on
                    the web. I'm always up for new challenges and partnerships, so let's connect and discover the
                    limitless
                    potential of the internet world together.
                    <br><br>

                    Let's build the future, one line of code at a time. 💻🚀
                </p>
            </div>
            <div class="row py-5">
                <div class="pt-4 col-md-6 col-lg-3 pt-lg-0">
                    <a class="social-link" href="mailto:simonovicp12@gmail.com">
                        <i class="fa-solid fa-envelope pe-2"></i>
                        Send an email
                    </a>
                </div>
                <div class="pt-4 col-md-6 col-lg-3 pt-lg-0">
                    <a class="social-link" href="https://github.com/r0pe-12">
                        <i class="fa-brands fa-github pe-2"></i>
                        GitHub
                    </a>
                </div>
                <div class="pt-4 col-md-6 pt-md-4 col-lg-3 pt-lg-0">
                    <a class="social-link" href="https://www.linkedin.com/in/petar-simonovic-b904661aa/">
                        <i class="fa-brands fa-linkedin pe-2"></i>
                        LinkedIn
                    </a>
                </div>
                <div class="pt-4 col-md-6 pt-md-4 col-lg-3 pt-lg-0">
                    <a class="social-link" href="https://www.instagram.com/simonovic_petar/">
                        <i class="fa-brands fa-instagram pe-2"></i>
                        Instagram
                    </a>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section id="skills" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                    <nav>
                        <div class="nav nav-underline nav-fill mb-3 d-flex flex-lg-column" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-web-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-web" type="button" role="tab" aria-controls="nav-web"
                                    aria-selected="true">
                                <i class="fa-solid fa-globe"></i>
                                <!-- Web -->
                            </button>
                            <button class="nav-link" id="nav-mobile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mobile"
                                    type="button" role="tab" aria-controls="nav-mobile" aria-selected="false">
                                <i class="fa-solid fa-mobile-screen"></i>
                                <!-- Mobile -->
                            </button>
                            <button class="nav-link" id="nav-db-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-db"
                                    type="button" role="tab" aria-controls="nav-db" aria-selected="false">
                                <i class="fa-solid fa-database"></i>
                                <!-- DB -->
                            </button>
                            <button class="nav-link" id="nav-design-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-design"
                                    type="button" role="tab" aria-controls="nav-design" aria-selected="false">
                                <i class="fa-solid fa-paintbrush"></i>
                                <!-- Design -->
                            </button>
                            <button class="nav-link" id="nav-qa-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-qa"
                                    type="button" role="tab" aria-controls="nav-qa" aria-selected="false">
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <!-- QA -->
                            </button>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-11">
                    <div class="tab-content p-3 h-100 gradientBorder border-2 rounded-2" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-web" role="tabpanel"
                             aria-labelledby="nav-web-tab">
                            <h5 class="fw-bold pb-3">Web technologies</h5>
                            <div class="row fw-light">
                                <div class="col-sm">
                                    <p>- PHP</p>
                                    <p>- JavaScript</p>
                                    <p>- jQuery</p>
                                    <p>- CSS</p>
                                    <p>- HTML5</p>
                                </div>

                                <div class="col-sm">
                                    <p>- Laravel</p>
                                    <p>- React</p>
                                    <p>- Bootstrap</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab">
                            <h5 class="fw-bold pb-3">Mobile technologies</h5>
                            <div class="row fw-light">
                                <div class="col-sm">
                                    <p>- Dart</p>
                                </div>

                                <div class="col-sm">
                                    <p>- Flutter</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-db" role="tabpanel" aria-labelledby="nav-db-tab">
                            <h5 class="fw-bold pb-3">DataBases</h5>
                            <div class="row fw-light">
                                <div class="col-sm">
                                    <p>- MongoDB</p>
                                    <p>- MySQL</p>
                                    <p>- MariaDB</p>
                                    <p>- PostgreSQL</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-design" role="tabpanel" aria-labelledby="nav-design-tab">
                            <h5 class="fw-bold pb-3">Design Tools</h5>
                            <div class="row fw-light">
                                <div class="col-sm">
                                    <p>- Adobe Photoshop</p>
                                    <p>- Adobe Illustrator</p>
                                    <p>- Figma</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-qa" role="tabpanel" aria-labelledby="nav-qa-tab">
                            <h5 class="fw-bold pb-3">Quality Assurance Tools</h5>
                            <div class="row fw-light">
                                <div class="col-sm">
                                    <p>- Postman</p>
                                    <p>- PHP Unit</p>
                                    <p>- XDebug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
</div>
</body>
</html>
