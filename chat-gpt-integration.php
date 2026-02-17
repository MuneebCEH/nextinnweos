<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nextinn - ChatGPT Integration Services</title>
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
    .margin-left-minus-9 { margin-left: -9px; }
    .font-bold { font-weight: bold; }
    .font-bold-7 { font-weight: 700; }
    .p-r { position: relative !important; }
    .in-bl { display: inline-block !important; }
    .m-t-2 { margin-top: 2px; }
    .ml5 { margin-left: 5px; }
    .mt70 { margin-top: 70px }
    .p-b-70 { padding-bottom: 70px; }
    .br20 { border-radius: 20px; }
    .p14 { padding: 14px; }

    /* Header Styling */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .header .d1 {
      background-color: transparent;
      margin-left: 14px;
      margin-top: 10px;
      max-width: 98%;
      transition: all 0.3s ease;
      border-radius: 20px;
    }

    .header.scrolled {
      background-color: #0e0e0e;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .header.scrolled .d1 {
      background-color: #0e0e0e;
      margin-top: 0;
      margin-left: 0;
      max-width: 100%;
      border-radius: 0;
    }

    .header .logo { margin-top: 6px; }
    .header nav ul li a { color: #D1D1D1 !important; }
    .header nav ul li ul { background-color: black !important; border: 1px solid #bb18d1; }
    .header nav ul li ul li a { color: #D1D1D1 !important; }
    .header nav ul li ul li a:hover { background-color: transparent !important; font-weight: 500; }
    .header .contact-d { border-radius: 30px; background-color: black; padding: 4px 0px; max-width: 202px; }
    .header .contact-d .phone-d { background-color: #C82AEF; width: 38px; padding: 6px 10px; border-radius: 23px; margin-left: 5px; display: inline-block; }
    .header .contact-d .phone-d i { color: white !important; font-size: 25px; }
    .header .contact-d .number-d { display: inline-block; }
    .header .contact-d .number-d span { color: #D1D1D1; margin-left: 9px; }

    /* Service Page Specific Styles (Matching ai-chatbot-development-2.php) */
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

    .ai2-cta:hover { transform: scale(1.05); box-shadow: 0 0 30px rgba(200, 42, 239, 0.6); }
    .ai2-cta .icon-d { background-color: #C82AEF; width: 38px; padding: 6px 10px; border-radius: 23px; margin-left: 12px; display: inline-block; }
    .ai2-cta .icon-d i { color: white; font-size: 20px; }
    .ai2-cta .text-d { display: inline-block; margin-left: 18px; }
    .ai2-cta .text-d span { color: var(--clr1); }

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

    .ai2-section p { color: var(--clr4); line-height: 1.7; max-width: 900px; margin: 0 auto 20px auto; }

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
      margin-bottom: 24px;
    }

    .ai2-card:hover { transform: translateY(-12px); border-color: rgba(200, 42, 239, 0.5); box-shadow: 0 30px 60px rgba(200, 42, 239, 0.2); background: rgba(255, 255, 255, 0.05); }
    .ai2-card h3 { font-size: 22px; font-weight: 700; color: #fff; margin-top: 20px; }
    .ai2-card p { color: rgba(255, 255, 255, 0.6); font-size: 15px; line-height: 1.6; }

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

    @media screen and (max-width: 575px) {
      .ai2-hero h1 { font-size: 36px; }
      .ai2-3d-container { height: 300px; }
    }
  </style>
</head>

<body>
  <div id="particles-js"></div>
  <div class="container-fluid">

    <?php include "header.php"; ?>

    <div class="row ai2-page">
      <div class="ai2-glow"></div>
      <div class="col-lg-12">
        <!-- Hero Section -->
        <div class="row ai2-hero">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <h1>Professional ChatGPT Integration Services</h1>
            <p>At Nextinn, we revolutionize business operations through comprehensive ChatGPT integration. Enhance your platform's capabilities with Natural Language Processing (NLP) and Machine Learning (ML) to deliver personalized customer support and automate repetitive tasks.</p>
            <a class="ai2-cta" href="contact-us.php">
              <div class="text-d"><span>Get Free Consultation</span></div>
              <div class="icon-d"><i class="fas fa-arrow-right"></i></div>
            </a>
          </div>
          <div class="col-lg-2"></div>
        </div>

        <!-- 3D Models Section -->
        <div class="row ai2-section">
          <div class="col-lg-6">
            <h2>Harnessing the Power of Generative AI</h2>
            <p>Businesses are integrating ChatGPT solutions into their operations to enhance overall efficiency. Nextinn is dedicated to revolutionizing customer interactions with expert integration services.</p>
            <p>Whether in healthcare, e-commerce, or legal services, our integrations automate responses, offer real-time support, and create personalized experiences. Maintain a competitive edge with smart, adaptable AI solutions.</p>
            <a class="ai2-cta" href="contact-us.php">
              <div class="text-d"><span>Schedule a Demo</span></div>
              <div class="icon-d"><i class="fas fa-arrow-right"></i></div>
            </a>
          </div>
          <div class="col-lg-6">
            <div class="ai2-3d-container" id="hero-3d"></div>
          </div>
        </div>

        <!-- Services Grid -->
        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>ChatGPT Integration Services Offered by Nextinn</h2>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-plug"></i></div>
              <h3>Custom API Integration</h3>
              <p>We connect ChatGPT directly with your existing software, CMS, or mobile applications, ensuring a seamless flow of data and intelligent interactions.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-headset"></i></div>
              <h3>Automated Customer Support</h3>
              <p>Revolutionize your customer service with AI that handles complex queries 24/7, providing instant, accurate, and human-like responses.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-laptop-code"></i></div>
              <h3>Workflow Automation</h3>
              <p>Streamline your business processes by integrating ChatGPT into your internal tools for automated reporting, data analysis, and task management.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-language"></i></div>
              <h3>Multilingual AI Solutions</h3>
              <p>Expand your reach globally with AI that communicates fluently in over 50 languages, providing localized support for every user.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-heartbeat"></i></div>
              <h3>Healthcare AI Applications</h3>
              <p>From telemedicine platforms to symptom checkers and medication reminders, we build AI interfaces that support both patients and healthcare professionals.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="ai2-card">
              <div class="ai2-icon"><i class="fas fa-search-dollar"></i></div>
              <h3>Conversational E-commerce</h3>
              <p>Boost your sales with AI assistants that guide users through product selection, handle checkouts, and provide personalized recommendations.</p>
            </div>
          </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="row ai2-section">
          <div class="col-lg-12">
            <h2>Our Technology Stack</h2>
            <p>We leverage industry-leading tools and frameworks to ensure your ChatGPT integration is robust, secure, and scalable.</p>
            <div class="row mt-4">
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">TensorFlow</div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">PyTorch</div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">Python</div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">AWS / Azure</div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">OpenAI API</div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="glass-btn p-3 bg-dark br20 border text-center">NLP Libraries</div>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA Final -->
        <div class="row ai2-section mb-5">
          <div class="col-lg-12">
            <div class="ai2-card py-5" style="border: 2px solid var(--clr3);">
              <h2>Ready to Transform Your Business with AI?</h2>
              <p>Join the AI revolution today. Contact Nextinn for a customized ChatGPT integration strategy.</p>
              <a href="contact-us.php" class="ai2-cta">
                <div class="text-d"><span>Get Started Now</span></div>
                <div class="icon-d"><i class="fas fa-phone-alt"></i></div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php include "footer.php"; ?>

  </div>

  <script>
    // Particles JS
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

    // Three.js Hero Animation
    function initHero3D() {
      const container = document.getElementById('hero-3d');
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
      const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
      renderer.setPixelRatio(window.devicePixelRatio);
      renderer.setSize(container.clientWidth, container.clientHeight);
      container.appendChild(renderer.domElement);

      const geometry = new THREE.TorusKnotGeometry(1.5, 0.4, 100, 16);
      const material = new THREE.MeshPhongMaterial({
        color: 0xc82aef,
        wireframe: true,
        emissive: 0x6366f1,
        emissiveIntensity: 0.5
      });
      const mesh = new THREE.Mesh(geometry, material);
      scene.add(mesh);

      const light = new THREE.PointLight(0xffffff, 1, 100);
      light.position.set(10, 10, 10);
      scene.add(light);
      scene.add(new THREE.AmbientLight(0x404040));

      camera.position.z = 5;

      function animate() {
        requestAnimationFrame(animate);
        mesh.rotation.x += 0.01;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
      }
      animate();

      window.addEventListener('resize', () => {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
      });
    }

    initHero3D();

    // Header Scroll Effect
    window.onscroll = function() {
      var header = document.querySelector(".header");
      if (window.pageYOffset > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    };
  </script>
</body>

</html>