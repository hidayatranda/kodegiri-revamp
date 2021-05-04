@extends('layouts/skeleton')

@section('title', 'Home')

@section('app')
@include('partials.navbar')
<section id="hero">
    <div class="container">
        <div class="row myrow-reverse align-items-center">
            <div class="col-12 col-md-6  " data-aos="fade-up" data-aos-delay="200">
                <h1 class="hero-title">
                    WHAT DO YOU NEED?
                </h1>
                <h3 class="hero-subtitle">
                    WE WILL LET YOU KNOW ABOUT US FIRST
                </h3>
                <p class="hero-text my-text">
                    You have come to the right place PT. Nation Evolution Code.
                    Here we provide what you need to learn and understand
                    the latest technological developments.
                </p>
                <a href="#" class="btn mybtn-second">
                    Chat Us Now!
                </a>
            </div>
            <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="hero-img">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container" data-aos="fade-up">
        <h1 class="title text-center mytext-primary">
            About
        </h1>
        <div class="row align-items-center ">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-img">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <p class="my-text">
                    Kodegiri is a one-stop IT consultant specializing in
                    managing and improving Education/Training and
                    Technology.
                </p>
                <p class="my-text">
                    We provide cutting-edge technology to fully support
                    human resource development and empowerment,
                    Helping companies and educational institutions solve
                    issues on improving their training and internal education
                    by combining technology & 23 years of experience.
                </p>
                <p class="my-text">

                    We have been a visionary and a reliable software
                    engineer and Localization partner for world-class brands
                    (Mitsubishi, STAR Group Global, Accelbytes, etc.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="campus">
    <div class="container" data-aos="fade-up">
        <h1 class="title text-center mytext-primary">
            KampusGiri
        </h1>
        <div class="row myrow-reverse align-items-center">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <p class="my-text">
                    KampusGiri is a sequence of actions that we provide to help educational institutions/company solve
                    their problem: improving their resource quality using technology. It consists of several programs
                    that are arranged based on the institution's needs.
                </p>
                <p class="my-text">
                    Some program is even free so the educational
                    institution can feel the benefits before continue to use our support As an internationally-proven
                    consultant, we provide a one-stop solution to training and education using a technological approach
                    and modern European-standard project management
                </p>
                <button href="#" class="mytext-second read-more bg-transparent border-0">
                    <i class="fas fa-long-arrow-alt-down fa-fw symbol-read"></i><span>Read More ...</span>
                </button>
            </div>
            <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="about-img">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row mt-4" id="description">
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Kodepreneur</h5>
                        <p class="card-text my-text">Skill-based Online and/or Offline Training Onsite Seminar/Webinar
                            Material:
                            Techpreneurship, Project management, Resource Management, Product Development, Leadership,
                            etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Software Development</h5>
                        <p class="card-text my-text">Focus group discussing several issue with
                            stakeholder/student/employee to
                            solve their issue. Available Offline/Onsite & Telegram Group.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Real-Project Internship</h5>
                        <p class="card-text my-text">Helping you create software that you need to support your training
                            and
                            education (e-learning platform, book digitalization, CRM) or other support system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Consultant</h5>
                        <p class="card-text my-text">Collaborating on projects from you that requires Kodegiri's
                            expertise on
                            Software development, project management, resource management and/or our project that
                            utilize your resource and expertise. Free-software, asset, cooperation, and many more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Collaboration</h5>
                        <p class="card-text my-text">Especially for our educational institution partner, we provide your
                            student
                            the opportunity to join our "on the job training" program to enhance their ability and
                            closing the gap between education and industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card" style="min-height: 531px">
                    <img src="{{ asset('images/banner.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">Business Funding</h5>
                        <p class="card-text my-text">In line with "STAR RETAIL" program, we open the opportunity to give
                            your
                            business unit full support on growing it: Training, Guidance, Collaboration, and even
                            Investment in the future.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button href="#" class="mytext-second read-more bg-transparent border-0">
                    <i class="fas fa-long-arrow-alt-up fa-fw symbol-read"></i><span>Hide</span>
                </button>
            </div>
        </div>
    </div>
</section>


<section id="services">
    <div class="container" data-aos="fade-up">
        <h1 class="title text-center mytext-primary">
            Services
        </h1>
        <section id="standard" data-aos="fade-up">
            <h3 class="subtitle mytext-primary">
                Our Standard Solution
            </h3>
            <div class="row  service-carousel owl-carousel owl-theme">
                {{-- <div class="col-md-4 col-12 mb-5"> --}}
                <div class="card pb-3" style="min-height: 251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">SELF-LEARNING
                            INTERACTIVE MODUL</h5>
                        <p class="card-text my-text">You'll get free e-learning
                            platform to train your sales as
                            they can access it via their own
                            mobile phone. Available in
                            sampAideal Platform
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second" target="_blank"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12 mb-5"> --}}
                <div class="card pb-3" style="min-height: 251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">TEAM ON DEMAND</h5>
                        <p class="card-text my-text">You can even get your own
                            team without spending any
                            effort to find one, we will
                            find them for you.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12 mb-5"> --}}
                <div class="card pb-3" style="min-height: 251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">KAMPUSGIRI &
                            KODEPRENEUR</h5>
                        <p class="card-text my-text">Our partnership with PT STAR
                            Software Indonesia allow us
                            to provide you the best and
                            most experienced incubation
                            and training ever with 23
                            years of experience.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12 mb-5 "> --}}
                <div class="card pb-3" style="min-height: 251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">IOT: LEARNING TOOLS</h5>
                        <p class="card-text my-text">The world will face the digital
                            transformation, so when you
                            need your everyday device to
                            be connected, we are there
                            for you.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12 mb-5"> --}}
                <div class="card pb-3" style="min-height: 251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">ACADEMIC SYSTEM &
                            CRM
                        </h5>
                        <p class="card-text my-text">You may need an integrated
                            system to run your business, as
                            we are handling STAR Group
                            Information system, our global
                            experience will help be a
                            beneficial add for you.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </section>

        <section id="non-standard" data-aos="fade-up">
            <h3 class="subtitle mytext-primary">
                Our Non-Standard Solution
            </h3>
            <div class="row service-carousel owl-carousel owl-theme">
                {{-- <div class="col-md-4 col-12"> --}}
                <div class="card pb-3" style="min-height:251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">WEBSITE</h5>
                        <p class="card-text my-text">You need a place as your
                            identity digitally, We will
                            build it for you from the
                            simplest to the advance
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12"> --}}
                <div class="card pb-3" style="min-height:251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">CUSTOM MOBILE
                            APPS</h5>
                        <p class="card-text my-text">When you need custom
                            mobile apps, our
                            experience in supporting
                            big company to create
                            mobile apps will help you.

                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12"> --}}
                <div class="card pb-3" style="min-height:251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">DIGITAL MARKETING</h5>
                        <p class="card-text my-text">Our partnership with PT STAR
                            Software Indonesia allow us
                            to provide you the best and
                            most experienced incubation
                            and training ever with 23
                            years of experience.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12"> --}}
                <div class="card pb-3" style="min-height:251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">SAMPAIDEAL</h5>
                        <p class="card-text my-text">A Platform in Android/iOS
                            that helps you and your
                            salesteam works even
                            better than ever
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
                {{-- <div class="col-md-4 col-12"> --}}
                <div class="card pb-3" style="min-height:251px">
                    <div class="card-body">
                        <h5 class="card-title mytext-second">TRANSLATION
                        </h5>
                        <p class="card-text my-text">As a part of world's leading
                            localization company,
                            STAR Group, Kodegiri can
                            also provide you to bring
                            you closer to your market
                            by make you speak their
                            language and culture.
                        </p>
                        <a href="{{ url('/review-pdf/kodegiri') }}" class="mytext-second"><i
                                class="fas fa-download fa-fw"></i>Download</a>
                        <img src="{{ asset('images/services/think.png') }}" alt="Kode Sales Training Image"
                            class="img-fluid rounded-circle my-service-img">
                    </div>
                </div>
                {{-- </div> --}}
            </div>

        </section>
    </div>
</section>

<section id="why-us">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="about-img">
                    <img src="{{ asset('images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <h1 class="title text-center mytext-primary" style="3em">
                    What will You Get
                </h1>
                <ol class="why-items">
                    <li class="why-item">
                        <h5 class="mytext-primary">CONSULTING FOR FREE</h5>
                        <p class="my-text">As our collaboration with enterprises and educational institution,
                            We position ourself as a consultant that discuss what our
                            partners need with no charge at all, our team will be available to
                            discuss with you even before we have any agreement. Because
                            our value is "Give more than universe will give you more".</p>
                    </li>
                    <li class="why-item">
                        <h5 class="mytext-primary">PROVIDING COMPLETE SOLUTION</h5>
                        <p class="my-text">You will not only receive tool, but also further support from us
                            such as resource training, recruitment, and even consulting to
                            our expert in education and training with 25 years of resource
                            and project management experience internationally.</p>
                    </li>
                    <li class="why-item">
                        <h5 class="mytext-primary">THE EXPERIENCE + THE KNOWLEDGE OF YOUTH</h5>
                        <p class="my-text">Kodegiri is the "Young" STAR Software Indonesia, which means
                            we inherit the experience of 25 years in the international level
                            combined with the technological knowledge of youth in this era.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="portfolio ">
    <div class="container" data-aos="fade-up">

        <h1 class="title text-center mytext-primary">
            Portfolio
        </h1>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/mitsubishi.png')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Mitsubishi</h4>
                        <p>App</p>
                        <a href="{{asset('images/portfolio/mitsubishi.png')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="App 1"><i class="fas fa-plus"></i></a>
                        <a href="https://play.google.com/store/apps/details?id=id.com.mmksi.salesforce"
                            class="details-link" title="More Details" target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/Bintang.PNG')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Bintang 35</h4>
                        <p>Web</p>
                        <a href="{{asset('images/portfolio/Bintang.PNG')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Web 3"><i class="fas fa-plus"></i></a>
                        <a href="https://www.bintang35.com/" class="details-link" title="More Details"
                            target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/Fremental.PNG')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Fremental</h4>
                        <p>Web</p>
                        <a href="{{asset('images/portfolio/Fremental.PNG')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="App 2"><i class="fas fa-plus"></i></a>
                        <a href="https://fremantle.com/" class="details-link" title="More Details" target="_blank"><i
                                class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/Speequel.PNG')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Speequel</h4>
                        <p>Web</p>
                        <a href="{{asset('images/portfolio/Speequel.PNG')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Card 2"><i class="fas fa-plus"></i></a>
                        <a href="https://speequal.com/" class="details-link" title="More Details" target="_blank"><i
                                class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/Star.PNG')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Star Indonesia</h4>
                        <p>Web</p>
                        <a href="{{asset('images/portfolio/Star.PNG')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Web 2"><i class="fas fa-plus"></i></a>
                        <a href="https://www.star-indonesia.id/" class="details-link" title="More Details"
                            target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="card card-featured">
                    <div class="portfolio-img"><img src="{{asset('images/portfolio/Swisscham.PNG')}}" class="img-fluid"
                            alt=""></div>
                    <div class="portfolio-info">
                        <h4>Swisscham</h4>
                        <p>Web</p>
                        <a href="{{asset('images/portfolio/Swisscham.PNG')}}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="App 3"><i class="fas fa-plus"></i></a>
                        <a href="https://swisscham.or.id/" class="details-link" title="More Details" target="_blank"><i
                                class="fas fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END PORTFOLIO -->
<section id="value" data-aos="fade-up" data-aos-delay="200">
    <h1 class="title text-center mytext-primary">Our Best Value</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card" style="min-height: 241px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-tachometer-alt fa-2x mytext-primary"></i>
                        </h5>
                        <h5 class="card-title mytext-primary">SPEED</h5>
                        <p class="card-text my-text">The best team is the fastest!
                            Yes, we believe it as we will make sure you'll
                            get the fastest response and work from us.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card" style="min-height: 241px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="far fa-star fa-2x mytext-primary"></i>
                        </h5>
                        <h5 class="card-title mytext-primary">QUALITY</h5>
                        <p class="card-text my-text">You'll get a dedicated team to make sure
                            everything you request will be done.
                            They will be your "personal assistant" rather
                            than our team of expert.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card" style="min-height: 241px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-sort-amount-up fa-2x mytext-primary"></i>
                        </h5>
                        <h5 class="card-title mytext-primary">CLASS</h5>
                        <p class="card-text my-text">You'll receive the highest level of project
                            management service as we have been
                            experiencing this field for more than 20
                            years.. There is no small or big client for us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container" data-aos="fade-up">
        <h1 class="title mytext-primary text-center">
            <span class="font-weight-bold" style="font-size: inherit">Our</span> Team
        </h1>
        <p class="my-text text-center" style="font-size: 14px">
            World class products are produced by world class teams as well. This is our best team consisting of various
            talented talents in the field of technology.
        </p>
        <div class="row">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team1.jpg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Afrizal Lutfhi">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Afrizal Luthfi L.
                                </h5>
                                <p class="card-text my-text">Komisaris & Co-Founder</p>
                                <p class="card-text" style="font-size: 12px">"You can say anything to anyone, but how
                                    you say it will
                                    determine
                                    how they will react."</p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team2.jpg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Cycas Rifky">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Cycas Rifky
                                </h5>
                                <p class="card-text my-text">CEO & Founder</p>
                                <p class="card-text" style="font-size: 12px">"Make your team feel respected, empowered
                                    and genuinely excited about the company’s mission."</p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team3.jpg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Cycas Rifky">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Karima Khan
                                </h5>
                                <p class="card-text my-text">Project Manager</p>
                                <p class="card-text" style="font-size: 12px">"Even if you don’t have the perfect idea to
                                    begin with, you can likely adapt."</p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team4.jpg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Cycas Rifky">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Gamendra Ch.
                                </h5>
                                <p class="card-text my-text">Sistem Analyst</p>
                                <p class="card-text" style="font-size: 12px">“If there are nine rabbits on the ground,
                                    and you want to catch one, focus on just one.”</p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team5.jpg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Cycas Rifky">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Randa Hidayat
                                </h5>
                                <p class="card-text my-text">Senior Software Engineer
                                </p>
                                <p class="card-text" style="font-size: 12px">"You should learn from your competitor, but
                                    never copy. Copy and you die."</p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card mb-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4 col-4">
                            <div class="img-frame">
                                <img src="{{ asset('images/team/team6.jpeg') }}"
                                    class="card-img rounded-circle  my-img-thumbnail" alt="Cycas Rifky">
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body">
                                <h5 class="card-title mytext-second font-weight-bold">Andri
                                </h5>
                                <p class="card-text my-text">Business Relations Spesialist</p>
                                <p class="card-text" style="font-size: 12px">“If you’ve never tried, how will you ever
                                    know if there’s any chance?”

                                </p>
                                <div class="sosmed">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="career" data-aos="fade-up" data-aos-delay="200">
    <div class="container text-center">
        <h1 class="title mytext-primary">
            Careers
        </h1>
        <p>When you choose Kodegiri, you are teaming up with some of the most talented, brilliant and tech-obsessed
            people in the
            industry. What are you waiting for? Join in on the fun!</p><br>
        <p>Do you want to join us as a freelance and earn extra money? klik the link below!</p>
    </div>
    <div class="text-center">
        <button type="submit"
            style="background-color: #4B8632; color:#fff; border:0; width:150px; height:40px; border-radius:50px;">
            <a href="https://api.whatsapp.com/send?phone=62895363558879&text=&source=&data=" style="color: #fff">JOIN
                US
                !</a>
        </button>
    </div>
</section>

<section id="price">
    <div class="container">
        <h1 class="title text-center mytext-primary">
            Pricing
        </h1>
        <div class="row">
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-body">
                        <h3>BRONZE</h3>
                        <h4><sup>$</sup>25<span>per hours</span></h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Free Consultation</li>
                            <li><i class="fas fa-check"></i> Free Design</li>
                            <li><i class="fas fa-check"></i> Free 3 Month Maintenance</li>
                            <li><i class="fas fa-check"></i> Dedicated Team 2 hours/day</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Additional Resource Available</span></li>
                            <li class="na"><i class="bx bx-x"></i> <span>Digital Marketing</span></li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="https://api.whatsapp.com/send?phone=6281225929178&text=&source=&data="
                                class="buy-btn">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-body">
                        <h3>SILVER</h3>
                        <h4><sup>$</sup>32<span>per hours</span></h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Free Consultation</li>
                            <li><i class="fas fa-check"></i> Free Design</li>
                            <li><i class="fas fa-check"></i> Free 3 Month Maintenance</li>
                            <li><i class="fas fa-check"></i> Dedicated Team 4 hours/day</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Additional Resource Available</span></li>
                            <li class="na"><i class="bx bx-x"></i> <span>Digital Marketing</span></li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="https://api.whatsapp.com/send?phone=6281225929178&text=&source=&data="
                                class="buy-btn">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-body">
                        <h3>GOLD</h3>
                        <h4><sup>$</sup>39<span>per hours</span></h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Free Consultation</li>
                            <li><i class="fas fa-check"></i> Free Design</li>
                            <li><i class="fas fa-check"></i> Free 3 Month Maintenance</li>
                            <li><i class="fas fa-check"></i> Dedicated Team 6 hours/day</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Additional Resource Available</span></li>
                            <li class="na"><i class="bx bx-x"></i> <span>Digital Marketing</span></li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="https://api.whatsapp.com/send?phone=6281225929178&text=&source=&data="
                                class="buy-btn">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-body">
                        <h3>DIAMOND</h3>
                        <h4><sup>$</sup>49<span>per hours</span></h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Free Consultation</li>
                            <li><i class="fas fa-check"></i> Free Design</li>
                            <li><i class="fas fa-check"></i> Free 3 Month Maintenance</li>
                            <li><i class="fas fa-check"></i> Full Day Dedicated Team (8 hours)</li>
                            <li><i class="fas fa-check"></i> Additional Resource Available </li>
                            <li><i class="fas fa-check"></i> Digital Marketing </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="https://api.whatsapp.com/send?phone=6281225929178&text=&source=&data="
                                class="buy-btn">Get
                                Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class=" col-md-5 py-5 col-12" data-aos="fade-up" data-aos-delay="200">
                <h1 class="title text-center mytext-primary mb-0" style="font-size: 3em">Contact Us</h1>

                <p class="my-text">
                    If you are interested in working with us or just want to talk shop with some really smart, talented
                    people, let us know!
                </p>
                <div class="contact-item d-flex">
                    <div class="contact-left mytext-primary">
                        <i class="fas fa-map-marker-alt fa-fw fa-3x"></i>
                    </div>
                    <div class="contact-right">
                        <a href="" class="d-block">St. Kenanga No. 126B
                            Jombor kidul, Sinduadi, Mlati Sleman, Yogyakarta
                            55284</a>
                    </div>
                </div>
                <div class="contact-item ">
                    <div class="contact-left mytext-primary">
                        <i class="fas fa-phone-alt fa-fw fa-3x"></i>
                    </div>
                    <div class="contact-right">
                        <a href="">(0274) 623971 (Office)</a>
                        <a href="">+62 813-3393-3132 (Cycas)</a>
                        <a href="">+62 812-2592-9178 (Andri)</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-left mytext-primary">
                        <h6><i class="far fa-envelope fa-fw fa-3x"></i></h6>
                    </div>
                    <div class="contact-right">
                        <a href="">cycas@kodegiri.com</a>
                        <a href="">sales@kodegiri.com</a>
                        <a href="">BRO1@kodegiri.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-12" data-aos="fade-up" data-aos-delay="300">
                <form action="" method="post">
                    <div class="form-group form-container">
                        <div class="form-input">
                            <label for="name" class="form-label">Personal or Company Name</label>
                            <input type="text" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group form-container">
                        <div class="form-input">
                            <label for="email" class="form-label">Your Email address</label>
                            <input type="text" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group form-container">
                        <div class="form-input">
                            <label for="phone" class="form-label">Contact Phone Number</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group form-container">
                        <div class="form-input">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" id="message" name="message" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn mybtn-second w-100 justify-content-center"><i
                            class="far fa-paper-plane fa-fw"></i>Send Message</button>

                </form>
            </div>
        </div>
    </div>
</section>

<div class="sosmed-fix">
    <div class="sosmed">
        <a href="">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
</div>

<div id="preloader"></div>

<footer id="footer">
    <div class="footer-container">
        <div class="row content">
            <div class="col-md-3 col-12">
                <a href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Kodegiri Logo" class="img-fluid" height="90">
                </a>
                <p class="footer-logoText">Kodegiri All right reserved.</p>
            </div>
            <div class="col-md-6 col-12">
                <div class="footer-item">
                    <h5 class="mytext-second">Kodegiri</h5>
                    <a href="">St. Kenanga No. 126B Jombor kidul, Sinduadi, Mlati Sleman, Yogyakarta 55284</a>
                </div>
                <div class="footer-item">
                    <h5 class="mytext-second">Phone</h5>
                    <a href="" class="d-block">(0274) 623971 (Office)</a>
                    <a href="" class="d-block">+62 813-3393-3132 (Cycas)</a>
                    <a href="" class="d-block">+62 812-2592-9178 (Andri)</a>
                </div>
                <div class="footer-item">
                    <h5 class="mytext-second">Email</h5>
                    <a href="" class="d-block">cycas@kodegiri.com</a>
                    <a href="" class="d-block">sales@kodegiri.com</a>
                    <a href="" class="d-block">BRO1@kodegiri.com</a>
                </div>
            </div>
            <div class="col-md-3 footer-links col-12">
                <a href="">
                    Home
                </a>
                <a href="">
                    About
                </a>
                <a href="">
                    Services
                </a>
                <a href="">
                    Portfolio
                </a>
                <a href="">
                    Team
                </a>
                <a href="">
                    Careers
                </a>
                <a href="">
                    Pricing
                </a>
                <a href="">
                    Contact
                </a>
                <div class="social-media">
                    <h5 class="mytext-second">Social Networks</h5>
                    <div class="sosmed">
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-11 text-right pt-3 col-12 my-footer">
                <span>&copy; Copyright 2021 <strong><span>PT. Kode Evolusi Bangsa.</span></strong> All Rights
                    Reserved</span>
            </div>
        </div>
    </div>
</footer>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

<script>
    $(".service-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          900: {
            items: 3
          }
        }
    });
</script>
@endpush