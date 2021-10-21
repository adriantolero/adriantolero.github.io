<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="homepage courses">
    <section class="homepage-hero hero-loaded">
        <div class="container">
            <header class="homepage-hero-inner">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <h1 class="text-2-xs text-3-lg">
                            <?= $h1 ?><!--Best online coding classes for at-home learning-->
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 hide-xs">
                        <h2 class="text-3-xs text-1-lg">
                            <?= $h2 ?><!--Learn to code, design, and more-all on your own time--> 
                        </h2>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section class="homepage-signup-form">
        <div class="container">
            <div class="row">
                <div class="card col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-8 offset-lg-2 card-signup-form">
                    <div class="card-header bg-dark text-white">
                        <h5>Try it free for 7 days, then $25 a month</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-10 offset-1">
                            <form method="post" action="/signup">
                                <div class="row mb-3">
                                    <div class="col-12 col-md-12 col-lg-8">
                                        <label class="form-label" for="emailAddress">Email address</label>
                                        <input type="email" class="form-control form-control-lg" id="emailAddress" />
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <button type="submit" class="btn btn-secondary btn-lg sign-up-btn">Join Now</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="" id="account_signup_email_consent" />
                                            <label class="form-check-label" for="account_signup_email_consent">
                                                I want to hear from Treehouse about products and services.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div><!-- card -->

            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="homepage-tabs">    
            <a class="active" href="/courses">Courses</a>
            <a href="/techdegree">Techdegree</a>
            <a href="/teams">Teams</a>
            <a href="/how-it-works">How it works</a>
    </section>
    <section class="homepage-features">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="homepage-desktop-container">
                                <i class="fas fa-desktop fa-7x"></i>
                            </div> 
                        </div>
                        <div class="col-12 col-lg-8" style="text-align: left">
                            <div class="row">
                                <div class="col-12">
                                    <h5>
                                        Expert-led video courses for beginners and other skill levels
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        Find all the instructions you need to get an entry-level job in tech, even if you've never coded. Not a beginner? Test out of subjects you already know with Compass.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 hidden-hr-col-12">
                    <hr class="hidden-hr" />
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="homepage-puzzle-container">
                                <i class="fas fa-puzzle-piece fa-7x"></i>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8" style="text-align: left">
                            <div class="row">
                                <div class="col-12">
                                    <h5>
                                        In-Demand Topics For Developers and Designers
                                    </h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p>
                                        Stay up to date with your skills. Learn the languages, frameworks, and principles required for the most in-demand careers in tech.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-5 mb-5"/>  

            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="homepage-ladder-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-ladder" viewbox="0 0 16 16">
                                    <path d="M4.5 1a.5.5 0 0 1 .5.5V2h6v-.5a.5.5 0 0 1 1 0v14a.5.5 0 0 1-1 0V15H5v.5a.5.5 0 0 1-1 0v-14a.5.5 0 0 1 .5-.5zM5 14h6v-2H5v2zm0-3h6V9H5v2zm0-3h6V6H5v2zm0-3h6V3H5v2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8" style="text-align: left">
                            <div class="row">
                                <div class="col-12">
                                    <h5>
                                        Segment your learning with Tracks
                                    </h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p>
                                        Each of our Tracks is a mini-program designed to teach you a particular set of skills. Need to learn a new skill set? Enroll in a Track, and your learning path is all mapped out.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 hidden-hr-col-12">
                    <hr class="hidden-hr" />
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="homepage-learning-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" fill="currentColor" class="bi bi-journal-code" viewbox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"></path>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8" style="text-align: left">
                            <div class="row">
                                <div class="col-12">
                                    <h5>
                                        Interactive learning
                                    </h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p>
                                        Our courses have quizzes and code challenges to keep you engaged-because the best way to learn is by practicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="techdegrees-p3">
        <div class="container">
            <div class="techdegrees-content">
                <div class="row">
                    <div class="col-12 ">
                        <h2>Start your Learning journey today!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <h3>with a free 7-day trial, then $25/month</h3>
                    </div>
                </div>
                <div class="row techdegrees-btn-container">
                    <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-lg-2 offset-lg-5">
                        <a class="button" href="/subscribe">Sign up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="techdegree-p3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mt-sm-4">
                    <div class="col-12 col-lg-12 mb-3">
                        <i class="far fa-compass fa-6x"></i>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="techdegree-text-container">
                            <h4 class="mb-3">100 days of Code</h4>
                            <p>
                                Transform your life by committing to learning for 30 minutes a
                                day for a hundred days. You'll get email reminders, plus a complementary podcast,
                                to help you in your learning journey.
                            </p>
                        </div>
                        <div class="techdegree-btn-container mt-5">
                            <a class="button" href="#">Start your Journey</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sm-mt-4">
                    <div class="col-12 col-lg-12 mb-3">
                        <i class="far fa-comment-dots fa-6x"></i>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="techdegree-text-container">
                            <h4 class="mb-3">Free resources</h4>
                            <p>
                                Our Tech Explorer's Toolkit is packed with free resources for anyone curious about getting
                            a job in tech. No matter what stage you're at in your journey into tech, our bi-monthly Toolkit
                            will bring the resources you need straight to your inbox.
                            </p>
                        </div>
                        <div class="techdegree-btn-container mt-4">
                            <a class="button" href="#">Join Our Mailing List</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sm-mt-4">
                    <div class="col-12 col-lg-12 mb-3">
                        <i class="fas fa-users fa-6x"></i>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="techdegree-text-container">
                            <h4 class="mb-3">Networking</h4>
                            <p>
                                Join a lively and supportive community of students on the Treehouse forums to network, get help,
                                 and hang out with others who are studying the same topics as you.
                            </p>
                        </div>
                        <div class="techdegree-btn-container mt-4">
                            <a class="button" href="#">Network With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 td-banner-img">
                    <img alt="Techdegree badges stacked left to right" width="1000px" height="194px" src="/assets/plugins/images/experiment_TD_badges-1da49f5741ab36af3dfddc596785697442b741b9caf7efa42c25264ae084b086.png" />
                </div>
            </div>
        </div>
    </section>
    <section class="flex-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h1>
                        Build a Portfolio, Create a Network, and Land Your Dream Programming Job
                    </h1>
                    <p>Techdegree is a bootcamp-tier program that guides you through a full 
                    curriculum that includes a portfolio of curated projects, workshops, quizzes, 
                    and access to the exclusive Treehouse Slack community.</p>
                    <div class="flex-content-btn">
                        <a class="button" href="#">Explore Techdegree</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 how-it-works-plans">
                    <div class="col-12 how-it-works">
                        <div class="how-it-works-grid">
                            <div>
                                <h5><i class="fas fa-atom fa-2x"></i></h5>
                            </div>
                            <div>
                                <h5>Curated Curriculum and Projects</h5>
                            </div>
                        </div>              
                    </div>
                    <div class="col-12 how-it-works">
                        <div class="how-it-works-grid">
                            <div>
                                <h5>
                                    <i class="far fa-folder-open fa-2x"></i>
                                </h5>
                            </div>
                            <div>
                                <h5>Project Reviews</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 how-it-works">
                        <div class="how-it-works-grid">
                            <div>
                                <h5>
                                    <i class="fas fa-users fa-2x"></i>
                                </h5>
                            </div>
                            <div>
                                <h5>Exclusive Slack Community</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 how-it-works">
                        <div class="how-it-works-grid">
                            <div>
                                <h5>
                                    <i class="far fa-plus-square fa-2x"></i>
                                </h5>
                            </div>
                            <div>
                                <h5>Plus everything from Courses</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teams-p3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="teams-title mb-5">
                        Graduates starting their career at
                    </h2>
                </div>
            </div>
           
            <div class="row teams-p3-images">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                    <img alt="nike-logo" src="/assets/plugins/images/nike_logo.png"/>
                </div>
                <div class="col-12 col-sm-4  col-md-4 col-lg-3">
                    <img alt="adoboe-logo" src="/assets/plugins/images/adobe_logo.png" />
                </div>
                <div class="col-12  col-sm-4  col-md-4 col-lg-3">
                    <img alt="mailchimp-logo" src="/assets/plugins/images/mailchimp_logo.png" />
                </div>
                <div class="col-12 col-sm-12  col-md-12 col-lg-3">
                    <img alt="vacasa-logo" src="/assets/plugins/images/vacasa_logo.png" />
                </div>
            </div>

            <div class="row teams-p3-images mt-3">
                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                    <img alt="hubspot-logo" src="/assets/plugins/images/hubspot_logo.png" />
                </div>
                <div class="col-12 col-sm-4  col-md-4 col-lg-3">
                    <img alt="chegg-logo" src="/assets/plugins/images/cheg_logo.png" />
                </div>
                <div class="col-12  col-sm-4  col-md-4 col-lg-3">
                    <img alt="airbnb-logo" src="/assets/plugins/images/airbnb_logo.png" />
                </div>
                <div class="col-12 col-sm-12  col-md-12 col-lg-3">
                    <img alt="verizon-logo" src="/assets/plugins/images/verizon_logo.png" />
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-7 col-lg-7 experiment-quiz-preview">
                    <img alt="A woman watching educational videos on her laptop" src="/assets/plugins/images/experiment_quiz_preview-7e7d8f47455099570bdb3abc7ce5a3d66fca5816aa53ffdfd6e1d46a76a77e90.png" /> 
                </div>
                <div class="col-12 col-sm-4 col-md-5 col-lg-5 where-to-start">
                    <h2 class="text-white">Not sure where to start?</h2>
                    <h5 class="text-white">No problem, we are here to help! Just answer a couple of questions 
                    related to your interests and goals, and we will help set you on the right 
                    path on your learning journey.</h5>
                    
                    <div class="mt-5">
                        <a class="button" href="#">Take Quiz</a>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <section class="user-stories">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <h2>Success stories with Treehouse</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <h5>
                        Treehouse's mission is to diversify the tech industry through accessible education,
                    unlocking the door to opportunity, and empowering people to achieve their dreams.
                    </h5>
                </div>
            </div>

            <div class="row mt-5">
                <div id="stories" class="carousel carousel-dark slide col-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="20000">
                            <!-- carousel user-story -->
                            <div class="card user-story">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-lg-4">
                                        <img src="/assets/plugins/images/adrian.jpg" />
                                    </div>

                                    <div class="col-12 col-sm-8 col-lg-7 story">
                                        <div>
                                            <h3>Adrian Tolero</h3>
                                            <h6>Albuera, Leyte</h6>
                                            <p class="mt-3">
                                                Not once in my life did I ever think of pursuing coding as a career. 
                                                Being part of a Filipino family, everyone was either a nurse or a doctor. 
                                                I wanted to do neither. So for the first 10 years of my adult life, 
                                                I went from job to job not knowing where my life would end up. 
                                                So what first encouraged me was realizing that code gave you the ability 
                                                to choose where you wanted your life to end up.
                                            </p>
                                        </div>
                                        <div class="read-more-story">
                                            <a href="#" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- carousel-item -->

                        <div class="carousel-item" data-bs-interval="20000">
                            <!-- carousel user-story -->
                            <div class="card user-story">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-lg-4">
                                        <img src="/assets/plugins/images/primary_malina-sq-776a8f96081d11a72c3b3058f8cdee338695744bac1e942983b3a3748dbc99da.jpg" />
                                    </div>

                                    <div class="col-12 col-sm-8 col-lg-7 story">
                                        <div>
                                            <h3>Malina Tran</h3>
                                            <h6>New York, New York</h6>
                                            <p class="mt-3">
                                                In nine months, I transformed from being an absolute novice (knowing nothing beyond very fundamental
                                        HTML and CSS) to working professionally as a developer. The great thing is that I was learning with Treehouse every
                                        step along the way. After getting my feet wet with HTML and CSS, I decided to tackle Ruby, a back-end programming
                                        language with syntax that is pretty beginner friendly...
                                            </p>
                                        </div>
                                        <div class="read-more-story">
                                            <a href="#" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- carousel-item -->

                        <div class="carousel-item" data-bs-interval="20000">
                            <!-- carousel user-story -->
                            <div class="card user-story">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-lg-4">
                                        <img src="/assets/plugins/images/primary_Brian-36698fd1b1079df9636b5378ef7b03197bc26cebd0ff2cb58d96a9da96fa8ccf.jpg" />
                                    </div>
                                    <div class="col-12 col-sm-8 col-lg-7 story">
                                        <div>
                                            <h3>Brian Polonia</h3>
                                            <h6>Bronx, New York</h6>
                                            <p class="mt-3">
                                                The Tracks I''ve done on Treehouse have exposed me to front end web development, full stack JavaScript development,
                                        iOS development, Java, Python, and UX/UI Design. While I was completing the Tracks I applied my coding skills to building freelance projects for friends,
                                        family, and local business owners...
                                            </p>
                                        </div>
                                        <div class="read-more-story">
                                            <a href="#" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" data-bs-interval="20000">
                            <!-- carousel user-story -->
                            <div class="card user-story">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-lg-4">
                                        <img src="/assets/plugins/images/primary_P-Luna-sq-4411378a4ab213a3e5a6188f310793dfcce911810fc2e936118a186f79106155.jpg" />
                                    </div>
                                    <div class="col-12 col-sm-8 col-lg-7 story">
                                        <div>
                                            <h3>Priscilla Luna</h3>
                                            <h6>Oklahoma City, Oklahoma</h6>
                                            <p class="mt-3">
                                                ...learning to code was fun for me! I remember staying up until 1 am one night working on a
                                            project because I was so determined to figure out this one JavaScript function.
                                            I was totally hooked. Treehouse played a big role by making the courses easy to absorb,
                                            all the while having complete faith in my ability to learn and complete the projects.
                                            </p>
                                        </div>
                                        <div class="read-more-story">
                                            <a href="#" class="button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="d-flex justify-content-center">
                        <button class="btn me-5" type="button" data-bs-target="#stories" data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i> Previous
                        </button>
                        <button class="btn" type="button" data-bs-target="#stories" data-bs-slide="next">
                            Next <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>      
        </div>
    </section>
    <section class="homepage-qa">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12">
                    <h1>Q&A</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-1" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>How long does my subscription last?</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-1">
                        <p>Treehouse subscriptions are monthly, with the option to cancel your subscription at any time.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-2" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>Do you have a free trial?</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-2">
                        <p>Yes! We offer everyone a seven-day free trial. You can take advantage of it by visiting our <a href="#">sign-up</a> page.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-3" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>What can I do if I'm stuck on a learning task?</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-3">
                        <p>
                            Our <a href="#">Community</a> is a great resource if you're stuck! It's also a great place to practice code
                        reviews. If you're unable to get a satisfactory response from our Community, you can send an email
                        to <a href="#">help@teamtreehouse.com</a> for help from our Support team.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-4" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>How do I download videos for offline viewing</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-4">
                        <p>
                            Video downloads are available only to Courses Plus subscribers. If you're a Courses Plus
                            subscriber, you can download the video(s) directly from the site.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-5" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>Do you offer a Group Membership at a discounted rate?</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-5">
                        <p>
                            We do offer group membership discounts. Please fill out the form <a href="#">here</a> and someone from our
                            Organizations team will follow up with you.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-sm-12 mb-2">
                        <a href="#feature-6" data-bs-toggle="collapse" class="homepage-qa-border" tabindex="0">
                            <span class="homepage-question-cont">
                                <span>
                                    <p>What if I have a question that isn't answered here?</p>
                                </span>
                                <span class="homepage-chevron-container">
                                    <i class="bi bi-chevron-down rotate"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 homepage-qa-answer collapse" id="feature-6">
                        <p>
                            Refer to our full-length <a href="#">FAQ page</a>, or reach out directly to <a href="#">help@teamtreehouse.com</a>. We're here to help!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="start-trial">
                        <a href="#" class="button">Start Your Free Trial</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" class="color-bar-footer" width="100%" height="3" viewbox="0 0 1441 3" preserveaspectratio="none">
        <g fill="none" fill-rule="evenodd">
            <rect width="144" height="3" fill="#0B88C3"></rect>
            <rect width="144" height="3" x="144" fill="#00D377"></rect>
            <rect width="144" height="3" x="288" fill="#00B950"></rect>
            <rect width="144" height="3" x="432" fill="#FFD247"></rect>
            <rect width="144" height="3" x="576" fill="#FF9800"></rect>
            <rect width="144" height="3" x="720" fill="#FF464F"></rect>
            <rect width="144" height="3" x="864" fill="#FF82B3"></rect>
            <rect width="144" height="3" x="1008" fill="#FF4385"></rect>
            <rect width="144" height="3" x="1152" fill="#A47DCC"></rect>
            <rect width="145" height="3" x="1296" fill="#875BB5"></rect>
        </g>
    </svg>
    <footer>
        <div class="container">
            <div class="row footer">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                    <h6>Treehouse</h6>
                    <div class="col-12 footer-links">
                        <a href="#">About</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Blog</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Careers</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Community</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Stories</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Shop</a>
                    </div>
                    <div class="col-12 footer-links">
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 full-catalogue footer-separator">
                    <a href="#" class="footer-libraries">See Full Catalogue</a>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <h6>Tech degree</h6>
                            <div class="col-12 footer-links">
                                <a href="#">Web development</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Front End Web development</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Full Stack JavaScript</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Python Development</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Data Analysis</a>
                            </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <h6>Tracks</h6>
                            <div class="col-12 footer-links">
                                <a href="#">Learn to Code for Beginners</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Beginning Python</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Beginning SQL</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Beginning Java</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">...see more</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <h6>Courses</h6>
                            <div class="col-12 footer-links">
                                <a href="#">JavaScript Basics</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Intro to HTML & CSS</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">Python Basics</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">CSS Layout</a>
                            </div>
                            <div class="col-12 footer-links">
                                <a href="#">...see more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 footer-explore">
                    <h6>Explore</h6>
                    <div class="row">
                        <div class="col-12 footer-links">
                            <a href="#">Perks</a>
                        </div>
                        <div class="col-12 footer-links">
                            <a href="#">Treehouse for Libraries</a>
                        </div>
                        <div class="col-12 footer-links">
                            <a href="#">Treehouse for Teams</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-tail">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="media-logos">
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin"></i>
                            <i class="fab fa-instagram-square"></i>
                            <i class="fab fa-tiktok"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 terms-and-conditions">
                    <div class="d-flex justify-content-center">
                        <a href="#">Terms & Conditions</a>
                        <span>|</span>
                        <a href="#">Privacy</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        &copy; 2021 Treehouse Island, Inc.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- try only -->



<?= $this->endSection() ?>