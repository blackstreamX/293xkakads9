<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BlackStream Project: Dominate your life, cut conflicts at the root.">
    <title>BlackStream Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables for Consistency */
        :root {
            --primary-bg: #1a1a1a;
            --secondary-bg: #333;
            --accent-color: #8b0000;
            --text-color: #fff;
            --spacing-unit: 1rem;
            --transition-speed: 0.3s;
        }

        /* Base Reset and Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--primary-bg);
            color: var(--text-color);
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Hero Section: Bold Introduction */
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), var(--primary-bg));
            padding: var(--spacing-unit);
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 4rem);
            font-weight: 700;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            animation: fadeIn 2s ease-out;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 2.5vw, 1.5rem);
            margin-top: var(--spacing-unit);
            opacity: 0.9;
        }

        /* General Section Styling */
        .section {
            padding: calc(var(--spacing-unit) * 2);
            margin: calc(var(--spacing-unit) * 2) 0;
            text-align: center;
        }

        .section h2 {
            font-size: 2rem;
            margin-bottom: var(--spacing-unit);
            color: var(--accent-color);
        }

        /* Guide Section: Practical Application */
        .guide {
            background-color: var(--secondary-bg);
            padding: var(--spacing-unit);
            border-radius: 8px;
            margin-top: var(--spacing-unit);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Contact Form Section */
        .contact-form {
            display: grid;
            gap: var(--spacing-unit);
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-form label {
            font-weight: 700;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: calc(var(--spacing-unit) / 2);
            border: 1px solid var(--accent-color);
            border-radius: 4px;
            background-color: var(--secondary-bg);
            color: var(--text-color);
            font-size: 1rem;
        }

        .contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }

        .btn {
            background-color: var(--accent-color);
            color: var(--text-color);
            padding: calc(var(--spacing-unit) / 2) var(--spacing-unit);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color var(--transition-speed) ease, transform var(--transition-speed) ease;
        }

        .btn:hover,
        .btn:focus {
            background-color: #a90000;
            transform: translateY(-2px);
        }

        /* Founder Section */
        .founder {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: var(--spacing-unit);
        }

        .founder img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: var(--spacing-unit);
        }

        .founder p {
            font-size: 1.2rem;
            font-weight: 700;
        }

        /* Footer */
        .footer {
            background-color: var(--secondary-bg);
            padding: var(--spacing-unit);
            text-align: center;
            font-size: 0.9rem;
            border-top: 1px solid var(--accent-color);
        }

        /* Fade-In Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section {
                padding: var(--spacing-unit);
            }
        }

        /* Accessibility: Respect Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h1 class="hero-title">BlackStream Project</h1>
            <p class="hero-subtitle">Cut conflicts. Dominate your destiny. Take what’s yours.</p>
        </section>

        <!-- Philosophy Section -->
        <section class="section">
            <h2>Our Philosophy</h2>
            <p>Life is a battlefield. There’s no room for doubt or weakness. At BlackStream, we teach you to be the
                predator, not the prey. Aggression is your strategy, control is your power, and success is your right.
            </p>
        </section>

        <!-- Guide Section -->
        <section class="section">
            <h2>Guides to Dominate</h2>
            <article class="guide">
                <h3>Conflict: Cut It at the Root</h3>
                <p>Don’t negotiate with those who hold you back. Identify the problem’s source and eliminate it without
                    mercy. Example: a toxic colleague—cut their influence and move forward.</p>
            </article>
        </section>

        <!-- Founder Section -->
        <section class="section founder">
            <img src="abyssic.png" alt="Founder 8c7x">
            <p>Founded by 8c7x</p>
        </section>

        <!-- Contact Form Section -->
        <section class="section">
            <h2>Join the Movement</h2>
            <form action="" method="POST" class="contact-form">
                <label for="nombre">Name:</label>
                <input type="text" id="nombre" name="nombre" required aria-required="true">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required aria-required="true">

                <label for="mensaje">Message:</label>
                <textarea id="mensaje" name="mensaje" required aria-required="true"></textarea>

                <button type="submit" class="btn">Send</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>© BlackStream Project. All rights reserved.</p>
    </footer>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Ajusta la ruta según donde tengas PHPMailer instalado
    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail = new PHPMailer(true);
            try {
                // Configuración del servidor SMTP de Hostinger
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'your-email@yourdomain.com'; // Reemplaza con tu email de Hostinger
                $mail->Password = 'your-email-password'; // Reemplaza con tu contraseña
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Remitente y destinatario
                $mail->setFrom('your-email@yourdomain.com', 'BlackStream Project');
                $mail->addAddress('recipient-email@domain.com'); // Reemplaza con el email donde recibirás los mensajes

                // Contenido del email
                $mail->isHTML(true);
                $mail->Subject = 'New Contact Form Submission';
                $mail->Body    = "<p><strong>Name:</strong> $nombre</p><p><strong>Email:</strong> $email</p><p><strong>Message:</strong> $mensaje</p>";

                $mail->send();
                echo "<p>Mensaje enviado con éxito. ¡Domina el caos!</p>";
            } catch (Exception $e) {
                echo "<p>Error al enviar el mensaje. El control se escapó esta vez: " . $mail->ErrorInfo . "</p>";
            }
        } else {
            echo "<p>Email inválido. Revisa tus herramientas.</p>";
        }
    }
    ?>

    <script>
        // Confirmación mínima de carga
        document.addEventListener('DOMContentLoaded', () => {
            console.log('BlackStream Project loaded.');
        });
    </script>
</body>

</html>