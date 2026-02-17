<!DOCTYPE html>
<html lang="en">

<head>
    <title>Custom Web Development | Nextinn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style>
        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        :root {
            --clr1: #D1D1D1;
            --clr3: #C82AEF;
            --clr4: #8B8B8B;
        }

        body {
            background-color: black;
            color: white;
        }

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

        .detail-page-sec1 {
            margin-top: 61px;
        }

        .detail-page-sec1 h1 {
            background: linear-gradient(to right, #ffffff, #988b8b, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 51px;
        }

        .boxes {
            background: linear-gradient(to bottom right, #0E0E0E, #1F1F1F);
            padding: 24px;
            border-radius: 15px;
            margin-top: 20px;
            min-height: 350px;
            border: 1px solid rgba(200, 42, 239, 0.1);
        }

        .container1 {
            border: 11px solid black;
            display: inline-block;
            border-radius: 18px;
            box-shadow: -1px -1px 1px #c529eb;
            margin-bottom: 20px;
        }

        .icon-container {
            padding: 15px;
            border-radius: 9px;
            background: linear-gradient(to bottom right, #1F1F1F, #0E0E0E);
        }

        .icon-container i {
            color: var(--clr3);
            font-size: 30px;
        }

        h2 {
            background: linear-gradient(to right, #ffffff, #988b8b, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 60px;
        }

        .view-details-d {
            border-radius: 30px;
            background-color: black;
            padding: 12px 24px;
            max-width: 320px;
            box-shadow: -3px -2px 3px #c82aef;
            margin-top: 41px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
        }

        .view-details-d span {
            color: var(--clr1);
            font-weight: 600;
        }

        .view-details-d .icon-d {
            background-color: #C82AEF;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 992px) {
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
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
                        <h1>Custom Web Development</h1>
                        <p style="color: var(--clr4); font-size: 18px; margin-top: 20px;">Build a powerful online
                            presence with our specialized web development services. Nextinn crafts interactive,
                            high-performance websites tailored to your brand.</p>
                        <a href="contact-us.php" class="view-details-d">
                            <span>Build Your Website</span>
                            <div class="icon-d"><i class="fas fa-arrow-right"></i></div>
                        </a>
                        <h2>Web Presence Mastered</h2>
                        <p style="color: var(--clr4); line-height: 1.8;">Our expert developers use the latest modern
                            frameworks to create websites and web applications that are fast, secure, and fully
                            responsive.</p>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-laptop-code"></i></div>
                                    </div>
                                    <h1 style="font-size:22px;">Frontend Excellence</h1>
                                    <p style="color: var(--clr4);">Pixel-perfect, responsive frontend development using
                                        modern frameworks like React, Vue, or Next.js for a seamless user experience.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-server"></i></div>
                                    </div>
                                    <h1 style="font-size:22px;">Robust Backend</h1>
                                    <p style="color: var(--clr4);">Secure and scalable backend development with Node.js,
                                        Python, or PHP, providing a solid foundation for your web services.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="boxes">
                                    <div class="container1">
                                        <div class="icon-container"><i class="fas fa-shopping-cart"></i></div>
                                    </div>
                                    <h1 style="font-size:22px;">E-Commerce Solutions</h1>
                                    <p style="color: var(--clr4);">Feature-rich e-commerce platforms that drive sales
                                        and provide a smooth shopping journey for your customers.</p>
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