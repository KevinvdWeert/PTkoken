<?php
// Configuratiegegevens
$chef_naam = "Pablo Torenbeek";
$telefoon = "0644115183";
$email = "pablo@ptkoken.nl";
$btw_nummer = "NL004790057B46";
$kvk_nummer = "90124219";
$adres = "pablo.ptkoken.nl";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTkoken - Freelance Chef Pablo Torenbeek | Culinaire Expert</title>
    <meta name="description" content="Professionele freelance chef-kok met 20 jaar ervaring. Beschikbaar voor freelance opdrachten, privé diners en catering in Nederland.">
    <meta name="keywords" content="freelance chef, kok, privé diner, catering, Pablo Torenbeek, PTkoken, culinair, chef-kok, Amsterdam">
    <meta name="author" content="Pablo Torenbeek">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="PTkoken - Freelance Chef Pablo Torenbeek">
    <meta property="og:description" content="Professionele freelance chef-kok met 20 jaar ervaring. Beschikbaar voor freelance opdrachten, privé diners en catering.">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="PTkoken - Freelance Chef Pablo Torenbeek">
    <meta property="twitter:description" content="Professionele freelance chef-kok met 20 jaar ervaring. Beschikbaar voor freelance opdrachten, privé diners en catering.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Gebruik verbeterde CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigatie -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="assets/img/logo.png" alt="PTkoken logo" style="height:38px;width:auto;margin-right:12px;display:inline-block;">
                PTkoken
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#over-mij">Over Mij</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#freelance">Freelance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prive-diner">Privé Diner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Sectie -->
    <header id="home" class="hero-section hero-slideshow">
        <div class="hero-overlay"></div>
        <div class="container hero-center-content">
            <div class="hero-content hero-slideshow-content">
                <div class="hero-topline">
                    <span class="hero-topline-text">CULINAIR MEESTERSCHAP OP LOCATIE</span>
                </div>
                <h1 class="hero-title">Pablo Torenbeek</h1>
                <p class="hero-subtitle">Freelance Chef & Culinaire kwaliteit</p>
                <a href="#contact" class="btn btn-hero">Neem contact op</a>
            </div>
        </div>
    </header>

    <!-- Over Mij Sectie -->
    <section id="over-mij" class="section-padding">
        <div class="container">
            <h2 class="section-title">Over Mij</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-container">
                        <img src="assets/img/pfp.jpeg" alt="Pablo Torenbeek - Freelance Chef" class="img-fluid about-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>Mijn naam is Pablo Torenbeek</h3>
                        <p>Met ruim 20 jaar ervaring als chef in binnen- én buitenland zet ik mijn passie en vakmanschap in voor uiteenlopende culinaire opdrachten. Of het nu gaat om het versterken van een keukenteam, het draaien van een drukke service of het neerzetten van een volledig privé diner; ik zorg voor kwaliteit en professionaliteit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Freelance Sectie -->
    <section id="freelance" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Freelance inzet</h2>
            <p class="text-center mb-5">Beschikbaar voor zakelijke freelance klussen</p>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Zelfstandig werkend kok</h3>
                            <div class="price">€ 40,- <small>per uur (excl. btw)</small></div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Professionele ondersteuning</li>
                                <li><i class="fas fa-check text-success me-2"></i> Ervaren in diverse keukens</li>
                                <li><i class="fas fa-check text-success me-2"></i> Flexibele inzet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Sous-chef</h3>
                            <div class="price">€ 47,- <small>per uur (excl. btw)</small></div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Leidinggevende capaciteiten</li>
                                <li><i class="fas fa-check text-success me-2"></i> Teamcoördinatie</li>
                                <li><i class="fas fa-check text-success me-2"></i> Kwaliteitsbewaking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Chef-kok</h3>
                            <div class="price">€ 55,- <small>per uur (excl. btw)</small></div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i> Volledige keukenleiding</li>
                                <li><i class="fas fa-check text-success me-2"></i> Menubewaking</li>
                                <li><i class="fas fa-check text-success me-2"></i> Creatieve input</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <p class="note">Bovenstaande tarieven zijn excl. Reiskosten</p>
            </div>
        </div>
    </section>

    <!-- Privé Diner Sectie -->
    <section id="prive-diner" class="section-padding">
        <div class="container">
            <h2 class="section-title">Privé diner & catering</h2>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="prive-content">
                        <p>Naast freelance opdrachten bied ik ook privé diners en catering op maat. Wilt u een avond die volledig in het teken staat van culinair genieten, zonder zorgen?</p>
                        <p>Ik verzorg exclusieve privé diners bij u thuis of op locatie. Van een intiem diner voor twee tot een feestelijke tafel vol vrienden of familie; alles wordt tot in de puntjes geregeld.</p>
                        <p>U hoeft nergens aan te denken. Van het samenstellen van een passend menu tot de inkoop van de ingrediënten en de presentatie van de gerechten. Met mijn internationale ervaring breng ik hoge kwaliteit en verfijnde smaken bij u aan tafel.</p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card service-card h-100">
                                <img src="assets/img/prive-diner.jpeg" class="card-img-top" alt="Privé diner">
                                <div class="card-body">
                                    <h3 class="card-title">Privé Diner</h3>
                                    <p class="card-text">Exclusieve culinaire ervaring bij u thuis</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card service-card h-100">
                                <img src="assets/img/catering.jpeg" class="card-img-top" alt="Catering">
                                <div class="card-body">
                                    <h3 class="card-title">Catering</h3>
                                    <p class="card-text">Op maat gemaakte culinaire oplossingen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12">
                    <div class="catering-content">
                        <p>Ook voor catering op maat, van een walking dinner tot een uitgebreid buffet, bespreek ik graag uw wensen om een unieke culinaire beleving neer te zetten die perfect past bij uw wensen en de gelegenheid.</p>
                        <p class="highlight">U hoeft alleen maar te genieten, ik zorg voor de rest.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Sectie -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Contact</h2>
            <p class="text-center mb-5">Neem gerust contact op voor meer informatie of om de mogelijkheden te bespreken en uw ideale culinaire ervaring samen te stellen.</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card contact-card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Contactgegevens</h3>
                            <ul class="list-unstyled contact-info">
                                <li><i class="fas fa-user"></i> <?php echo $chef_naam; ?></li>
                                <li><i class="fas fa-phone"></i> <?php echo $telefoon; ?></li>
                                <li><i class="fas fa-envelope"></i> <?php echo $email; ?></li>
                                <li><i class="fas fa-file-invoice"></i> BTW-nummer: <?php echo $btw_nummer; ?></li>
                                <li><i class="fas fa-building"></i> KVK-nummer: <?php echo $kvk_nummer; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card contact-form-card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Stuur een bericht</h3>
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Naam</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mailadres</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefoonnummer</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Bericht</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Verstuur</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date('Y'); ?> PTkoken - <?php echo $chef_naam; ?>. Alle rechten voorbehouden.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#home" class="footer-link"><i class="fas fa-arrow-up"></i> Naar boven</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hero slideshow
        const heroImages = [
            'assets/img/hero1.jpeg',
            'assets/img/hero2.jpeg',
            'assets/img/hero3.jpeg',
            'assets/img/hero4.jpeg'
        ];
        let heroIndex = 0;
        const heroSection = document.querySelector('.hero-slideshow');

        function setHeroBg(idx) {
            heroSection.style.backgroundImage = `url('${heroImages[idx]}')`;
        }
        setHeroBg(heroIndex);

        setInterval(() => {
            heroSection.classList.add('fade');
            setTimeout(() => {
                heroIndex = (heroIndex + 1) % heroImages.length;
                setHeroBg(heroIndex);
                heroSection.classList.remove('fade');
            }, 1000); // match with CSS transition duration
        }, 5000);

        // Navbar scroll effect (vervang oude code)
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                if (window.scrollY > 10) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });

        // Navbar active link effect
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Bedankt voor uw bericht! Ik neem zo snel mogelijk contact met u op.');
            this.reset();
        });
    </script>
</body>
</html>