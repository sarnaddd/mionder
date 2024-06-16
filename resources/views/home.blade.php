<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>MIONDER</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<body>
    <nav>
        <pi>
            <img src="images\mionder_logo.png" alt="MIONDER" width="140" height="70">
        </pi>
        <div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#free">Free Trial</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#customer">Review</a></li>
                <li><a href="#article">Articles</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        @if (Auth::check())
        <div style="display: flex; gap: 20px;">
            <p><i class="fa fa-user"></i> {{Auth::user()->name}}</p>
            <a href="/dashboard" style="text-decoration: none;">Dashboard</a>
            <a href="{{route('actionlogout')}}" style="text-decoration: none; color: red"><i class="fa fa-power-off"></i> Log Out</a>
        </div>
        @else
        <div class="button_login">
            <a href="/login">Sign Up / Login</a>
        </div>
        @endif
    </nav>

    <section class="hero">
        <div class="hero-left">
            <h1>
                Mind Of Wonder
            </h1>
            <p>
                Welcome to the number one online-based psychology service. We are offering top-quality healthcare that's accessible anytime, anywhere, with round-the-clock support.
            </p>
            <br>
            <div class="started">
                <a href="/login">Get started</a>
            </div>
        </div>
        <div class="hero-right">
            <img src="images/konsultasi.png" width="400" height="400">
        </div>
    </section>

    <section class="service" id="service">
        <h1>
            Our Services
        </h1>
        <div class="garis">
        </div>
        <p class="sub-service">
            We guarantee to provide only the best choices and services tailored to your needs and preferences. Adjust them accordingly to find the most suitable option for your health. For further information on suitable services, do not hesitate to get in touch with our customer service via email.
        </p>
        <div class="service-grid">
            <div class="service-item">
                <img src="images/search.png" alt="">
                <h5>Find a Doctor</h5>
                <p class="p-items">Choose your doctor from thousands of specialist and trusted hospitals with personalized preference</p>
            </div>
            <div class="service-item">
                <img src="images/obat.png" alt="">
                <h5>Self Survey</h5>
                <p class="p-items">
                    Take a quick self-survey to check your mental health level, which can provide valuable insights and help to understand where you stand before beginning any further steps</p>
            </div>
            <div class="service-item">
                <img src="images/hp.png" alt="">
                <h5>1 on 1 Counseling</h5>
                <p class="p-items">Confidential consultations and counseling with our expert doctors that are available online</p>
            </div>
            <div class="service-item">
                <img src="images/info.png" alt="">
                <h5>Detailed Result</h5>
                <p class="p-items">We provide thorough counseling, ensuring you receive accurate prescriptions and recommendations down to the smallest details</p>
            </div>
            <div class="service-item">
                <img src="images/emergency.png" alt="">
                <h5>Emergency Helpline </h5>
                <p class="p-items">We provide 24-hour crisis counseling, support groups, and suicide prevention services</p>
            </div>
            <div class="service-item">
                <img src="images/tracking.png" alt="">
                <h5>The Tracker</h5>
                <p class="p-items">Keep track of and save your medical history and health data</p>
            </div>
        </div>
    </section>

    <section class="leading" id="free">
        <div class="leading-left">
            <img src="images/download.png" width="400" height="400">
        </div>
        <div class="leading-right">
            <h1>
                Free Online Therapy Trial
            </h1>
            <p>
                Discover yourself with our free online therapy trial. Experience personalized, discreet, and convenient therapy sessions at no cost. In this trial, gain insights into the supportive environment we provide, understanding that privacy and comfort are at the forefront of our service. Our free online therapy trial is designed to ease your initial steps towards mental wellness, offering a space where your thoughts and feelings can be shared without judgment
            </p>
            <br>
            <button>Learn More</button>
        </div>
    </section>

    <section class="download" id="download">
        <div class="download-left">
            <h1>
                Download our mobile apps
            </h1>
            <p>
                Access counseling sessions conveniently from home or anywhere with an internet connection. Enjoy thorough, affordable mental health services without relying on health insurance. Whether it is due to remote location, income concerns, or comfort preferences — Mionder can allow accessibility that may not be found elsewhere
            </p>
            <br>
            <a href="https://play.google.com/store/games?hl=en&gl=US"
                target="_blank">
                Download Now
            </a>
        </div>
        <div class="download-right">
            <img src="images/healthcare.png" width="400" height="400">
        </div>
    </section>

    <section class="customer" id="customer">
        <h1>
            What our customers are saying
        </h1>
        <div class="garis2">
        </div>
        
        <div class="review">
            <div class="review-person">
                <div>
                    <img src="images/anne.png" alt="">
                </div>
                <div class="review-name">
                    <h4>
                        Anne Hathaway
                    </h4>
                    <p>
                        Founder of About The Fit
                    </p>
                </div>
            </div>
            <p class="sub-customer">
                “I have an infant, so the idea of actually going out to therapy was daunting. Mionder services help me connect with a doctor whenever it works for me. The doctor has been extremely responsive and supportive as I sought therapy for the first time. He is great at listening and finding mechanisms to help me help myself.”
            </p>
        </div>
        
    </section>

    <section class="article"  id="article">
        <h1>
            Articles
        </h1>
        <div class="garis3">
        </div>
        <p class="sub-article">
            We provide the latest health articles on mental wellness to keep you informed about the newest developments and insights, 
            helping you stay up-to-date with the latest news and information.
        </p>
        <div class="article-grid">
            <div class="article-item">
                <img src="images/Article1.png" alt="">
                <div class="sub-article-item">
                    <h5>
                    ‘It went nuts’: Thousands join UK parents calling for smartphone-free childhood
                    <p class="p-items">
                        More than 4,000 parents have joined a group committed to barring young children from having smartphones..
                    </p>
                    <a href="https://www.theguardian.com/technology/2024/feb/17/thousands-join-uk-parents-calling-for-smartphone-free-childhood" target="_blank">
                        read more
                    </a>
                </div>
            </div>
            <div class="article-item">
                <img src="images/Article2.png" alt="">
                <div class="sub-article-item">
                <h5>
                    I can’t picture things in my mind. I didn’t realize that was unusual
                </h5>
                <p class="p-items">
                    I discovered I had aphantasia by accident. When you live your entire life without a “mind’s eye”..
                </p>
                <a href="https://www.theguardian.com/wellness/2024/feb/26/what-is-aphantasia-like"
                target="_blank">
                    read more
                </a>
                </div>
            </div>
            <div class="article-item">
                <img src="images/Article3.png" alt="">
                <div class="sub-article-item">
                <h5>
                    Senior suicide: the silent generation speaking up on a quiet killer
                </h5>
                <p class="p-items">
                    Over-85s have become the Australians most susceptible to suicide and a general lack of support is threatening...
                </p>
                <a href="https://www.theguardian.com/society/2024/feb/25/australia-suicide-rates-seniors-data"
                target="_blank">
                    read more
                </a>
                </div>
            </div>
        </div>
        <div class="view">
            <button>View all</button>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-left">
            <img src="/images/mionder_logo.png" alt="">
            <p>
                Mionder provides top-quality healthcare that's accessible anytime, anywhere, with round-the-clock support.
            </p>
            <br>
            <p>
                © 2024 Mionder. All rights reserved
            </p>
            </div>
        </div>
        <div class="about-center">
            <h4>
                Company
            </h4>
            <ul>
                <li>
                    <a href="#">
                        About
                    </a>
                </li>
                <li>
                    <a href="#">
                        Reviews
                    </a>
                </li>
                <li>
                    <a href="#">
                        Find a doctor
                    </a>
                </li>
                <li>
                    <a href="#">
                        Apps
                    </a>
                </li>
            </ul>
        </div>
        <div class="about-right">
            <h4>
                Help
            </h4>
            <ul>
                <li>
                    <a href="#">
                        Help center
                    </a>
                </li>
                <li>
                    <a href="#">
                        Contact support
                    </a>
                </li>
                <li>
                    <a href="#">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        Emergency line
                    </a>
                </li>
            </ul>
        </div>
    </section>
    
</body>
</html>