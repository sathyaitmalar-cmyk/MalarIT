<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Malar Pvt Ltd - Professional IT Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #ff9102;
            --secondary: #3905f3;
            --dark: #eceaea;
            --light: #f9f9f9;
            --text: #333;
            --white: #ffffff;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            overflow-x: hidden;
            background: var(--white);
        }

        button,
        input,
        textarea,
        select {
            font-family: "Times New Roman", Times, serif;
        }

        /* ========== NAVBAR ========== */
        nav {
            display: flex;
            align-items: center;
            padding: 15px 50px;
            background: linear-gradient(135deg, var(--primary) 0%, #ff9102 100%);
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 10px 40px rgba(255, 145, 2, 0.2);
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 15px;
            animation: fadeInLeft 0.8s ease-out;
        }

        .logo-circle {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            border: 2px solid white;
        }

        .logo span {
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-links {
            flex: 1;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            position: relative;
            font-weight: 500;
            transition: 0.3s ease;
            animation: fadeInUp 0.8s ease-out backwards;
        }

        .nav-links a:nth-child(1) { animation-delay: 0.1s; }
        .nav-links a:nth-child(2) { animation-delay: 0.2s; }
        .nav-links a:nth-child(3) { animation-delay: 0.3s; }
        .nav-links a:nth-child(4) { animation-delay: 0.4s; }

        .nav-links a::after {
            content: '';
            width: 0;
            height: 2px;
            background: white;
            position: absolute;
            left: 0;
            bottom: -5px;
            transition: 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            transform: translateY(-3px);
        }

        .menu-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.14);
            cursor: pointer;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            transition: 0.3s ease;
        }

        .menu-toggle span {
            width: 22px;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: 0.3s ease;
        }

        .menu-toggle:hover {
            background: rgba(255, 255, 255, 0.24);
        }

        nav.menu-open .menu-toggle span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        nav.menu-open .menu-toggle span:nth-child(2) {
            opacity: 0;
        }

        nav.menu-open .menu-toggle span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        /* ========== HERO SECTION ========== */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 145, 2, 0.1) 0%, rgba(57, 5, 243, 0.1) 100%),
                        url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            filter: brightness(0.7) contrast(1.1);
            z-index: -2;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(255, 145, 2, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(57, 5, 243, 0.15) 0%, transparent 50%);
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: white;
            max-width: 800px;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            margin-bottom: 20px;
            font-family: "Times New Roman", Times, serif;
            font-weight: 700;
            line-height: 1.2;
            animation: slideInDown 0.8s ease-out;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 18px;
            margin-bottom: 30px;
            letter-spacing: 2px;
            animation: slideInUp 0.8s ease-out 0.2s backwards;
            opacity: 0.9;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: slideInUp 0.8s ease-out 0.4s backwards;
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .btn {
            background: var(--primary);
            color: white;
            padding: 14px 35px;
            text-decoration: none;
            border-radius: 50px;
            display: inline-block;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 10px 30px rgba(255, 145, 2, 0.3);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 145, 2, 0.4);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary);
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.3);
        }

        /* ========== FLOATING ELEMENTS ========== */
        .floating-box {
            position: absolute;
            border: 2px solid rgba(255, 145, 2, 0.3);
            border-radius: 10px;
            animation: float 3s ease-in-out infinite;
        }

        .floating-box:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            right: 5%;
            animation-delay: 0s;
        }

        .floating-box:nth-child(2) {
            width: 60px;
            height: 60px;
            bottom: 15%;
            left: 5%;
            animation-delay: 1s;
        }

        .floating-box:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 50%;
            right: 10%;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-30px); }
        }

        /* ========== ABOUT SECTION ========== */
        .about {
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--light) 0%, #f0f0f0 100%);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 145, 2, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: -200px;
            right: -200px;
            z-index: 0;
        }

        .about-container {
            max-width: 900px;
            margin: auto;
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 3rem;
            margin-bottom: 30px;
            color: rgb(0, 0, 0);
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            animation: fadeInUp 0.8s ease-out;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
            animation: expandWidth 0.8s ease-out 0.2s backwards;
        }

        @keyframes expandWidth {
            from {
                width: 0;
            }
            to {
                width: 100px;
            }
        }

        .about p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: var(--text);
            animation: fadeInUp 0.8s ease-out backwards;
            text-align: center;
        }

        .about p:nth-of-type(2) {
            animation-delay: 0.2s;
        }

        .about p:nth-of-type(3) {
            animation-delay: 0.3s;
        }

        .about h3 {
            margin-top: 40px;
            color: var(--primary);
            font-size: 24px;
            animation: fadeInUp 0.8s ease-out backwards;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .about h3:nth-of-type(1) {
            animation-delay: 0.4s;
        }

        .about h3:nth-of-type(2) {
            animation-delay: 0.5s;
        }

        /* ========== SERVICES SECTION ========== */
        .services {
            padding: 80px 20px;
            text-align: center;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .services::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(57, 5, 243, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -200px;
            left: -200px;
            z-index: 0;
        }

        .services-title {
            animation: fadeInUp 0.8s ease-out;
        }

        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            max-width: 1200px;
            margin: 50px auto 0;
            position: relative;
            z-index: 1;
        }

        .service-box {
            width: 300px;
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
            border-radius: 15px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            animation: slideInUp 0.8s ease-out backwards;
            position: relative;
            overflow: hidden;
        }

        .service-box:nth-child(1) { animation-delay: 0.1s; }
        .service-box:nth-child(2) { animation-delay: 0.2s; }
        .service-box:nth-child(3) { animation-delay: 0.3s; }

        .service-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, #ff9102 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .service-box:hover::before {
            left: 0;
        }

        .service-box h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--text);
            transition: color 0.3s ease;
            font-weight: 700;
        }

        .service-box p {
            font-size: 16px;
            color: #666;
            transition: color 0.3s ease;
            line-height: 1.6;
        }

        .service-box:hover h3,
        .service-box:hover p {
            color: white;
        }

        .service-box:hover {
            transform: translateY(-15px);
            border-color: var(--primary);
            box-shadow: 0 20px 50px rgba(255, 145, 2, 0.3);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            animation: bounce 2s ease-in-out infinite;
        }

        .service-box:nth-child(2) .service-icon {
            animation-delay: 0.2s;
        }

        .service-box:nth-child(3) .service-icon {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* ========== WHY SECTION ========== */
        .why {
            background: linear-gradient(135deg, #eeeeee 0%, #f5f5f5 100%);
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .why::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 145, 2, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            top: -200px;
            left: -200px;
            z-index: 0;
        }

        .why-container {
            max-width: 900px;
            margin: auto;
            position: relative;
            z-index: 1;
        }

        .why h2 {
            animation: fadeInUp 0.8s ease-out;
        }

        .why p {
            font-size: 20px;
            margin: 20px 0;
            color: var(--text);
            animation: fadeInUp 0.8s ease-out backwards;
            display: inline-block;
            padding: 15px 30px;
            background: white;
            border-radius: 50px;
            margin: 10px auto;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }

        .why p:nth-of-type(1) { animation-delay: 0.2s; }
        .why p:nth-of-type(2) { animation-delay: 0.3s; }
        .why p:nth-of-type(3) { animation-delay: 0.4s; }
        .why p:nth-of-type(4) { animation-delay: 0.5s; }

        .why p:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(255, 145, 2, 0.2);
            border-left-width: 8px;
        }

        /* ========== PROJECTS SECTION ========== */
        .projects {
            padding: 80px 20px;
            text-align: center;
            background: white;
            position: relative;
            overflow: hidden;
        }

        .projects::after {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(57, 5, 243, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -200px;
            right: -200px;
            z-index: 0;
        }

        .projects-title {
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s ease-out;
        }

        .projects-grid {
            max-width: 1200px;
            margin: 50px auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 1;
        }

        .project-card {
            text-decoration: none;
            color: var(--text);
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out backwards;
            cursor: pointer;
            position: relative;
            border-radius: 15px;
            overflow: hidden;
        }

        .project-card:nth-child(1) { animation-delay: 0.1s; }
        .project-card:nth-child(2) { animation-delay: 0.2s; }
        .project-card:nth-child(3) { animation-delay: 0.3s; }
        .project-card:nth-child(4) { animation-delay: 0.4s; }

        .project-image-wrapper {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 15px;
        }

        .project-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .project-card:hover img {
            transform: scale(1.1) rotate(2deg);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 145, 2, 0.9) 0%, rgba(57, 5, 243, 0.9) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 15px;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .overlay-text {
            color: white;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }

        .project-card:hover .overlay-text {
            transform: translateY(0);
        }

        .project-info {
            padding: 20px;
            background: white;
            border-radius: 0 0 15px 15px;
        }

        .project-card h3 {
            font-size: 18px;
            margin: 0;
            transition: color 0.3s ease;
            font-weight: 700;
            line-height: 1.4;
        }

        .project-card:hover h3 {
            color: var(--primary);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        /* ========== CONTACT SECTION ========== */
        .contact {
            background: #5b57e3;
            color: white;
            text-align: center;
            padding: 70px 20px;
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: 10%;
            right: 5%;
            z-index: 0;
        }

        .contact::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 145, 2, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -10%;
            left: -10%;
            z-index: 0;
        }

        .contact-container {
            max-width: 1100px;
            margin: auto;
            position: relative;
            z-index: 1;
        }

        .contact h2 {
            animation: fadeInUp 0.8s ease-out;
        }

        .contact .section-title {
            color: white;
        }

        .contact-intro {
            max-width: 760px;
            margin: 18px auto 35px;
            font-size: 18px;
            line-height: 1.7;
            opacity: 0.95;
            animation: fadeInUp 0.8s ease-out 0.1s backwards;
        }

        .contact-details {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin: 35px auto;
            text-align: left;
        }

        .contact-item {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 16px;
            align-items: flex-start;
            padding: 22px;
            background: rgba(255, 255, 255, 0.13);
            border: 1px solid rgba(255, 255, 255, 0.22);
            border-radius: 8px;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out backwards;
        }

        .contact-item:nth-child(1) { animation-delay: 0.15s; }
        .contact-item:nth-child(2) { animation-delay: 0.2s; }
        .contact-item:nth-child(3) { animation-delay: 0.25s; }
        .contact-item:nth-child(4) { animation-delay: 0.3s; }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: white;
            color: #5b57e3;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 800;
        }

        .contact-item h3 {
            margin-bottom: 8px;
            font-size: 18px;
            color: white;
        }

        .contact-item a,
        .contact-item p {
            color: white;
            text-decoration: none;
            font-size: 16px;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .contact-item a:hover {
            color: var(--primary);
        }

        .contact-closing {
            margin-top: 24px;
            font-size: 22px;
            font-weight: 600;
            line-height: 1.5;
        }

        .contact-buttons {
            margin-top: 28px;
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.4s backwards;
        }

        /* ========== WHATSAPP BUTTON ========== */
        .whatsapp {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 65px;
            height: 65px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 40px rgba(37, 211, 102, 0.4);
            animation: slideInRight 0.6s ease-out 1s backwards;
            z-index: 999;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .whatsapp:hover {
            transform: scale(1.15) rotate(10deg);
            box-shadow: 0 15px 50px rgba(37, 211, 102, 0.6);
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .whatsapp img {
            width: 35px;
            height: 35px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        /* ========== SCROLL REVEAL ========== */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ========== RESPONSIVE ========== */
        @media(max-width: 768px) {
            nav {
                padding: 12px 20px;
                flex-direction: row;
                justify-content: space-between;
                gap: 10px;
                flex-wrap: wrap;
            }

            .logo {
                flex: 1;
                justify-content: flex-start;
                min-width: 0;
            }

            .logo-circle {
                width: 42px;
                height: 42px;
                font-size: 18px;
            }

            .logo span {
                font-size: 16px;
                letter-spacing: 0;
            }

            .menu-toggle {
                display: flex;
            }

            .nav-links {
                flex-direction: column;
                gap: 0;
                width: 100%;
                text-align: center;
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                pointer-events: none;
                flex-basis: 100%;
                border-radius: 8px;
                background: rgba(255, 255, 255, 0.12);
                transition: max-height 0.35s ease, opacity 0.25s ease, padding 0.35s ease;
            }

            nav.menu-open .nav-links {
                max-height: 320px;
                opacity: 1;
                pointer-events: auto;
                padding: 10px 0;
            }

            .nav-links a {
                display: block;
                padding: 12px 10px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .section-title {
                font-size: 2rem;
            }

            .service-container {
                flex-direction: column;
                align-items: center;
            }

            .service-box {
                width: 100%;
                max-width: 300px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .floating-box {
                display: none;
            }

            .whatsapp {
                width: 55px;
                height: 55px;
                bottom: 20px;
                right: 20px;
            }

            .whatsapp img {
                width: 30px;
                height: 30px;
            }

            .contact {
                padding: 55px 16px;
            }

            .contact-intro {
                font-size: 16px;
                margin-bottom: 26px;
            }

            .contact-details {
                grid-template-columns: 1fr;
                gap: 14px;
                margin: 28px auto;
            }

            .contact-item {
                grid-template-columns: 42px 1fr;
                gap: 14px;
                padding: 18px;
            }

            .contact-icon {
                width: 42px;
                height: 42px;
                font-size: 17px;
            }

            .contact-item h3 {
                font-size: 17px;
            }

            .contact-item a,
            .contact-item p {
                font-size: 15px;
            }

            .contact-closing {
                font-size: 18px;
            }
        }

        /* ========== LOADING ANIMATION ========== */
        .page-load {
            animation: pageLoad 0.6s ease-out;
        }

        @keyframes pageLoad {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* ========== GRADIENT TEXT ========== */
        .gradient-text {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-logo {
            width: 160px;
            height: 160px;
            margin-bottom: 25px;
            animation: fadeInDown 1s ease-out, float 3s ease-in-out infinite;
            filter: drop-shadow(0 10px 30px rgba(255, 145, 2, 0.3));
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .team-section{
    padding:60px 20px;
    text-align:center;
    background:#f8f9fa;
}

.team-section h2{
    font-size:36px;
    margin-bottom:40px;
    color:#222;
}

.team-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
    max-width:1200px;
    margin:auto;
}

.team-card{
    background:#fff;
    padding:25px;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.team-card:hover{
    transform:translateY(-10px);
}

.team-card img{
    width:140px;
    height:140px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.team-card h3{
    font-size:22px;
    color:#111;
    margin-bottom:8px;
}

.team-card p{
    color:#777;
    font-size:16px;
}

/* ========== ACHIEVEMENTS SECTION ========== */
.achievements-section {
    padding: 80px 20px;
    text-align: center;
    background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.achievements-section::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 145, 2, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    top: -200px;
    right: -200px;
    z-index: 0;
}

.achievements-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.achievement-card {
    background: white;
    padding: 34px 28px;
    border-radius: 8px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    border: 1px solid rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
}

.achievement-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.achievement-card:hover::before {
    transform: scaleX(1);
}

.achievement-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(255, 145, 2, 0.2);
    border-color: var(--primary);
}

.achievement-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 96px;
    height: 38px;
    padding: 0 16px;
    margin-bottom: 18px;
    border-radius: 999px;
    background: rgba(255, 145, 2, 0.12);
    color: var(--primary);
    font-size: 16px;
    font-weight: 700;
    animation: fadeInUp 0.8s ease-out backwards;
}

.achievement-card:nth-child(1) .achievement-icon { animation-delay: 0s; }
.achievement-card:nth-child(2) .achievement-icon { animation-delay: 0.2s; }
.achievement-card:nth-child(3) .achievement-icon { animation-delay: 0.4s; }
.achievement-card:nth-child(4) .achievement-icon { animation-delay: 0.6s; }

.achievement-number {
    font-size: 3.2rem;
    font-weight: 800;
    color: var(--primary);
    margin: 8px 0 10px;
    font-family: "Times New Roman", Times, serif;
}

.achievement-label {
    font-size: 1.15rem;
    color: #555;
    font-weight: 500;
    line-height: 1.4;
}

.achievement-note {
    margin-top: 12px;
    color: #777;
    font-size: 15px;
    line-height: 1.6;
}

@media(max-width: 768px) {
    .achievements-grid {
        grid-template-columns: 1fr;
        max-width: 350px;
        margin: 50px auto 0;
    }
    
    .achievement-number {
        font-size: 2.5rem;
    }
}

/* ========== CUSTOMER REVIEWS SECTION ========== */
.reviews-section {
    padding: 80px 0;
    background: white;
    overflow: hidden;
    position: relative;
}

.reviews-section::before {
    content: '';
    position: absolute;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(57, 5, 243, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    top: -200px;
    left: -200px;
    z-index: 0;
}

.reviews-container {
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
    padding: 0 20px;
}

.reviews-title {
    text-align: center;
    margin-bottom: 60px;
    animation: fadeInUp 0.8s ease-out;
}

.reviews-scroll-wrapper {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 20px 0;
}

.reviews-scroll-wrapper::before,
.reviews-scroll-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    width: 150px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.reviews-scroll-wrapper::before {
    left: 0;
    background: linear-gradient(90deg, white 0%, transparent 100%);
}

.reviews-scroll-wrapper::after {
    right: 0;
    background: linear-gradient(270deg, white 0%, transparent 100%);
}

.reviews-track {
    display: flex;
    gap: 30px;
    animation: scroll-reviews 40s linear infinite;
    width: fit-content;
}

.reviews-track:hover {
    animation-play-state: paused;
}

@keyframes scroll-reviews {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

.review-card {
    background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    min-width: 400px;
    max-width: 400px;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    position: relative;
    flex-shrink: 0;
}

.review-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(255, 145, 2, 0.15);
    border-color: var(--primary);
}

.review-content {
    margin-bottom: 25px;
    position: relative;
    z-index: 1;
}

.review-text {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    font-style: italic;
    margin-bottom: 20px;
}

.review-rating {
    color: #ffc107;
    font-size: 20px;
    margin-bottom: 15px;
}

.review-author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.author-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
    flex-shrink: 0;
}

.author-info h4 {
    margin: 0;
    font-size: 18px;
    color: #222;
    font-weight: 600;
}

.author-info p {
    margin: 5px 0 0;
    font-size: 14px;
    color: #888;
}

@media(max-width: 768px) {
    .review-card {
        min-width: 320px;
        max-width: 320px;
        padding: 25px;
    }
    
    .reviews-scroll-wrapper::before,
    .reviews-scroll-wrapper::after {
        width: 50px;
    }
}
    </style>
</head>

<body class="page-load">

<!-- FLOATING ELEMENTS -->
<div class="floating-box"></div>
<div class="floating-box"></div>
<div class="floating-box"></div>

<!-- NAVBAR -->
<nav>
    <div class="logo">
        <div class="logo-circle">IT</div>
        <span>IT Malar Pvt Ltd</span>
    </div>

    <button class="menu-toggle" type="button" aria-label="Open navigation menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#projects">Portfolio</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<!-- HERO -->
<section id="home" class="hero">
    <div class="hero-content">
        <img src="6.png" alt="IT Malar Logo" class="hero-logo">
        <h1>Professional IT Solutions for <span class="gradient-text">Global Businesses</span></h1>
        <p class="hero-subtitle">Web Development | Mobile Applications | Business Software | Digital Growth</p>
        <p style="font-size: 18px; margin: 15px 0; opacity: 0.95; text-shadow: 0 5px 15px rgba(0,0,0,0.2); font-weight: 500;">IT Malar Pvt Ltd helps businesses build reliable, scalable, and client-ready digital products.</p>
        <div class="hero-buttons">
            <a href="https://wa.me/919629583169" class="btn" target="_blank" rel="noopener">Get Free Consultation</a>
            <a href="#services" class="btn btn-secondary">Explore Services</a>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about scroll-reveal">
    <div class="about-container">
        <h2 class="section-title">About Us</h2>
        <p>We are a <strong>results-driven IT solutions company</strong> based in <strong>India</strong>, serving businesses that need dependable technology, clean design, and measurable digital growth.</p>
        <p>IT Malar is backed by <strong>Malar Groups</strong>, an established organization founded by <strong>Selva Murugan K</strong> in <strong>2010</strong>. This foundation gives us strong business discipline, service quality, and long-term client commitment.</p>
        <p><strong>IT Malar</strong>, founded in <strong>2024</strong> and led by <strong>Manoj Kumar S</strong>, Co-Founder, delivers practical digital solutions for local and international clients. We specialize in websites, mobile applications, e-commerce platforms, custom software, CRM systems, and digital marketing.</p>

        <h3 style="margin-top: 50px; font-size: 28px; color: #000; text-align: center;">Our Core Values</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 24px; margin-top: 30px; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div style="background: white; padding: 28px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-top: 4px solid var(--primary); text-align: left;">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 21px;">Integrity</h4>
                <p style="color: #666; font-size: 16px; line-height: 1.7; text-align: left;">We communicate clearly, work transparently, and build trust through reliable delivery.</p>
            </div>
            
            <div style="background: white; padding: 28px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-top: 4px solid var(--secondary); text-align: left;">
                <h4 style="color: var(--secondary); margin-bottom: 10px; font-size: 21px;">Innovation</h4>
                <p style="color: #666; font-size: 16px; line-height: 1.7; text-align: left;">We use modern technology and practical thinking to solve real business problems.</p>
            </div>
            
            <div style="background: white; padding: 28px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-top: 4px solid var(--primary); text-align: left;">
                <h4 style="color: var(--primary); margin-bottom: 10px; font-size: 21px;">Client Focus</h4>
                <p style="color: #666; font-size: 16px; line-height: 1.7; text-align: left;">We align every solution with the client's goals, timeline, budget, and growth plan.</p>
            </div>
            
            <div style="background: white; padding: 28px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-top: 4px solid var(--secondary); text-align: left;">
                <h4 style="color: var(--secondary); margin-bottom: 10px; font-size: 21px;">Quality</h4>
                <p style="color: #666; font-size: 16px; line-height: 1.7; text-align: left;">We focus on clean design, stable performance, security, and long-term maintainability.</p>
            </div>
        </div>

        <h3 style="margin-top: 50px;">Our Mission</h3>
        <p style="font-size: 17px; font-weight: 500;">To empower businesses worldwide with innovative, scalable, and cost-effective IT solutions that drive digital transformation and sustainable growth.</p>

        <h3>Our Vision</h3>
        <p style="font-size: 17px; font-weight: 500;">To become a globally recognized technology partner, known for delivering exceptional digital experiences and building long-term relationships based on trust, quality, and innovation.</p>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="services scroll-reveal">
    <h2 class="section-title services-title">Our Services</h2>
    <div class="service-container">

        <div class="service-box scroll-reveal">
            <div class="service-icon">Web</div>
            <h3>Website Development</h3>
            <p>Business websites, e-commerce platforms, and custom web solutions tailored for your brand and market.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Technologies: HTML5, CSS3, JavaScript, React.js, Node.js, PHP, Laravel</p>
        </div>

        <div class="service-box scroll-reveal">
            <div class="service-icon">App</div>
            <h3>Mobile App Development</h3>
            <p>Android and iOS mobile applications built with secure architecture and user-friendly design.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Technologies: React Native, Flutter, Kotlin, Swift, Android Studio</p>
        </div>

        <div class="service-box scroll-reveal">
            <div class="service-icon">UX</div>
            <h3>UI/UX Design</h3>
            <p>Modern, intuitive, and responsive user interface designs that enhance user experience and engagement.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Tools: Figma, Adobe XD, Sketch, Photoshop, Illustrator</p>
        </div>

        <div class="service-box scroll-reveal">
            <div class="service-icon">Shop</div>
            <h3>E-Commerce Solutions</h3>
            <p>Complete online store setup with secure payment gateway integration and inventory management.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Platforms: WooCommerce, Shopify, Magento, Custom Solutions</p>
        </div>

        <div class="service-box scroll-reveal">
            <div class="service-icon">CRM</div>
            <h3>Custom Software Development</h3>
            <p>Tailored software solutions, CRM/ERP systems, and business automation tools for your organization.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Technologies: Python, Django, .NET, Java, Cloud Integration</p>
        </div>

        <div class="service-box scroll-reveal">
            <div class="service-icon">SEO</div>
            <h3>Digital Marketing</h3>
            <p>Strategic online marketing with Instagram Ads, Facebook Ads, SEO, and creative poster designs for maximum engagement.</p>
            <p style="margin-top: 10px; font-size: 14px; color: #888; font-weight: 600;">Services: Social Media Marketing, Google Ads, SEO, Content Marketing</p>
        </div>
    </div>
</section>

<!-- WHY -->
<section class="why scroll-reveal">
    <div class="why-container">
        <h2 class="section-title">Why Choose IT Malar?</h2>
        <p style="font-size: 18px; margin-bottom: 40px; color: #555; background: transparent; border: none; box-shadow: none; padding: 0;">We combine technical expertise, clear communication, and structured project delivery to support business growth.</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; max-width: 1000px; margin: 30px auto;">
            <p>Fast Delivery and Quick Turnaround Time</p>
            <p>Affordable and Transparent Pricing</p>
            <p>Premium Quality and Attention to Detail</p>
            <p>Customer Support and Maintenance</p>
            <p>Custom Solutions Tailored to Your Needs</p>
            <p>Secure and Scalable Architecture</p>
            <p>Global Delivery with Local Understanding</p>
            <p>Data-Driven Approach and Analytics</p>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="projects scroll-reveal">
    <h2 class="section-title projects-title">Our Projects</h2>

    <div class="projects-grid">

        <a href="https://malargroups.com/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="mahinzo.jpg" alt="Mahinzo Project">
                <div class="project-overlay">
                    <div class="overlay-text">Visit Project</div>
                </div>
            </div>
            <div class="project-info">
                <h3>E-Commerce Website Development</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    The client managed orders manually through WhatsApp, causing delays and poor organization.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We developed an e-commerce website to simplify product browsing, online ordering, and overall business management.
                </p>
            </div>
        </a>

        <a href="https://malargroups.in/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="attendance.jpg" alt="Daily Wastage Collection System">
                <div class="project-overlay">
                    <div class="overlay-text">View Details</div>
                </div>
            </div>
            <div class="project-info">
                <h3>Daily Waste Collection System</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Manual tracking of waste collection led to missed pickups and inefficient route planning.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We built a digital system to automate scheduling, track collections in real-time, and optimize routes for efficiency.
                </p>
            </div>
        </a>

        <a href="https://www.itmalar.com/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="it.jpg" alt="IT Services">
                <div class="project-overlay">
                    <div class="overlay-text">Explore</div>
                </div>
            </div>
            <div class="project-info">
                <h3>IT Company Website</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Lack of professional online presence limited client reach and credibility.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We created a modern, responsive website showcasing services, portfolio, and client testimonials to attract more business.
                </p>
            </div>
        </a>

        <a href="https://www.mahinfacility.com/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="man.jpg" alt="Facility Management">
                <div class="project-overlay">
                    <div class="overlay-text">Learn More</div>
                </div>
            </div>
            <div class="project-info">
                <h3>Facility Management & Manpower Services</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Manual coordination of facility services and manpower led to delays and communication gaps.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We developed a comprehensive platform for service booking, staff management, and real-time communication.
                </p>
            </div>
        </a>
         <a href="https://saravanastoresbilling.in/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="saravana.png" alt="Saravana Stores Billing System">
                <div class="project-overlay">
                    <div class="overlay-text">Learn More</div>
                </div>
            </div>
            <div class="project-info">
                <h3>Saravana Stores Billing System</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Traditional billing process was slow, prone to errors, and lacked inventory integration.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We implemented a fast, accurate digital billing system with inventory management and sales analytics.
                </p>
            </div>
        </a>
         <a href="https://malarcrm.com/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="crm.jpg" alt="Malar CRM">
                <div class="project-overlay">
                    <div class="overlay-text">Learn More</div>
                </div>
            </div>
            <div class="project-info">
                <h3>Malar CRM</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Scattered customer data and manual follow-ups resulted in lost opportunities and poor customer relationships.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We created a custom CRM system to centralize customer data, automate follow-ups, and track sales pipelines effectively.
                </p>
            </div>
        </a>

        <a href="https://tharimalar.com/" target="_blank" class="project-card scroll-reveal">
            <div class="project-image-wrapper">
                <img src="image copy 8.png" alt="Thari Malar">
                <div class="project-overlay">
                    <div class="overlay-text">View Details</div>
                </div>
            </div>
            <div class="project-info">
                <h3>Thari Malar</h3>
                <p style="margin-top: 10px; font-size: 14px; color: #666; text-align: left; line-height: 1.6;">
                    <strong style="color: #ff9102;">Problem:</strong><br>
                    Manual tracking of waste collection led to missed pickups and inefficient route planning.<br><br>
                    <strong style="color: #3905f3;">Solution:</strong><br>
                    We built a digital system to automate scheduling, track collections in real-time, and optimize routes for efficiency.
                </p>
            </div>
        </a>

    </div>
</section>

<!-- CASE STUDIES SECTION -->
<section class="about scroll-reveal">
    <div class="about-container">
        <h2 class="section-title">Case Studies</h2>
        <p style="font-size: 18px; margin-bottom: 50px; color: #555;">Discover how we've helped businesses transform their operations and achieve remarkable results through innovative digital solutions.</p>
        
        <!-- Case Study 1 -->
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 40px; border-left: 6px solid var(--primary);">
            <h3 style="color: var(--primary); font-size: 26px; margin-bottom: 20px;">E-Commerce Transformation for Retail Brand</h3>
            <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #000;">Client:</strong> Mahinzo Stores (India-based Retail Business)</p>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">The Problem</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">The client was managing all orders manually through WhatsApp, leading to frequent miscommunication, delayed responses, order tracking issues, and poor inventory management. This resulted in lost sales opportunities and customer dissatisfaction.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Our Approach</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We conducted a thorough analysis of their business workflow and customer behavior. Our team designed a comprehensive e-commerce platform that simplified product browsing, enabled seamless online ordering, integrated payment gateways, and automated inventory management.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">Execution</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We developed a responsive e-commerce website using React.js for frontend, Node.js for backend, and integrated Razorpay payment gateway. We implemented real-time inventory tracking, automated email notifications, and admin dashboard for order management. The entire project was completed in 6 weeks with comprehensive testing and client training.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Results</h4>
                <ul style="color: #555; line-height: 2; font-size: 16px; margin-left: 20px;">
                    <li>150% increase in online sales within 3 months</li>
                    <li>70% reduction in order processing time</li>
                    <li>95% customer satisfaction rate</li>
                    <li>Enhanced brand credibility and professional online presence</li>
                </ul>
            </div>
        </div>
        
        <!-- Case Study 2 -->
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 40px; border-left: 6px solid var(--secondary);">
            <h3 style="color: var(--secondary); font-size: 26px; margin-bottom: 20px;">Digital Waste Management System</h3>
            <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #000;">Client:</strong> Municipal Corporation & Waste Management Service Provider</p>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">The Problem</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Manual tracking of daily waste collection resulted in missed pickups, inefficient route planning, lack of accountability, and customer complaints. There was no centralized system to monitor field workers or track collection schedules.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Our Approach</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We proposed a comprehensive digital solution with GPS tracking, automated scheduling, real-time monitoring, and mobile application for field workers. The system was designed to optimize routes and provide complete transparency.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">Execution</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Developed a web-based admin panel using Laravel and MySQL, along with a mobile app using React Native for collection staff. Implemented GPS integration, automated route optimization algorithms, and real-time notifications. Included reporting dashboard with analytics and customer complaint management system.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Results</h4>
                <ul style="color: #555; line-height: 2; font-size: 16px; margin-left: 20px;">
                    <li>85% reduction in missed pickups</li>
                    <li>40% improvement in operational efficiency</li>
                    <li>Complete transparency with real-time tracking</li>
                    <li>60% decrease in customer complaints</li>
                </ul>
            </div>
        </div>
        
        <!-- Case Study 3 -->
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); border-left: 6px solid var(--primary);">
            <h3 style="color: var(--primary); font-size: 26px; margin-bottom: 20px;">Custom CRM for Growing Business</h3>
            <p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 15px;"><strong style="color: #000;">Client:</strong> Multi-service Business Group</p>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">The Problem</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Customer data was scattered across multiple Excel sheets and WhatsApp chats. Manual follow-ups were inefficient, leading to lost sales opportunities and poor customer relationship management. No centralized system for tracking leads and sales pipeline.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Our Approach</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We designed a custom CRM tailored to their specific business processes, including lead management, automated follow-up reminders, sales pipeline tracking, and comprehensive reporting.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #ff9102; font-size: 20px; margin-bottom: 10px;">Execution</h4>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Built using Python Django framework with PostgreSQL database. Implemented role-based access control, automated email and SMS reminders, sales analytics dashboard, and integrated WhatsApp Business API for seamless communication. Provided comprehensive staff training and documentation.</p>
            </div>
            
            <div style="margin-top: 25px;">
                <h4 style="color: #3905f3; font-size: 20px; margin-bottom: 10px;">Results</h4>
                <ul style="color: #555; line-height: 2; font-size: 16px; margin-left: 20px;">
                    <li>200% increase in lead conversion rate</li>
                    <li>Centralized customer database with complete history</li>
                    <li>90% reduction in missed follow-ups</li>
                    <li>Improved team collaboration and productivity</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CUSTOMER REVIEWS SECTION -->
<section class="reviews-section scroll-reveal">
    <div class="reviews-container">
        <h2 class="section-title reviews-title"> What Our Clients Say</h2>
        
        <div class="reviews-scroll-wrapper">
            <div class="reviews-track">
                <!-- Review 1 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"IT Malar transformed our business with their excellent e-commerce website. Sales increased by 150% in just 3 months! Their team is professional, responsive, and truly understands client needs. Highly recommended for anyone looking to grow their online presence."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">R</div>
                        <div class="author-info">
                            <h4>Rajesh Kumar</h4>
                            <p>CEO, Mahinzo Stores - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"They delivered beyond expectations. The mobile app they developed is fast, secure, and user-friendly. Communication was excellent throughout the project, and they were always available to address our concerns. Great value for money!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">J</div>
                        <div class="author-info">
                            <h4>John Peter</h4>
                            <p>Business Owner - Kerala</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 3 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Outstanding service! They delivered our facility management website on time and within budget. The design is modern, responsive, and exactly what we needed. Their attention to detail and professionalism is commendable."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">P</div>
                        <div class="author-info">
                            <h4>Priya Sharma</h4>
                            <p>Manager, Mahin Facility Services - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 4 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Working with IT Malar was a pleasure. They took time to understand our requirements and delivered a custom solution perfectly tailored to our business. The team is skilled, reliable, and always goes the extra mile. Excellent work!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sarah Williams</h4>
                            <p>Marketing Director - Chennai</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 5 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"The custom CRM system they built has revolutionized how we manage our customers. Everything is organized, automated, and efficient. The system is intuitive and our team adopted it quickly. Best investment we've made for our business!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Arun Vijay</h4>
                            <p>Director, Malar Groups - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 6 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Highly professional team with excellent technical skills. They developed our e-commerce platform with all the features we needed. The support after launch has been fantastic. I would definitely work with them again on future projects."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Vijaya Kumar</h4>
                            <p>E-commerce Manager - Tamil Nadu</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 7 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">4.5 / 5</div>
                        <p class="review-text">"Their digital marketing services helped us reach a wider audience. Instagram and Facebook ad campaigns were incredibly effective. Our brand visibility has improved significantly, and we're seeing great ROI. Thank you IT Malar!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Meena Lakshmi</h4>
                            <p>Marketing Head - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 8 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">3.5/ 5</div>
                        <p class="review-text">"Professional, skilled, and dedicated team! They developed our billing system which is fast, accurate, and easy to use. The implementation was smooth, and training was comprehensive. Customer support is excellent. Highly recommend!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sundar Rajan</h4>
                            <p>Owner, Saravana Stores - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 9 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Working with IT Malar was a great experience. They listened to our requirements and delivered beyond expectations. The waste collection system they built is user-friendly, efficient, and has significantly improved our operations. Excellent service!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">K</div>
                        <div class="author-info">
                            <h4>Karthik Prasad</h4>
                            <p>Operations Manager - India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Review 10 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Impressive work! They created a beautiful, responsive website for our business. The design is modern, navigation is intuitive, and the site loads fast. They understood our vision and brought it to life perfectly. Five stars!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">D</div>
                        <div class="author-info">
                            <h4>Pavithra</h4>
                            <p>Entrepreneur - Tamil Nadu</p>
                        </div>
                    </div>
                </div>
                
                <!-- Duplicate reviews for seamless loop -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"IT Malar transformed our business with their excellent e-commerce website. Sales increased by 150% in just 3 months! Their team is professional, responsive, and truly understands client needs. Highly recommended for anyone looking to grow their online presence."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">R</div>
                        <div class="author-info">
                            <h4>Rajesh Kumar</h4>
                            <p>CEO, Mahinzo Stores - India</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">4.6/ 5</div>
                        <p class="review-text">"They delivered beyond expectations. The mobile app they developed is fast, secure, and user-friendly. Communication was excellent throughout the project, and they were always available to address our concerns. Great value for money!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">J</div>
                        <div class="author-info">
                            <h4>Jeyanthan K</h4>
                            <p>Business Owner - Kerala</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Outstanding service! They delivered our facility management website on time and within budget. The design is modern, responsive, and exactly what we needed. Their attention to detail and professionalism is commendable."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">P</div>
                        <div class="author-info">
                            <h4>Priya Sharma</h4>
                            <p>Manager, Mahin Facility Services - India</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">4 / 5</div>
                        <p class="review-text">"Working with IT Malar was a pleasure. They took time to understand our requirements and delivered a custom solution perfectly tailored to our business. The team is skilled, reliable, and always goes the extra mile. Excellent work!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sara</h4>
                            <p>Marketing Director - Chennai</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">3.5 / 5</div>
                        <p class="review-text">"The custom CRM system they built has revolutionized how we manage our customers. Everything is organized, automated, and efficient. The system is intuitive and our team adopted it quickly. Best investment we've made for our business!"</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Arun Vijay</h4>
                            <p>Director, Malar Groups - India</p>
                        </div>
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-rating">5.0 / 5</div>
                        <p class="review-text">"Highly professional team with excellent technical skills. They developed our e-commerce platform with all the features we needed. The support after launch has been fantastic. I would definitely work with them again on future projects."</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">M</div>
                        <div class="author-info">
                            <h4>Manish Kumar</h4>
                            <p>E-commerce Manager - Tamil Nadu</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!--  TECHNOLOGIES --> 
<section id="tech" class="about scroll-reveal">
    <div class="about-container"> 
        <h2 class="section-title">Our Technology Stack</h2> 
        <p style="font-size: 18px; margin-bottom: 40px; color: #555;">We use cutting-edge technologies and industry-standard tools to deliver robust, scalable, and high-performance solutions.</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px; max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 20px;">Frontend Development</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">HTML5, CSS3, JavaScript, React.js, Next.js, Vue.js, Angular, Bootstrap, Tailwind CSS</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 20px;">Backend Development</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">Node.js, Express.js, Python, Django, PHP, Laravel, .NET, Java, Spring Boot</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 20px;">Mobile Development</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">React Native, Flutter, Kotlin, Swift, Android Studio, iOS Development</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 20px;">Databases</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">MySQL, PostgreSQL, MongoDB, Firebase, Redis, Microsoft SQL Server</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 15px; font-size: 20px;">Cloud and Hosting</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">AWS, Google Cloud, Microsoft Azure, Hostinger, DigitalOcean, Vercel</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 15px; font-size: 20px;">Tools and Platforms</h3>
                <p style="color: #666; font-size: 16px; line-height: 1.8;">Git, GitHub, Docker, Jenkins, Jira, Figma, VS Code, Postman</p>
            </div>
        </div>
    </div> 
</section>
  <!--  ACHIEVEMENTS --> 
<!-- ACHIEVEMENTS SECTION -->
<section class="achievements-section scroll-reveal">
    <div class="achievements-container">
        <h2 class="section-title">Our Achievements</h2>
        <div class="achievements-grid">
            
            <div class="achievement-card scroll-reveal">
                <div class="achievement-icon">Delivery</div>
                <div class="achievement-number">10+</div>
                <div class="achievement-label">Projects Successfully Completed</div>
                <p class="achievement-note">Delivered across websites, CRM systems, e-commerce, and business software.</p>
            </div>
            
            <div class="achievement-card scroll-reveal">
                <div class="achievement-icon">Clients</div>
                <div class="achievement-number">5+</div>
                <div class="achievement-label">Satisfied Clients</div>
                <p class="achievement-note">Trusted by businesses for practical solutions and responsive support.</p>
            </div>
            
            <div class="achievement-card scroll-reveal">
                <div class="achievement-icon">Experience</div>
                <div class="achievement-number">2+</div>
                <div class="achievement-label">Years of Industry Experience</div>
                <p class="achievement-note">Focused experience in digital product development and IT services.</p>
            </div>
            
            <div class="achievement-card scroll-reveal">
                <div class="achievement-icon">Quality</div>
                <div class="achievement-number">98%</div>
                <div class="achievement-label">Client Satisfaction Rate</div>
                <p class="achievement-note">Built through clear communication, reliable delivery, and ongoing care.</p>
            </div>
            
        </div>
    </div>
</section>
        <!--  TEAM --> 
          <section class="about scroll-reveal">
             <div class="about-container"> 
                <h2 class="section-title"> Our Team</h2>
                 <p>We are a team of passionate developers, creative designers, and strategic marketers committed to delivering exceptional digital experiences and measurable results for our clients. By combining innovation, technical expertise, and market insight, we create solutions that help businesses grow stronger in the digital world.</p> </div> </section>

                 <section class="team-section">

    <div class="team-container">
        <div class="team-card">
            <img src="image.png" alt="Team Member">
            <h3>Selva Murugan K</h3>
            <p>Founder</p>
            <p>Malar Groups of Companies</p>
        </div>
        <div class="team-card">
            <img src="image copy 7.png" alt="Team Member">
            <h3>Manoj Kumar S</h3>
            <p>Co-Founder</p>
        </div>

        <div class="team-card">
            <img src="image copy.png" alt="Team Member">
            <h3> Rajapriya S</h3>
            <p>Managing Director</p>
        </div>

     
</section>

                 <section class="team-section">

    <div class="team-container">
         <div class="team-card">
            <img src="image copy 2.png" alt="Team Member">
            <h3>Jeevitha R</h3>
            <p>Head of Business Development </p>
        </div>

        <div class="team-card">
            <img src="image copy 4.png" alt="Team Member">
            <h3>Jaya Sathya R</h3>
            <p>Head of Web Development</p>
        </div>

        <div class="team-card">
            <img src="image copy 6.png" alt="Team Member">
            <h3>Uma Maheswari S</h3>
            <p>Head of Mobile App Development</p>
        </div>

        <div class="team-card">
            <img src="image copy 3.png" alt="Team Member">
            <h3>Jeyabalaji L</h3>
            <p>Head of Digital Marketing</p>
        </div>
       
         <div class="team-card">
            <img src="image copy 5.png" alt="Team Member">
            <h3>Sathivel S</h3>
            <p>Head of Full Stack Development</p>
        </div>
        
    </div>
</section>

<!-- FAQ SECTION -->
<section class="about scroll-reveal">
    <div class="about-container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div style="text-align: left; max-width: 800px; margin: 40px auto;">
            <div style="margin-bottom: 30px; padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 10px; font-size: 20px;">What is your pricing model?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We offer competitive and transparent pricing tailored to your project requirements. Our pricing varies based on project complexity, timeline, and features. We provide detailed quotes after understanding your needs. Contact us for a free consultation and custom quote.</p>
            </div>
            
            <div style="margin-bottom: 30px; padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 10px; font-size: 20px;">How long does it take to complete a project?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Delivery time depends on project scope and complexity. A simple website takes 1-2 weeks, while complex applications may take 4-8 weeks. We provide accurate timelines during the consultation phase and ensure timely delivery without compromising quality.</p>
            </div>
            
            <div style="margin-bottom: 30px; padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 10px; font-size: 20px;">Do you provide post-launch support?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Yes! We offer 24/7 customer support and maintenance services. Our support includes bug fixes, updates, technical assistance, and ongoing improvements. We provide different support packages to suit your business needs and ensure your digital solution runs smoothly.</p>
            </div>
            
            <div style="margin-bottom: 30px; padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 10px; font-size: 20px;">Do you work with international clients?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">Absolutely! We work with clients worldwide and have experience delivering projects across different time zones. We use modern communication tools and project management platforms to ensure seamless collaboration regardless of your location.</p>
            </div>
            
            <div style="margin-bottom: 30px; padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                <h3 style="color: var(--primary); margin-bottom: 10px; font-size: 20px;">What payment methods do you accept?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We accept multiple payment methods including bank transfers, PayPal, credit cards, and other international payment gateways. We offer flexible payment plans with milestone-based payments to ensure transparency and trust throughout the project.</p>
            </div>
            
            <div style="padding: 25px; background: white; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-left: 4px solid var(--secondary);">
                <h3 style="color: var(--secondary); margin-bottom: 10px; font-size: 20px;">How do you ensure data security and confidentiality?</h3>
                <p style="color: #555; line-height: 1.8; font-size: 16px;">We take data security seriously. We implement industry-standard security practices, use secure development methodologies, and can sign NDAs to protect your intellectual property. All client data is handled with strict confidentiality and stored securely.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact scroll-reveal">
    <div class="contact-container">
        <h2 class="section-title">Contact Us</h2>
        <p class="contact-intro">Ready to discuss your next digital product, website, app, or business solution? Connect with IT Malar and our team will get back to you promptly.</p>

        <div class="contact-details">
            <div class="contact-item">
                <span class="contact-icon">P</span>
                <div>
                    <h3>Phone</h3>
                    <a href="tel:+919629583169">+91 96295 83169</a>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">@</span>
                <div>
                    <h3>Email</h3>
                    <a href="mailto:manoj@itmalar.com">manoj@itmalar.com</a><br>
                    <a href="mailto:bde@malargroups.com">bde@malargroups.com</a>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">in</span>
                <div>
                    <h3>LinkedIn</h3>
                    <a href="https://www.linkedin.com/company/it-malar-pvt-ltd/posts/" target="_blank" rel="noopener">linkedin.com/company/it-malar-pvt-ltd</a>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">L</span>
                <div>
                    <h3>Location</h3>
                    <p>Aruppukottai, Virudhunagar (dist), Tamil Nadu, India</p>
                </div>
            </div>
        </div>

        <div class="contact-buttons">
            <a href="https://wa.me/919629583169" class="btn" target="_blank" rel="noopener">WhatsApp Us</a>
            <a href="mailto:manoj@itmalar.com,bde@malargroups.com" class="btn btn-secondary">Send Email</a>
        </div>
        <p class="contact-closing">Let's work together and grow your business.</p>
    </div>
</section>

<!-- WHATSAPP BUTTON -->
<a href="https://wa.me/919629583169" class="whatsapp" target="_blank" rel="noopener" title="Chat with us on WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
</a>

<script>
    const navElement = document.querySelector('nav');
    const menuToggle = document.querySelector('.menu-toggle');

    menuToggle.addEventListener('click', () => {
        const isOpen = navElement.classList.toggle('menu-open');
        menuToggle.setAttribute('aria-expanded', isOpen);
        menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
    });

    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                navElement.classList.remove('menu-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.setAttribute('aria-label', 'Open navigation menu');
            }
        });
    });

    // Scroll reveal animation
    const revealElements = document.querySelectorAll('.scroll-reveal');

    const revealOnScroll = () => {
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const windowHeight = window.innerHeight;

            if (elementTop < windowHeight * 0.9 && elementBottom > 0) {
                element.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check

    // Add animation class to nav links on scroll
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.style.boxShadow = '0 10px 40px rgba(255, 145, 2, 0.3)';
        } else {
            nav.style.boxShadow = '0 10px 40px rgba(255, 145, 2, 0.2)';
        }
    });

    // Mouse follow effect for hero section
    const hero = document.querySelector('.hero');
    hero.addEventListener('mousemove', (e) => {
        const x = (e.clientX / window.innerWidth) * 20;
        const y = (e.clientY / window.innerHeight) * 20;
        hero.style.backgroundPosition = `calc(center + ${x}px) calc(center + ${y}px)`;
    });

    // Ripple effect on button click
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
        });
    });

    console.log('IT Malar portfolio loaded successfully.');
</script>

</body>
</html>
