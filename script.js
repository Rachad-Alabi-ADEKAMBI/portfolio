// Mobile menu functionality
const mobileMenuBtn = document.getElementById("mobileMenuBtn")
const nav = document.querySelector(".nav")

mobileMenuBtn.addEventListener("click", () => {
  nav.classList.toggle("mobile-active")
  mobileMenuBtn.classList.toggle("active")

  // Prevent body scroll when menu is open
  if (nav.classList.contains("mobile-active")) {
    document.body.style.overflow = "hidden"
  } else {
    document.body.style.overflow = "auto"
  }
})

// Close mobile menu when clicking a link
document.querySelectorAll(".nav a").forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("mobile-active")
    mobileMenuBtn.classList.remove("active")
    document.body.style.overflow = "auto"
  })
})

// Close mobile menu when clicking outside
document.addEventListener("click", (e) => {
  if (!e.target.closest(".header")) {
    nav.classList.remove("mobile-active")
    mobileMenuBtn.classList.remove("active")
    document.body.style.overflow = "auto"
  }
})

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      // Close mobile menu if open
      nav.classList.remove("mobile-active")
      mobileMenuBtn.classList.remove("active")
      document.body.style.overflow = "auto"

      // Smooth scroll with offset for fixed header
      const headerHeight = document.querySelector(".header").offsetHeight
      const targetPosition = target.offsetTop - headerHeight
      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      })
    }
  })
})

// Language translations with all missing keys
const translations = {
  fr: {
    nav_home: "Accueil",
    nav_about: "À propos",
    nav_services: "Services",
    nav_projects: "Projets",
    nav_contact: "Contact",
    hero_title: "Rachad Alabi Adekambi",
    hero_subtitle: "Full-Stack Developer & Consultant",
    hero_description: "Aidez votre entreprise à créer des solutions web efficaces et évolutives",
    hero_cta: "Réserver une consultation gratuite",
    stat_years: "Années d'expérience",
    stat_projects: "Projets complétés",
    stat_satisfaction: "Satisfaction client",
    about_title: "À propos de moi",
    about_text1:
      "Bonjour, je m'appelle Rachad Alabi ADEKAMBI, développeur full-stack freelance avec 6 ans d'expérience. Je conçois et développe des applications web et mobiles en utilisant Laravel, Vue.js et Flutter. Avec plus de 80 projets réalisés sur ComeUp et Upwork, j'ai accompagné de nombreux clients dans la création d'applications sur mesure, intuitives et fiables.",
    about_text2:
      "Chaque projet est pour moi l'occasion de combiner expertise technique et créativité afin de répondre parfaitement aux besoins de mes clients. Si vous avez un projet à concrétiser, n'hésitez pas à me contacter pour en discuter et voir comment nous pouvons le réaliser ensemble.",
    services_title: "Mes Services",
    service1_title: "Développement Web & Mobile",
    service1_description: "Applications Web & Mobiles sur mesure avec Laravel, Vue.js et Flutter",
    service2_title: "WordPress & E-commerce",
    service2_description: "Création de sites WordPress et boutiques en ligne performantes",
    service3_title: "Intégration API",
    service3_description: "Intégration de services tiers et développement d'API REST",
    service4_title: "Optimisation & Maintenance",
    service4_description: "Amélioration des performances et maintenance de vos applications",
    performance_title: "Performance & Résultats",
    perf_positive_reviews: "Avis positifs",
    perf_acceptance_rate: "Taux d'acceptation",
    perf_completion_rate: "Taux de complétion",
    projects_title: "Mes Projets",
    project_btn: "Voir le Projet",
    project1_title: "Easy Market",
    project1_description: "Gestionnaire de Stock & Comptabilité interne des petites et moyennes entreprises",
    project2_title: "La Cave des Clubs",
    project2_description: "Site vitrine professionnel avec portfolio et formulaires de contact intégrés",
    project3_title: "Hello Baby !",
    project3_description: "Application de Suivi de grossesse et de cycle menstruel",
    project4_title: "Sager Market",
    project4_description: "Application de gestion de stock et de comptabilité interne personnalisé",
    project5_title: "AmPay",
    project5_description:
      "Plateforme internationale de mise en relation entre échangeurs et demandeurs de devises monétaires",
    project6_title: "SefarPay",
    project6_description: "Plugin personnalisé WordPress pour les paiements au Maghreb",
    clients_title: "Clients Satisfaits",
    testimonial1_text:
      "Rachad est très professionnel et à l'écoute. Il a livré notre site e-commerce à temps et au-delà de nos attentes.",
    testimonial1_name: "Marie Albert",
    testimonial1_role: "Directrice E-commerce",
    testimonial2_text:
      "Excellent travail sur la migration de notre site WordPress. Rachad a rendu le processus transparent et sans tracas.",
    testimonial2_name: "Jean Martin",
    testimonial2_role: "Propriétaire PME",
    testimonial3_text:
      "Solution API bien pensée et documentation impeccable. Notre équipe n'a pas eu de difficultés à l'intégrer.",
    testimonial3_name: "Sophie Bernard",
    testimonial3_role: "CTO Startup Tech",
    contact_title: "Travaillons Ensemble!",
    contact_subtitle: "Réservez votre consultation gratuite et discutons de votre prochain projet",
    form_name: "Nom",
    form_email: "Email",
    form_message: "Message",
    form_submit: "Envoyer",
    form_name_placeholder: "Votre nom complet",
    form_email_placeholder: "votre.email@exemple.com",
    form_message_placeholder: "Parlez moi un peu de votre projet",
    contact_info_title: "Informations de contact",
    contact_email: "Email",
    contact_phone: "Téléphone",
    contact_location: "Localisation",
    footer_rights: "Tous droits réservés",
  },
  en: {
    nav_home: "Home",
    nav_about: "About",
    nav_services: "Services",
    nav_projects: "Projects",
    nav_contact: "Contact",
    hero_title: "Rachad Alabi ADEKAMBI",
    hero_subtitle: "Full-Stack Developer & Consultant",
    hero_description: "Help your business create effective and scalable web solutions",
    hero_cta: "Book a free consultation",
    stat_years: "Years of experience",
    stat_projects: "Projects completed",
    stat_satisfaction: "Client satisfaction",
    about_title: "About Me",
    about_text1:
      "Hello, I'm Rachad Alabi ADEKAMBI, a freelance full-stack developer with 6 years of experience. I design and develop web and mobile applications using Laravel, Vue.js and Flutter. With over 80 projects completed on ComeUp and Upwork, I have helped many clients create custom, intuitive and reliable applications.",
    about_text2:
      "Each project is an opportunity for me to combine technical expertise and creativity to perfectly meet my clients' needs. If you have a project to realize, don't hesitate to contact me to discuss it and see how we can make it happen together.",
    services_title: "My Services",
    service1_title: "Web & Mobile Development",
    service1_description: "Custom Web & Mobile applications with Laravel, Vue.js and Flutter",
    service2_title: "WordPress & E-commerce",
    service2_description: "Creating high-performance WordPress sites and online stores",
    service3_title: "API Integration",
    service3_description: "Third-party service integration and REST API development",
    service4_title: "Optimization & Maintenance",
    service4_description: "Performance improvement and maintenance of your applications",
    performance_title: "Performance & Results",
    perf_positive_reviews: "Positive reviews",
    perf_acceptance_rate: "Acceptance rate",
    perf_completion_rate: "Completion rate",
    projects_title: "My Projects",
    project_btn: "View Project",
    project1_title: "Easy Market",
    project1_description: "Inventory Management & Internal Accounting for small and medium-sized businesses",
    project2_title: "La Cave des Clubs",
    project2_description: "Professional showcase website with portfolio and integrated contact forms",
    project3_title: "Hello Baby !",
    project3_description: "Pregnancy and menstrual cycle tracking application",
    project4_title: "Sager Market",
    project4_description: "Custom inventory management and internal accounting application",
    project5_title: "AmPay",
    project5_description: "International platform connecting currency exchangers and currency seekers",
    project6_title: "SefarPay",
    project6_description: "Custom WordPress plugin for payments in the Maghreb",
    clients_title: "Satisfied Clients",
    testimonial1_text:
      "Rachad is very professional and attentive. He delivered our e-commerce website on time and beyond our expectations.",
    testimonial1_name: "Marie Albert",
    testimonial1_role: "E-commerce Director",
    testimonial2_text:
      "Excellent work on migrating our WordPress site. Rachad made the process transparent and hassle-free.",
    testimonial2_name: "Jean Martin",
    testimonial2_role: "SME Owner",
    testimonial3_text:
      "Well thought out API solution and impeccable documentation. Our team had no difficulty integrating it.",
    testimonial3_name: "Sophie Bernard",
    testimonial3_role: "CTO Startup Tech",
    contact_title: "Let's Work Together!",
    contact_subtitle: "Book your free consultation and let's discuss your next project",
    form_name: "Name",
    form_email: "Email",
    form_message: "Message",
    form_submit: "Send",
    form_name_placeholder: "Your full name",
    form_email_placeholder: "your.email@example.com",
    form_message_placeholder: "Tell me a bit about your project",
    contact_info_title: "Contact Information",
    contact_email: "Email",
    contact_phone: "Phone",
    contact_location: "Location",
    footer_rights: "All rights reserved",
  },
  es: {
    nav_home: "Inicio",
    nav_about: "Acerca de",
    nav_services: "Servicios",
    nav_projects: "Proyectos",
    nav_contact: "Contacto",
    hero_title: "Rachad Alabi ADEKAMBI",
    hero_subtitle: "Desarrollador Full-Stack y Consultor",
    hero_description: "Ayude a su empresa a crear soluciones web efectivas y escalables",
    hero_cta: "Reserva una consulta gratuita",
    stat_years: "Años de experiencia",
    stat_projects: "Proyectos completados",
    stat_satisfaction: "Satisfacción del cliente",
    about_title: "Acerca de mí",
    about_text1:
      "Hola, soy Rachad Alabi ADEKAMBI, desarrollador full-stack freelance con 6 años de experiencia. Diseño y desarrollo aplicaciones web y móviles utilizando Laravel, Vue.js y Flutter. Con más de 80 proyectos realizados en ComeUp y Upwork, he ayudado a muchos clientes a crear aplicaciones personalizadas, intuitivas y confiables.",
    about_text2:
      "Cada proyecto es para mí una oportunidad de combinar experiencia técnica y creatividad para satisfacer perfectamente las necesidades de mis clientes. Si tienes un proyecto que realizar, no dudes en contactarme para discutirlo y ver cómo podemos hacerlo realidad juntos.",
    services_title: "Mis Servicios",
    service1_title: "Desarrollo Web y Móvil",
    service1_description: "Aplicaciones Web y Móviles personalizadas con Laravel, Vue.js y Flutter",
    service2_title: "WordPress y Comercio Electrónico",
    service2_description: "Creación de sitios WordPress y tiendas en línea de alto rendimiento",
    service3_title: "Integración API",
    service3_description: "Integración de servicios de terceros y desarrollo de API REST",
    service4_title: "Optimización y Mantenimiento",
    service4_description: "Mejora del rendimiento y mantenimiento de sus aplicaciones",
    performance_title: "Desempeño y Resultados",
    perf_positive_reviews: "Reseñas positivas",
    perf_acceptance_rate: "Tasa de aceptación",
    perf_completion_rate: "Tasa de finalización",
    projects_title: "Mis Proyectos",
    project_btn: "Ver Proyecto",
    project1_title: "Easy Market",
    project1_description: "Gestión de Inventario y Contabilidad Interna para pequeñas y medianas empresas",
    project2_title: "La Cave des Clubs",
    project2_description: "Sitio web profesional con portafolio y formularios de contacto integrados",
    project3_title: "Hello Baby !",
    project3_description: "Aplicación de seguimiento del embarazo y del ciclo menstrual",
    project4_title: "Sager Market",
    project4_description: "Aplicación personalizada de gestión de inventario y contabilidad interna",
    project5_title: "AmPay",
    project5_description: "Plataforma internacional que conecta intercambiadores de divisas y solicitantes de divisas",
    project6_title: "SefarPay",
    project6_description: "Plugin de WordPress personalizado para pagos en el Magreb",
    clients_title: "Clientes Satisfechos",
    testimonial1_text:
      "Rachad es muy profesional y atento. Entregó nuestro sitio de comercio electrónico a tiempo y superó nuestras expectativas.",
    testimonial1_name: "Marie Albert",
    testimonial1_role: "Directora de Comercio Electrónico",
    testimonial2_text:
      "Excelente trabajo en la migración de nuestro sitio de WordPress. Rachad hizo el proceso transparente y sin problemas.",
    testimonial2_name: "Jean Martin",
    testimonial2_role: "Propietario de PYME",
    testimonial3_text:
      "Solución API bien pensada y documentación impecable. Nuestro equipo no tuvo dificultades para integrarla.",
    testimonial3_name: "Sophie Bernard",
    testimonial3_role: "CTO Startup Tech",
    contact_title: "¡Trabajemos Juntos!",
    contact_subtitle: "Reserva tu consulta gratuita y hablemos sobre tu próximo proyecto",
    form_name: "Nombre",
    form_email: "Correo electrónico",
    form_message: "Mensaje",
    form_submit: "Enviar",
    form_name_placeholder: "Tu nombre completo",
    form_email_placeholder: "tu.email@ejemplo.com",
    form_message_placeholder: "Cuéntame un poco sobre tu proyecto",
    contact_info_title: "Información de Contacto",
    contact_email: "Correo electrónico",
    contact_phone: "Teléfono",
    contact_location: "Ubicación",
    footer_rights: "Todos los derechos reservados",
  },
}

// Language switcher with proper emoji support
document.querySelectorAll(".lang-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    const lang = btn.getAttribute("data-lang")

    document.querySelectorAll(".lang-btn").forEach((b) => b.classList.remove("active"))
    btn.classList.add("active")

    document.querySelectorAll("[data-translate]").forEach((element) => {
      const key = element.getAttribute("data-translate")
      if (translations[lang] && translations[lang][key]) {
        element.textContent = translations[lang][key]
      }
    })

    document.querySelectorAll("[data-placeholder-key]").forEach((element) => {
      const key = element.getAttribute("data-placeholder-key")
      if (translations[lang] && translations[lang][key]) {
        element.placeholder = translations[lang][key]
      }
    })
  })
})

// Contact form handling
document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault()
  const name = document.getElementById("name").value
  const email = document.getElementById("email").value
  const message = document.getElementById("message").value

  console.log("Form submitted:", { name, email, message })
  alert("Merci pour votre message! Je vous répondrai bientôt.")

  this.reset()
})

// Scroll animation for elements
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -100px 0px",
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1"
      entry.target.style.transform = "translateY(0)"
      observer.unobserve(entry.target)
    }
  })
}, observerOptions)

document.querySelectorAll(".service-card, .project-card, .stat-detail, .testimonial-card").forEach((el) => {
  el.style.opacity = "0"
  el.style.transform = "translateY(20px)"
  el.style.transition = "opacity 0.6s ease, transform 0.6s ease"
  observer.observe(el)
})

// Parallax effect on scroll
window.addEventListener("scroll", () => {
  const scrolled = window.pageYOffset
  const parallaxElements = document.querySelectorAll(".about-image, .profile-photo-container")

  parallaxElements.forEach((el) => {
    el.style.transform = `translateY(${scrolled * 0.05}px)`
  })
})

// Form input animations
document.querySelectorAll(".form-group input, .form-group textarea").forEach((input) => {
  input.addEventListener("focus", function () {
    if (window.innerWidth <= 768) {
      setTimeout(() => {
        this.scrollIntoView({ behavior: "smooth", block: "center" })
      }, 300)
    }
    this.parentElement.style.transform = "scale(1.02)"
    this.parentElement.style.transition = "transform 0.2s ease"
  })

  input.addEventListener("blur", function () {
    this.parentElement.style.transform = "scale(1)"
  })
})
