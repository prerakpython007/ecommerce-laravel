<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }

        .breadcrumb-bg {
            background-image: url('{{ asset("assets/imgs/bg/breadcrumb-bg-furniture.jpg") }}');
            background-size: cover;
            background-position: center;
        }

        /* Info Cards */
        .info-card {
            border: 1px solid #e5e7eb;
            padding: 2rem 1.5rem;
            text-align: center;
            background: #fff;
            flex: 1;
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #b4864a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }
        .icon-circle svg {
            width: 24px;
            height: 24px;
            color: white;
            fill: white;
        }
        .info-card h4 {
            font-size: 15px;
            font-weight: 600;
            color: #1a1a1a;
            margin-top: 0.5rem;
        }
        .info-card p {
            font-size: 13px;
            color: #777;
            margin-top: 4px;
        }

        /* Form */
        .contact-form-wrap {
            background-color: #b4864a;
            padding: 2.5rem;
        }
        .contact-form-wrap input,
        .contact-form-wrap select,
        .contact-form-wrap textarea {
            width: 100%;
            background: #fff;
            border: 1px solid #d4b896;
            padding: 12px 14px;
            font-size: 14px;
            color: #333;
            outline: none;
            font-family: 'Inter', sans-serif;
        }
        .contact-form-wrap input::placeholder,
        .contact-form-wrap textarea::placeholder {
            color: #999;
        }
        .contact-form-wrap select {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='%23999'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            cursor: pointer;
        }
        .contact-form-wrap textarea {
            resize: none;
            height: 120px;
        }
        .send-btn {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.05em;
            cursor: pointer;
            padding: 0;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-transform: uppercase;
        }
        .send-btn:hover { opacity: 0.8; }

        /* Map */
        .map-wrap iframe {
            width: 100%;
            height: 100%;
            min-height: 340px;
            border: none;
            display: block;
            filter: grayscale(20%);
        }
    </style>
</head>
<body class="bg-white">

    @include('partials.header')

    <!-- Breadcrumb / Banner -->
    <div class="breadcrumb-bg py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact</h1>
            <div class="flex justify-center items-center space-x-2 text-white text-sm">
                <a href="{{ route('home') }}" class="hover:text-amber-200 transition">Home</a>
                <span>•</span>
                <span class="text-amber-200">Contact</span>
            </div>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="flex flex-col md:flex-row gap-6">

            <!-- Our Location -->
            <div class="info-card">
                <div class="icon-circle">
                    <!-- Location Pin -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                </div>
                <h4>Our Location</h4>
                <p>711-2880 Nulla St. Mankato</p>
            </div>

            <!-- Our Email -->
            <div class="info-card">
                <div class="icon-circle">
                    <!-- Envelope -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <h4>Our Email Address</h4>
                <p>support@addina.com</p>
            </div>

            <!-- Phone Number -->
            <div class="info-card">
                <div class="icon-circle">
                    <!-- Phone -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1C9.61 21 3 14.39 3 6.5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.58a1 1 0 01-.25 1.01l-2.2 2.2z"/>
                    </svg>
                </div>
                <h4>Contact Phone Number</h4>
                <p>+964 742 44 763</p>
            </div>

        </div>
    </div>

    <!-- Map + Form Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">

            <!-- Google Map -->
            <div class="map-wrap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.558576697!2d90.3563!3d23.7461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ0JzQ2LjAiTiA5MMKwMjEnMjIuNyJF!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrap">
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <input type="text" name="full_name" placeholder="Full Name*" required>
                        <input type="email" name="email" placeholder="Email Address*" required>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <input type="tel" name="phone" placeholder="Phone Number">
                        <input type="date" name="appointment_date">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <select name="clinic">
                            <option value="" disabled selected>Pediatric Clinic</option>
                            <option value="pediatric">Pediatric Clinic</option>
                            <option value="general">General Clinic</option>
                            <option value="dental">Dental Clinic</option>
                        </select>
                        <select name="doctor">
                            <option value="" disabled selected>Choose Doctor</option>
                            <option value="dr1">Dr. Smith</option>
                            <option value="dr2">Dr. Johnson</option>
                            <option value="dr3">Dr. Williams</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <textarea name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="send-btn">
                        SEND NOW &rsaquo;
                    </button>
                </form>
            </div>

        </div>
    </div>

    @include('partials.footer')

</body>
</html>