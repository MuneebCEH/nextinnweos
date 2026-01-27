<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nextinn - AI Chatbot Development 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <style>
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: -1;
      background-color: #000;
    }

    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    :root {
      --primary-color-1: #D1D1D1 !important;
      --color-1: #D1D1D1 !important;
      --color-5: #1F1F1F !important;
      --color-2: #8B8B8B !important;
      --clr1: #D1D1D1 !important;
      --clr2: #FFFFFF !important;
      --clr3: #C82AEF !important;
      --clr4: #8B8B8B !important;
      --clr5: white !important;
      --clr6: #988b8b !important;
      --clr7: black !important;
      --clr8: #0e0e0e !important;
      --clr9: #BCBCBC !important;
      --clr10: #7A7A7A !important;
      --th-bg-color-2: #0E0E0E !important;
      --th-bg-clr-3: #040404 !important;
    }

    body {
      background-color: black;
    }

    /* Utility Classes */
    .margin-left-minus-9 {
      margin-left: -9px;
    }

    .font-bold {
      font-weight: bold;
    }

    .font-bold-7 {
      font-weight: 700;
    }

    .p-r {
      position: relative !important;
    }

    .in-bl {
      display: inline-block !important;
    }

    .m-t-2 {
      margin-top: 2px;
    }

    .ml5 {
      margin-left: 5px;
    }

    .mt70 {
      margin-top: 70px
    }

    .p-b-70 {
      padding-bottom: 70px;
    }

    .br20 {
      border-radius: 20px;
    }

    .p14 {
      padding: 14px;
    }

    /* Utility Classes */

    /* Header */
    .header .d1 {
      background-color: #0e0e0e;
      margin-left: 14px;
      margin-top: 14px;
      max-width: 98%;
    }

    .header .logo {
      margin-top: 6px;
    }

    .header nav ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul {
      background-color: black !important;
      border: 1px solid #bb18d1;
    }

    .header nav ul li ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul li a:hover {
      background-color: transparent !important;
      font-weight: 500;
    }

    .header .contact-d {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .header .contact-d .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 5px;
      display: inline-block;
    }

    .header .contact-d .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .header .contact-d .number-d {
      display: inline-block;
    }

    .header .contact-d .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    /* Header */

    @media (min-width: 992px) {
      .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }

    @media screen and (max-width: 575px) {
      .header .logo-container {
        max-width: 144px;
        margin: auto;
      }

      nav .container .collapse-container {
        max-width: 58px;
        margin: auto;
      }

      .header .contact-d-container {
        max-width: 203px;
        margin: auto;
      }

      .text-center-m {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div id="particles-js"></div>
  <div class="container-fluid">

    <?php
    include "header.php";
    ?>

    <style>
      .ai2-page {
        margin-top: 61px;
        color: var(--clr1);
        position: relative;
      }

      .ai2-glow {
        position: absolute;
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, rgba(200, 42, 239, 0.15) 0%, rgba(200, 42, 239, 0) 70%);
        filter: blur(80px);
        top: -200px;
        right: -200px;
        z-index: -1;
        pointer-events: none;
      }

      .ai2-hero {
        padding: 100px 0 60px 0;
        position: relative;
        z-index: 1;
        text-align: center;
      }

      .ai2-hero h1 {
        font-size: 64px;
        font-weight: 800;
        background: linear-gradient(135deg, #fff 0%, #a855f7 50%, #6366f1 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 0 auto 24px auto;
        line-height: 1.1;
        letter-spacing: -1.5px;
        text-transform: capitalize;
      }

      .ai2-hero p {
        color: var(--clr4);
        font-size: 16px;
        max-width: 800px;
        line-height: 1.7;
        margin: 0 auto 24px auto;
      }

      .ai2-hero .col-lg-6 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .ai2-feature-img {
        width: 100%;
        border-radius: 18px;
        border: 1px solid rgba(200, 42, 239, 0.25);
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.6);
        background: #0e0e0e;
      }

      .ai2-feature-frame {
        padding: 14px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(200, 42, 239, 0.18), rgba(14, 14, 14, 0.9));
        border: 1px solid rgba(200, 42, 239, 0.2);
      }

      .ai2-cta {
        margin: 30px auto 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 40px;
        background-color: #000;
        padding: 8px 10px;
        width: fit-content;
        min-width: 260px;
        box-shadow: 0 0 20px rgba(200, 42, 239, 0.4);
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .ai2-cta:hover {
        transform: scale(1.05);
        box-shadow: 0 0 30px rgba(200, 42, 239, 0.6);
      }

      .ai2-cta .icon-d {
        background-color: #C82AEF;
        width: 38px;
        padding: 6px 10px;
        border-radius: 23px;
        margin-left: 12px;
        display: inline-block;
      }

      .ai2-cta .icon-d i {
        color: white;
        font-size: 20px;
      }

      .ai2-cta .text-d {
        display: inline-block;
        margin-left: 18px;
      }

      .ai2-cta .text-d span {
        color: var(--clr1);
      }

      .ai2-3d-container {
        width: 100%;
        height: 450px;
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .ai2-3d-canvas {
        width: 100%;
        height: 100%;
      }

      .ai2-section {
        margin-top: 70px;
        position: relative;
        z-index: 1;
        text-align: center;
      }

      .ai2-section h2 {
        background: linear-gradient(to right, #ffffff, #988b8b, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin: 0 auto 24px auto;
        font-size: 38px;
        font-weight: 700;
        line-height: 1.2;
      }

      .ai2-section .col-lg-6 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .ai2-section p {
        color: var(--clr4);
        line-height: 1.7;
        max-width: 900px;
        margin: 0 auto 20px auto;
      }

      .ai2-subtitle {
        font-size: 24px;
        color: #a855f7;
        margin-bottom: 30px;
        text-align: center;
        width: 100%;
        display: block;
        font-weight: 500;
      }

      .ai2-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 40px 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        height: 100%;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .ai2-card:hover {
        transform: translateY(-12px);
        border-color: rgba(200, 42, 239, 0.5);
        box-shadow: 0 30px 60px rgba(200, 42, 239, 0.2);
        background: rgba(255, 255, 255, 0.05);
      }

      .ai2-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        margin-top: 20px;
      }

      .ai2-card p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 15px;
        line-height: 1.6;
      }

      .ai2-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #c82aef 0%, #6366f1 100%);
        color: white;
        font-size: 24px;
        box-shadow: 0 10px 20px rgba(200, 42, 239, 0.3);
      }

      .ai2-icon-sm {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        font-size: 14px;
      }

      .ai2-card-head {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 20px;
        width: 100%;
      }

      .ai2-card-img {
        width: 44px;
        height: 44px;
        object-fit: contain;
        filter: drop-shadow(0 6px 12px rgba(0, 0, 0, 0.5));
      }

      .ai2-list {
        padding-left: 0;
        list-style: none;
      }

      .ai2-list li {
        padding: 10px 0;
        border-bottom: 1px solid rgba(200, 42, 239, 0.18);
        color: var(--clr4);
      }

      .ai2-steps {
        margin-top: 24px;
      }

      .ai2-step {
        background: linear-gradient(135deg, rgba(200, 42, 239, 0.12), rgba(14, 14, 14, 0.85));
        border: 1px solid rgba(200, 42, 239, 0.25);
        border-radius: 16px;
        padding: 30px 20px;
        height: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .ai2-step h4 {
        font-size: 20px;
        color: #fff;
        margin-bottom: 12px;
        font-weight: 700;
      }

      .ai2-faq {
        margin-top: 24px;
      }

      .ai2-faq .ai2-card {
        padding: 18px;
      }

      .ai2-faq h4 {
        font-size: 17px;
        color: var(--clr1);
      }

      @keyframes cube-float {

        0%,
        100% {
          transform: translate(-50%, -50%) rotateX(-18deg) rotateY(28deg) translateY(0);
        }

        50% {
          transform: translate(-50%, -50%) rotateX(-10deg) rotateY(38deg) translateY(-12px);
        }
      }

      @keyframes orbit {
        0% {
          transform: translate(-50%, -50%) rotateX(70deg) rotateZ(0deg);
        }

        100% {
          transform: translate(-50%, -50%) rotateX(70deg) rotateZ(360deg);
        }
      }

      @media screen and (max-width: 575px) {
        .ai2-hero h1 {
          font-size: 36px;
        }

        .ai2-orbit {
          margin-top: 30px;
          height: 300px;
        }
      }
    </style>

    <div class="row ai2-page">
      <div class="ai2-glow"></div>
      <div class="ai2-grid"></div>
      <div class="col-lg-12">
        <div class="row ai2-hero">
          <div class="col-lg-6">
            <h1>Customized AI Chatbot Development Services</h1>
            <p>Boost customer engagement with our customized AI chatbot development services. Converse with customers
              anytime, anywhere through our AI Chatbots. 24/7 automated support at a fraction of the time and cost.</p>
            <p>As the Chatbot market grows, more businesses are realizing the benefits of using chatbots. The ease of
              automation and AI-powered customer service solutions has led to a surge in chatbot use across industries.
            </p>
            <a class="ai2-cta" href="ai-chatbot-development-2.php">
              <div class="text-d">
                <span>Get Free Consultation</span>
              </div>
              <div class="icon-d">
                <i class="fas fa-arrow-right"></i>
              </div>
            </a>
          </div>
          <div class="col-lg-6">
            <div class="ai2-3d-container" id="hero-3d">
              <!-- Three.js Canvas will be here -->
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-6">
            <h2>AI Models Leveraged by Our Specialists</h2>
            <p>Businesses are integrating AI chatbot solutions into their operations to enhance overall efficiency.
              Next Inn is dedicated to revolutionizing customer interactions with chatbot development
              services.</p>
            <p>Whether in e-commerce or customer service, our chatbots automate tasks, offer real-time support, and
              create personalized experiences. Maintain a competitive edge in the digital landscape with our adaptable,
              smart, and ready-to-deploy conversational chatbot solutions.</p>
            <a class="ai2-cta" href="ai-chatbot-development-2.php">
              <div class="text-d">
                <span>Schedule a Demo</span>
              </div>
              <div class="icon-d">
                <i class="fas fa-arrow-right"></i>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="ai2-3d-container" id="models-3d">
              <!-- Three.js Canvas will be here -->
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>Customized AI Chatbot Development Services Offered by Next Inn</h2>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-robot"></i></div>
              </div>
              <h3>AI Chatbot Development Solutions</h3>
              <p>We offer end-to-end AI development services, including design, development, integration, and support.
                Our intelligent virtual assistants engage users in meaningful conversations 24/7.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-bezier-curve"></i></div>
              </div>
              <h3>Chatbot Design and Development</h3>
              <p>We specialize in creating chatbots designed for business needs. Our team collaborates to understand the
                brand, goals, and challenges. We develop chatbots according to your brand personality alignment.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-language"></i></div>
              </div>
              <h3>Multi-language Chatbot Development</h3>
              <p>We can develop multilingual chatbots that can converse seamlessly in different languages. We provide
                localized support and enhance customer satisfaction across diverse markets.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-plug"></i></div>
              </div>
              <h3>Chatbot Integration</h3>
              <p>Our integration experts ensure smooth chatbot integration across websites, apps, and messaging
                platforms. Our chatbot integration services enhance workflow efficiency, providing a platform for
                effortless communication.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-brain"></i></div>
              </div>
              <h3>Natural Language Processing Chatbot Development</h3>
              <p>With advanced NLP capabilities, we create AI chatbots that understand users' complex queries, provide
                accurate information, provide context-aware interactions, and resolve customer issues effectively.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-tools"></i></div>
              </div>
              <h3>Chatbot Maintenance and Support</h3>
              <p>Post-deployment, we ensure chatbots perform optimally through regular updates, upgrades, and issue
                resolution support. Our dedicated engineers perform monitoring and troubleshooting to optimize
                performance.</p>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>AI Chatbots We Develop</h2>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-microchip"></i></div>
              </div>
              <h3>AI Chatbot Engineering</h3>
              <p>We specialize in designing and developing advanced AI chatbots using machine learning, deep learning,
                and neural networks. Our AI chatbots automate tasks, enhance engagement, and drive business growth.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-microphone-alt"></i></div>
              </div>
              <h3>AI Voice Assistant Chatbots</h3>
              <p>Our virtual assistant development provides seamless and hands-free interactions. Our voice assistants
                can understand and converse with users just like humans, with the help of speech recognition, ML, and
                NLP.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-heartbeat"></i></div>
              </div>
              <h3>Healthcare Chatbots</h3>
              <p>We develop AI chatbots that provide personalized assistance to doctors and patients with clinical
                workflows and remote consultations. Our chatbots enhance patient engagement, improve health outcomes,
                and reduce costs.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-balance-scale"></i></div>
              </div>
              <h3>Legal Chatbots</h3>
              <p>Our legal chatbots help law firms and lawyers with client interactions, document review, legal
                research, and automate other tasks. Our chatbot provides accessible legal services and improves
                efficiency for both clients and lawyers.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-hashtag"></i></div>
              </div>
              <h3>Social Media Chatbot Program</h3>
              <p>We offer AI chatbots that engage customers and manage customer queries across all social media
                platforms. Enhance your brand presence, provide 24/7 support, and boost customer loyalty.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-eye"></i></div>
              </div>
              <h3>Vision-based Chatbots</h3>
              <p>We develop next-generation AI-powered chatbots that use computer vision and analyze visual inputs for
                enhanced understanding. Our chatbots provide context-aware interactions and deliver personalized
                recommendations.</p>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>Integrate Our Chatbots into Different Platforms</h2>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-globe"></i></div>
              </div>
              <h3>Websites</h3>
              <p>Give your website visitors the help they need right when they need it. Our chatbot for websites can
                answer queries, provide product information, and help checkout.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-comments"></i></div>
              </div>
              <h3>Social Media</h3>
              <p>Keep your social media followers engaged with our AI-powered AI chatbot. It can answer questions,
                support customers, and even run contests and promotions.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-shopping-cart"></i></div>
              </div>
              <h3>E-commerce Portals</h3>
              <p>Make online shopping a breeze for your customers with our AI chatbot. It can help them find products,
                track orders, and answer return questions.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fab fa-android"></i></div>
              </div>
              <h3>Android Applications</h3>
              <p>Enhance your Android app with our AI chatbot. It can provide customer support, automate tasks, and
                personalize user experience.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fab fa-apple"></i></div>
              </div>
              <h3>iOS Applications</h3>
              <p>Our cutting-edge AI chatbot is the perfect addition to your iOS app. It can provide 24/7 customer
                support, answer questions, and onboard new users.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-window-maximize"></i></div>
              </div>
              <h3>Web-Based Applications</h3>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>How Does Next Inn, a Premier AI Chatbot Development Company, Benefit Your Business?</h2>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-coins"></i></div>
              </div>
              <h3>Cost Savings</h3>
              <p>Our AI Chatbots act as virtual assistants, automating repetitive tasks that would otherwise require
                human intervention. This automation translates into significant cost savings, as chatbots don't demand
                salaries or benefits.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-bolt"></i></div>
              </div>
              <h3>Increased Efficiency</h3>
              <p>Chatbots provide 24/7 support, handling common inquiries and resolving issues promptly. This efficient
                response reduces customer wait times, enhances customer satisfaction, and frees human agents to focus on
                more complex matters.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-chart-line"></i></div>
              </div>
              <h3>Data-Driven Insights</h3>
              <p>Chatbots collect valuable customer data, providing insights into their preferences, needs, and
                behaviors. This data empowers businesses to make informed decisions, personalize customer experiences,
                and optimize marketing strategies.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-trophy"></i></div>
              </div>
              <h3>Competitive Advantage</h3>
              <p>Implementing chatbots demonstrates a commitment to innovation and customer-centricity. This dedication
                sets your business apart from competitors, attracting new customers and fostering brand loyalty.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-user-friends"></i></div>
              </div>
              <h3>Enhanced User Engagement</h3>
              <p>Chatbots create engaging interactions, keeping users interested and extending their time on your
                website or messaging platform. This engagement fosters stronger customer relationships and increases
                conversion rates.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-expand-arrows-alt"></i></div>
              </div>
              <h3>Scalability and Adaptability</h3>
              <p>Next Inn builds scalable AI chatbots adaptable to business growth. The chatbots ensure
                seamless integration with evolving technologies, keeping your business at the forefront of innovation.
              </p>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>AI Chatbot Development Platforms</h2>
            <h3 class="ai2-subtitle">Personalized Digital AI Solutions</h3>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-hospital"></i></div>
              </div>
              <h3>AI-Driven Hospital Management System</h3>
              <p>One of our valued clients needed a Hospital Information Management System (HIMS) to address issues like
                high costs, lack of medical staff, and security risks, which were affecting patient care and efficiency.
              </p>
              <p>Next Inn provides an AI-powered Hospital Information Management System that makes
                hospital tasks easier, simplifies record-keeping, and automates scheduling to ensure excellent patient
                care and smooth operations.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-notes-medical"></i></div>
              </div>
              <h3>Patient Diagnostic System - GP POD</h3>
              <p>A US-based organization needed a Patient Diagnostic System to make managing patients easier. Sharp Tech
                I T Solution created a custom AI-powered system called GP POD, which improved accuracy, made workflows
                smoother, reduced costs, and increased patient satisfaction, helping healthcare professionals.</p>
              <p>Working together, we improved healthcare by optimizing resources and focusing on patient needs.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon"><i class="fas fa-gavel"></i></div>
              </div>
              <h3>AI-Powered Law GPT</h3>
              <p>Our well-known client in the UK had problems with too much data and time-consuming tasks, making it
                hard to centralize legal information. Xeven Solutions teamed up with them and provided an AI-powered
                solution called LawGPT. This solution helps legal professionals by simplifying tasks, ensuring
                compliance, and identifying risks earlier.</p>
              <p>LawGPT offers affordable legal support and a complete solution to our client's challenges.</p>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>Get Started Today</h2>
            <p>Let's begin a conversation if you're interested in what we provide. When you communicate your specific
              requirements, our technical expert will take the initiative to schedule a call with you. During this call,
              the purpose is to understand the details of the data as per your requirements. This helps us make sure we
              get things just right for you.</p>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="ai2-step">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-phone-alt"></i></div>
              </div>
              <h4>Step 1: Contact Us</h4>
              <p>Please fill out the form below so we can contact you. Your details help us respond quickly. Thank you
                for cooperating and providing the needed information.</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="ai2-step">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-calendar-check"></i></div>
              </div>
              <h4>Step 2: Schedule a Call</h4>
              <p>Schedule a call with our team for a consultation and assess the feasibility of your project concept.
                Let's discuss and explore the possibilities together.</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="ai2-step">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-file-invoice-dollar"></i></div>
              </div>
              <h4>Step 3: Get a Cost Estimate</h4>
              <p>Receive a cost estimate by sharing your project details. After reviewing your requirements, we'll
                present a proposal with a budget and timeline.</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="ai2-step">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-rocket"></i></div>
              </div>
              <h4>Step 4: Project Kickoff</h4>
              <p>After project approval, we form a skilled and diverse team for the project kickoff. This team
                collaborates to initiate and successfully launch your project.</p>
            </div>
          </div>
        </div>


        <!-- Third 3D Section - AI Agent -->
        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2 class="text-center mb-4">Meet Your AI Assistant</h2>
            <div class="ai2-3d-container" id="smiley-agent-3d" style="height: 500px;">
              <!-- 3D AI Agent will be here -->
              <div
                style="position:absolute; bottom:20px; text-align:center; width:100%; color:rgba(255,255,255,0.5); font-size:12px; pointer-events:none;">
                Click and Drag to move the Agent | Mouse over to interact</div>
            </div>
          </div>
        </div>

        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>Frequently Asked Questions</h2>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>What are AI chatbots?</h4>
              <p>AI chatbots are artificial intelligence (AI) applications that can converse with humans like a real
                person would. Through natural language processing (NLP) and machine learning technologies, chatbots
                understand what users say and can respond appropriately.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>What is conversational AI?</h4>
              <p>Conversational AI is the branch of artificial intelligence that deals with conversations between humans
                and AI assistants, chatbots, or intelligent agents using natural language.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>How can Next Inn' AI chatbots help businesses?</h4>
              <p>Next Inn' AI chatbots can help businesses by providing 24/7 customer support, answering
                basic queries, completing tasks, driving sales, and enhancing customer experience.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>Which industries can benefit from AI chatbots?</h4>
              <p>Industries like e-commerce, healthcare, banking, travel &amp; hospitality, education, and retail can
                benefit greatly from AI chatbots. They are well-suited for customer service, appointment booking, order
                tracking, product recommendations, and basic troubleshooting.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>What technology powers these chatbots?</h4>
              <p>Advanced NLP and machine learning algorithms power Next Inn' chatbots. They are trained
                on large datasets of real conversations to understand language structure and context.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>What are the key features?</h4>
              <p>Key features include natural language understanding, knowledge retrieval from structured databases, and
                integration with various channels like websites, messaging apps, and CRM systems.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>Can the chatbots be customized?</h4>
              <p>Our chatbots can be customized during implementation to match your business goals, workflows, branding,
                and terminology.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>How do chatbots improve customer support?</h4>
              <p>Chatbots provide 24/7 on-demand support to customers via their preferred channels. They handle basic
                queries faster than humans to improve satisfaction.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>Do you support complex conversations?</h4>
              <p>We also offer advanced bots that can understand complex language and multi-turn conversations. Through
                continuous training with contextual data, they can tackle more involved queries.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>How do you ensure data security?</h4>
              <p>We ensure all customer data and interactions are securely handled according to industry best practices
                and regulations like GDPR.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>Can you integrate with our systems?</h4>
              <p>Our team will work with you to integrate chatbots via common channels like your website, mobile apps,
                messaging platforms, and CRM systems using APIs.</p>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="ai2-card">
              <div class="ai2-card-head">
                <div class="ai2-icon ai2-icon-sm"><i class="fas fa-question"></i></div>
              </div>
              <h4>Do you support multiple languages?</h4>
              <p>Our chatbots can be developed to support over 50 languages, including English, Spanish, French, Arabic,
                Chinese, Hindi, and more.</p>
            </div>
          </div>
        </div>

        <div class="row mt70">
          <div class="col-lg-12"></div>
        </div>
      </div>
    </div>


    <script>
      // Particles.js Initialization
      particlesJS("particles-js", {
        "particles": {
          "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
          "color": { "value": "#c82aef" },
          "shape": { "type": "circle" },
          "opacity": { "value": 0.5, "random": false },
          "size": { "value": 3, "random": true },
          "line_linked": { "enable": true, "distance": 150, "color": "#c82aef", "opacity": 0.4, "width": 1 },
          "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }
        },
        "retina_detect": true
      });

      // Three.js Utility Functions
      function createScene(containerId) {
        const container = document.getElementById(containerId);
        if (!container) return null;
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
        return { scene, camera, renderer, container };
      }

      // Hero 3D Scene (Futuristic AI Core)
      const hero = createScene('hero-3d');
      if (hero) {
        const coreGeo = new THREE.IcosahedronGeometry(1.8, 1);
        const coreMat = new THREE.MeshStandardMaterial({
          color: 0xffffff,
          wireframe: true,
          metalness: 0.9,
          roughness: 0.1,
          emissive: 0xc82aef,
          emissiveIntensity: 0.2
        });
        const core = new THREE.Mesh(coreGeo, coreMat);
        hero.scene.add(core);

        const innerGeo = new THREE.IcosahedronGeometry(1, 0);
        const innerMat = new THREE.MeshStandardMaterial({
          color: 0xc82aef,
          metalness: 0.5,
          roughness: 0.2,
          transparent: true,
          opacity: 0.6
        });
        const inner = new THREE.Mesh(innerGeo, innerMat);
        hero.scene.add(inner);

        const hLight = new THREE.PointLight(0xffffff, 2);
        hLight.position.set(5, 5, 5);
        hero.scene.add(hLight);

        const hPurpleLight = new THREE.PointLight(0xc82aef, 2);
        hPurpleLight.position.set(-5, -5, 5);
        hero.scene.add(hPurpleLight);

        hero.scene.add(new THREE.AmbientLight(0x404040, 1));
        hero.camera.position.z = 6;

        function animateHero() {
          requestAnimationFrame(animateHero);
          core.rotation.x += 0.003;
          core.rotation.y += 0.005;
          inner.rotation.x -= 0.01;
          inner.rotation.y -= 0.008;

          const pulse = 1 + Math.sin(Date.now() * 0.002) * 0.1;
          inner.scale.set(pulse, pulse, pulse);

          hero.renderer.render(hero.scene, hero.camera);
        }
        animateHero();
      }


      // Models 3D Section (Robot Playing with Earth)
      const models = createScene('models-3d');
      if (models) {

        const modelsGroup = new THREE.Group();

        // --- 1. EARTH ---
        const earthGroup = new THREE.Group();
        const earthGeo = new THREE.SphereGeometry(1.5, 64, 64);

        // Detailed Earth Texture (Procedural)
        const earthMat = new THREE.MeshPhongMaterial({
          color: 0x2233ff,
          emissive: 0x112244,
          shininess: 25,
          flatShading: false
        });
        const earth = new THREE.Mesh(earthGeo, earthMat);
        earthGroup.add(earth);

        // Clouds/Atmosphere layer
        const cloudGeo = new THREE.SphereGeometry(1.55, 32, 32);
        const cloudMat = new THREE.MeshLambertMaterial({
          color: 0xffffff,
          transparent: true,
          opacity: 0.3
        });
        const clouds = new THREE.Mesh(cloudGeo, cloudMat);
        earthGroup.add(clouds);

        // Continents (Simplified with shapes)
        for (let i = 0; i < 15; i++) {
          const continent = new THREE.Mesh(
            new THREE.SphereGeometry(Math.random() * 0.5 + 0.2, 16, 16),
            new THREE.MeshLambertMaterial({ color: 0x44aa44 })
          );
          const lat = (Math.random() - 0.5) * Math.PI;
          const lon = Math.random() * Math.PI * 2;
          continent.position.set(
            1.5 * Math.cos(lat) * Math.cos(lon),
            1.5 * Math.sin(lat),
            1.5 * Math.cos(lat) * Math.sin(lon)
          );
          earth.add(continent);
        }

        earthGroup.position.set(2, 0, 0);
        models.scene.add(earthGroup);

        // --- 2. WALKING ROBOT ---
        const robotGroup = new THREE.Group();
        const rMat = new THREE.MeshStandardMaterial({ color: 0xffffff, roughness: 0.2 });
        const rBlue = new THREE.MeshStandardMaterial({ color: 0x3b82f6 });

        // Robot Body (simplified for animation)
        const rHead = new THREE.Mesh(new THREE.SphereGeometry(0.5, 24, 24), rMat);
        rHead.position.y = 1;
        robotGroup.add(rHead);

        const rFace = new THREE.Mesh(new THREE.SphereGeometry(0.45, 24, 24), new THREE.MeshBasicMaterial({ color: 0x000000 }));
        rFace.scale.set(0.9, 0.6, 0.4);
        rFace.position.set(0, 1, 0.3);
        robotGroup.add(rFace);

        const rBody = new THREE.Mesh(new THREE.SphereGeometry(0.6, 24, 24), rMat);
        rBody.scale.set(1, 1.2, 0.8);
        robotGroup.add(rBody);

        // Legs for Walking
        const legL = new THREE.Mesh(new THREE.CylinderGeometry(0.1, 0.1, 0.8), rMat);
        legL.position.set(-0.3, -0.6, 0);
        robotGroup.add(legL);

        const legR = new THREE.Mesh(new THREE.CylinderGeometry(0.1, 0.1, 0.8), rMat);
        legR.position.set(0.3, -0.6, 0);
        robotGroup.add(legR);

        // Arms
        const armL = new THREE.Mesh(new THREE.CylinderGeometry(0.1, 0.1, 0.7), rMat);
        armL.position.set(-0.7, 0.2, 0);
        robotGroup.add(armL);

        const armR = new THREE.Mesh(new THREE.CylinderGeometry(0.1, 0.1, 0.7), rMat);
        armR.position.set(0.7, 0.2, 0);
        robotGroup.add(armR);

        robotGroup.position.set(-2, -0.5, 0);
        models.scene.add(robotGroup);

        // Lighting
        const mLight = new THREE.PointLight(0xffffff, 2);
        mLight.position.set(10, 10, 10);
        models.scene.add(mLight);

        const mPurpleLight = new THREE.PointLight(0xc82aef, 3);
        mPurpleLight.position.set(-10, -10, 10);
        models.scene.add(mPurpleLight);

        models.camera.position.z = 7;

        let mTargetX = 0, mTargetY = 0, mTick = 0;

        window.addEventListener('mousemove', (e) => {
          const rect = models.container.getBoundingClientRect();
          if (e.clientX >= rect.left && e.clientX <= rect.right && e.clientY >= rect.top && e.clientY <= rect.bottom) {
            mTargetX = ((e.clientX - rect.left) / rect.width - 0.5) * 4;
            mTargetY = -((e.clientY - rect.top) / rect.height - 0.5) * 4;
          }
        });

        function animateModels() {
          requestAnimationFrame(animateModels);
          mTick += 0.05;

          // 1. Earth Follow Mouse (Smoothly)
          earthGroup.position.x += (mTargetX + 1.5 - earthGroup.position.x) * 0.1;
          earthGroup.position.y += (mTargetY - earthGroup.position.y) * 0.1;
          earth.rotation.y += 0.01;
          clouds.rotation.y += 0.005;

          // 2. Walking Animation
          legL.rotation.x = Math.sin(mTick * 2) * 0.5;
          legR.rotation.x = Math.sin(mTick * 2 + Math.PI) * 0.5;
          armL.rotation.x = Math.sin(mTick * 2 + Math.PI) * 0.4;
          armR.rotation.x = Math.sin(mTick * 2) * 0.4;

          robotGroup.position.y = -0.5 + Math.abs(Math.cos(mTick * 2)) * 0.1;
          robotGroup.lookAt(earthGroup.position);

          models.renderer.render(models.scene, models.camera);
        }
        animateModels();
      }


      // AI Agent 3D Scene (V3 - PERFECT MATCH TO IMAGE)
      const agent = createScene('smiley-agent-3d');
      if (agent) {
        const agentGroup = new THREE.Group();

        // --- MATERIALS ---
        const robotWhite = new THREE.MeshStandardMaterial({
          color: 0xffffff,
          roughness: 0.1,
          metalness: 0.1
        });
        const robotBlue = new THREE.MeshStandardMaterial({
          color: 0x3b82f6, // Bright blue from image
          roughness: 0.2,
          metalness: 0.1
        });
        const robotMetal = new THREE.MeshStandardMaterial({
          color: 0x94a3b8,
          roughness: 0.2,
          metalness: 0.8
        });
        const screenBlack = new THREE.MeshBasicMaterial({ color: 0x0a0a0a });
        const faceGlow = new THREE.MeshBasicMaterial({ color: 0xffffff });

        // --- 1. HEAD ---
        const headGroup = new THREE.Group();

        // Base Box with many segments for smoothing
        const headBase = new THREE.Mesh(
          new THREE.BoxGeometry(2.2, 1.8, 1.6, 10, 10, 10),
          robotWhite
        );
        // Manually smoothing the box by scaling spheres at corners? 
        // No, let's use a Sphere but scale it to look like the image's "rounded cube"
        const headGeo = new THREE.SphereGeometry(1.2, 32, 32);
        const head = new THREE.Mesh(headGeo, robotWhite);
        head.scale.set(1.1, 0.9, 0.8);
        headGroup.add(head);

        // Black Screen Area
        const screenGeo = new THREE.SphereGeometry(1.05, 32, 32);
        const screen = new THREE.Mesh(screenGeo, screenBlack);
        screen.scale.set(0.85, 0.65, 0.4);
        screen.position.set(0, 0, 0.55);
        headGroup.add(screen);

        // Eyes (Circles)
        const eyeGeo = new THREE.CircleGeometry(0.12, 32);
        const eyeL = new THREE.Mesh(eyeGeo, faceGlow);
        eyeL.position.set(-0.35, 0.1, 0.96);
        headGroup.add(eyeL);

        const eyeR = new THREE.Mesh(eyeGeo, faceGlow);
        eyeR.position.set(0.35, 0.1, 0.96);
        headGroup.add(eyeR);

        // Smile (Custom Arc)
        const smileShape = new THREE.Shape();
        smileShape.absarc(0, 0, 0.35, Math.PI * 1.1, Math.PI * 1.9, false);
        const smileGeo = new THREE.ExtrudeGeometry(smileShape, { depth: 0.05, bevelEnabled: false });
        const smile = new THREE.Mesh(smileGeo, faceGlow);
        smile.position.set(0, -0.1, 0.9);
        smile.rotation.x = Math.PI * 0.05;
        headGroup.add(smile);

        // Ears (Blue Knobs)
        const earGeo = new THREE.CylinderGeometry(0.35, 0.35, 0.3, 32);
        const earL = new THREE.Mesh(earGeo, robotBlue);
        earL.position.set(-1.15, 0, 0);
        earL.rotation.z = Math.PI / 2;
        headGroup.add(earL);

        const earR = new THREE.Mesh(earGeo, robotBlue);
        earR.position.set(1.15, 0, 0);
        earR.rotation.z = Math.PI / 2;
        headGroup.add(earR);

        // Antenna
        const antStick = new THREE.Mesh(new THREE.CylinderGeometry(0.06, 0.06, 0.5), robotBlue);
        antStick.position.y = 1.1;
        headGroup.add(antStick);

        const antBall = new THREE.Mesh(new THREE.SphereGeometry(0.2, 16, 16), robotBlue);
        antBall.position.set(0, 1.4, 0);
        headGroup.add(antBall);

        headGroup.position.set(0, 2.5, 0);
        agentGroup.add(headGroup);

        // --- 2. TORSO ---
        const torso = new THREE.Mesh(new THREE.SphereGeometry(1, 32, 32), robotWhite);
        torso.scale.set(0.9, 1, 0.7);
        torso.position.y = 0.5;
        agentGroup.add(torso);

        // --- 3. ARMS ---
        const createArm = (side) => {
          const group = new THREE.Group();

          // Metallic main arm (segmented cylinder)
          const armSegments = new THREE.Group();
          for (let i = 0; i < 3; i++) {
            const seg = new THREE.Mesh(new THREE.CylinderGeometry(0.18, 0.18, 0.25, 16), robotMetal);
            seg.position.y = -i * 0.3;
            armSegments.add(seg);
          }
          group.add(armSegments);

          // Blue Cuff
          const cuff = new THREE.Mesh(new THREE.SphereGeometry(0.35, 16, 16), robotBlue);
          cuff.position.y = -1;
          group.add(cuff);

          // Metallic Claw (C shape)
          const clawGeo = new THREE.TorusGeometry(0.25, 0.08, 16, 100, Math.PI * 1.4);
          const claw = new THREE.Mesh(clawGeo, robotMetal);
          claw.position.y = -1.35;
          claw.rotation.z = Math.PI / 2;
          group.add(claw);

          return group;
        };

        const leftArm = createArm('left');
        leftArm.position.set(-1.2, 0.8, 0);
        leftArm.rotation.z = 0.4;
        agentGroup.add(leftArm);

        const rightArm = createArm('right');
        rightArm.position.set(1.2, 0.8, 0);
        rightArm.rotation.z = -0.4;
        agentGroup.add(rightArm);

        agent.scene.add(agentGroup);

        // --- LIGHTING ---
        // Soft overall light
        const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 1.2);
        agent.scene.add(hemiLight);

        // Direct light for shadows/depth
        const dirLight = new THREE.DirectionalLight(0xffffff, 1);
        dirLight.position.set(5, 5, 5);
        agent.scene.add(dirLight);

        // Blue accent light
        const pointLight = new THREE.PointLight(0x3b82f6, 1.5);
        pointLight.position.set(-5, 2, 5);
        agent.scene.add(pointLight);

        agent.camera.position.set(0, 1, 8);
        agent.camera.lookAt(0, 1.5, 0);

        let targetRotX = 0, targetRotY = 0, clock = 0;

        window.addEventListener('mousemove', (e) => {
          const rect = agent.container.getBoundingClientRect();
          if (e.clientX >= rect.left && e.clientX <= rect.right && e.clientY >= rect.top && e.clientY <= rect.bottom) {
            targetRotY = ((e.clientX - rect.left) / rect.width - 0.5) * 0.8;
            targetRotX = ((e.clientY - rect.top) / rect.height - 0.5) * 0.4;
          }
        });

        function animateAgent() {
          requestAnimationFrame(animateAgent);
          clock += 0.04;

          // Float animation
          agentGroup.position.y = Math.sin(clock) * 0.15;

          // Head & Group smoothing
          headGroup.rotation.y += (targetRotY - headGroup.rotation.y) * 0.1;
          headGroup.rotation.x += (targetRotX - headGroup.rotation.x) * 0.1;
          agentGroup.rotation.y += (targetRotY * 0.2 - agentGroup.rotation.y) * 0.05;

          // Arm swing
          leftArm.rotation.x = Math.sin(clock * 0.5) * 0.1;
          rightArm.rotation.x = Math.cos(clock * 0.5) * 0.1;


          // Smile pulse
          smile.scale.x = 1 + Math.sin(clock * 2) * 0.05;

          agent.renderer.render(agent.scene, agent.camera);
        }
        animateAgent();
      }



      // Handle Resize
      window.addEventListener('resize', () => {
        [hero, models, agent].forEach(app => {
          if (app) {
            app.camera.aspect = app.container.clientWidth / app.container.clientHeight;
            app.camera.updateProjectionMatrix();
            app.renderer.setSize(app.container.clientWidth, app.container.clientHeight);
          }
        });
      });
    </script>

    <?php
    include "footer.php";
    ?>
    <div class="row" style="margin-top:20px;">
      <div class="col-lg-12"></div>
    </div>

  </div>
</body>

</html>