<!DOCTYPE html>
<html lang="en">

<head>
    <title>AI Development Services | Nextinn</title>
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
    <style>
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

        /* Header Styles */
        .header .d1 {
            background-color: #0e0e0e;
            margin-left: 14px;
            margin-top: 14px;
            max-width: 98%;
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

        /* Page Styles */
        .detail-page-sec1 {
            margin-top: 61px;
        }

        .detail-page-sec1 .info h1 {
            background: linear-gradient(to right, #ffffff, #988b8b, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 51px;
        }

        .detail-page-sec1 .boxes {
            background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
            padding: 17px;
            border-radius: 15px;
            padding-bottom: 26px;
            margin-top: 20px;
            min-height: 400px;
        }

        .detail-page-sec1 .boxes .icon-container {
            padding: 15px;
            display: inline-block;
            border-radius: 9px;
            background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        }

        .detail-page-sec1 .boxes h1 {
            font-size: 20px;
            color: var(--clr1);
            position: relative;
            top: 17px;
            margin-left: 10px;
        }

        .detail-page-sec1 .boxes .container1 {
            border: 11px solid black;
            display: inline-block;
            border-radius: 18px;
            box-shadow: -1px -1px 1px #c529eb;
        }

        .detail-page-sec1 .boxes .icon-container i {
            color: var(--clr3);
            font-size: 41px;
        }

        .detail-page-sec1 .view-details-d {
            border-radius: 30px;
            background-color: black;
            padding: 12px 24px;
            max-width: 370px;
            box-shadow: -3px -2px 3px #c82aef;
            margin-top: 41px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
        }

        .detail-page-sec1 .view-details-d span {
            color: var(--clr1);
            font-weight: 600;
        }

        .detail-page-sec1 .view-details-d .icon-d {
            background-color: #C82AEF;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .detail-page-sec1 .view-details-d .icon-d i {
            color: white !important;
        }

        .detail-page-sec1 h3 {
            font-size: 16px;
            margin-top: 33px;
            color: var(--clr4);
            line-height: 1.6;
        }

        .detail-page-sec1 h2 {
            background: linear-gradient(to right, #ffffff, #988b8b, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 80px;
            font-size: 42px;
        }

        .detail-page-sec1 h4,
        .detail-page-sec1 h5 {
            color: var(--clr4);
            margin-top: 24px;
            line-height: 1.6;
        }

        @media (min-width: 992px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php include "header.php"; ?>

        <div class="row detail-page-sec1">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row info">
                            <div class="col-lg-12">
                                <div class="heading-container">
                                    <h1>Advanced AI Development Services</h1>
                                    <h4>Empower your business with cutting-edge Artificial Intelligence solutions.
                                        Nextinn specializes in building scalable, secure, and intelligent AI systems
                                        that transform how you operate and compete in the digital age.</h4>

                                    <a href="contact-us.php" class="view-details-d">
                                        <span>Get Free Consultation</span>
                                        <div class="icon-d"><i class="fas fa-arrow-right"></i></div>
                                    </a>

                                    <h2>Revolutionize Your Business with AI</h2>
                                    <h5>Artificial Intelligence is no longer just a futuristic concept; it's a core
                                        component of modern business strategy. From automating repetitive tasks to
                                        providing deep insights from complex data, our AI development services are
                                        designed to drive efficiency and innovation.</h5>
                                    <h5>At Nextinn, we leverage the latest breakthroughs in machine learning, neural
                                        networks, and data science to build custom AI applications tailored to your
                                        specific needs. Whether you're looking to enhance customer experience or
                                        optimize supply chains, we have the expertise to deliver.</h5>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <h2>Our AI Development Core Expertise</h2>
                            </div>

                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-brain"></i></div>
                                    </div>
                                    <div class="in-bl">
                                        <h1>Custom AI Solutions</h1>
                                    </div>
                                    <h3>We design and develop bespoke AI systems that address your unique business
                                        challenges. Our solutions are built to be scalable and integrate seamlessly with
                                        your existing infrastructure.</h3>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-network-wired"></i></div>
                                    </div>
                                    <div class="in-bl">
                                        <h1>Neural Networks</h1>
                                    </div>
                                    <h3>Implement advanced deep learning models and neural networks to solve complex
                                        pattern recognition and classification problems, driving superior
                                        decision-making.</h3>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-database"></i></div>
                                    </div>
                                    <div class="in-bl">
                                        <h1>AI Integration</h1>
                                    </div>
                                    <h3>We help you integrate AI capabilities into your current software ecosystem,
                                        ensuring a smooth transition and immediate value realization from your AI
                                        investment.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
    </div>
</body>

</html>