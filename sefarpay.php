<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenue sur le plugin SefarPay</title>
    <!-- Font Awesome CDN mis à jour -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Fallback pour Font Awesome -->
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v6.5.1/css/all.css" />

</head>

<body>
    <div class="sefarpay-welcome-container">
        <!-- Particules d'arrière-plan -->
        <div class="sefarpay-particles">
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
            <div class="sefarpay-particle"></div>
        </div>

        <div class="sefarpay-container">
            <!-- Hero Header Enhanced -->
            <div class="sefarpay-hero-header">
                <!-- État du plugin -->
                <?php $status = "En Ligne";
                ?>

                <?php if ($status == 'Actif') { ?>
                    <div class="sefarpay-plugin-status sefarpay-status-active">
                        <div class="sefarpay-status-indicator"></div>
                        <span>État du plugin: <?= $status ?></span>
                    </div>
                <?php } else if ($status === 'Inactif') { ?>

                    <div class="sefarpay-plugin-status sefarpay-status-inactive">
                        <div class="sefarpay-status-indicator"></div>
                        <span>État du plugin: <?= $status ?></span>
                    </div>
                <?php } else { ?>
                    <div class="sefarpay-plugin-status sefarpay-status-unknown">
                        <div class="sefarpay-status-indicator"></div>
                        <span>État du plugin: <?= $status ?></span>
                    </div>
                <?php } ?>

                <div class="sefarpay-hero-content">
                    <div class="sefarpay-plugin-logo">
                        <i
                            class="fas fa-credit-card sefarpay-icon-fallback sefarpay-icon-credit-card"></i>
                    </div>
                    <h1 class="sefarpay-hero-title">
                        Bienvenue sur le plugin SefarPay
                    </h1>
                    <p class="sefarpay-hero-subtitle">
                        Solution de paiement sécurisée et innovante pour l'Algérie
                    </p>

                    <div class="sefarpay-plugin-info">
                        <div class="sefarpay-info-item">
                            <div class="sefarpay-info-label">Plugin</div>
                            <div class="sefarpay-info-value">SefarPay</div>
                        </div>
                        <div class="sefarpay-info-item">
                            <div class="sefarpay-info-label">Fournisseur</div>
                            <div class="sefarpay-info-value">
                                <a href="https://sefarcapital.dz/" target="_blank">Sefar Capital</a>
                            </div>
                        </div>
                        <div class="sefarpay-info-item">
                            <div class="sefarpay-info-label">Version</div>
                            <div class="sefarpay-info-value">1.0.0</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Enhanced -->
            <div class="sefarpay-main-content">
                <!-- Description Section -->
                <div class="sefarpay-section">
                    <div class="sefarpay-section-card">
                        <div
                            class="sefarpay-section-header"
                            onclick="sefarpayToggleSection(this)">
                            <div class="sefarpay-section-header-left">
                                <div class="sefarpay-section-icon">
                                    <i
                                        class="fas fa-info-circle sefarpay-icon-fallback sefarpay-icon-info"></i>
                                </div>
                                <div class="sefarpay-section-title-container">
                                    <h2 class="sefarpay-section-title">À propos du plugin</h2>
                                    <p class="sefarpay-section-subtitle">
                                        Découvrez les fonctionnalités et avantages de SefarPay
                                    </p>
                                </div>
                            </div>
                            <div class="sefarpay-toggle-icon">
                                <i
                                    class="fas fa-chevron-down sefarpay-icon-fallback sefarpay-icon-chevron-down"></i>
                            </div>
                        </div>
                        <div class="sefarpay-section-content">
                            <div class="sefarpay-section-inner">
                                <div class="sefarpay-description-text">
                                    <i
                                        class="fas fa-quote-left sefarpay-icon-fallback sefarpay-icon-quote"
                                        style="
                        font-size: 2rem;
                        color: var(--sefarpay-secondary-color);
                        margin-bottom: 20px;
                      "></i>
                                    <br />
                                    SefarPay est une solution de paiement révolutionnaire
                                    spécialement conçue pour répondre aux besoins du marché
                                    algérien. Ce plugin WordPress de nouvelle génération permet
                                    aux entreprises et commerçants algériens d'intégrer
                                    facilement un système de paiement ultra-sécurisé et
                                    parfaitement conforme aux réglementations locales.
                                    <br /><br />
                                    Avec SefarPay, transformez votre site web en une plateforme
                                    de commerce électronique moderne, offrez à vos clients une
                                    expérience de paiement fluide et intuitive, tout en
                                    bénéficiant d'outils de gestion avancés et d'analyses
                                    détaillées pour optimiser votre activité.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fonctionnement Section -->
                <div class="sefarpay-section">
                    <div class="sefarpay-section-card">
                        <div
                            class="sefarpay-section-header"
                            onclick="sefarpayToggleSection(this)">
                            <div class="sefarpay-section-header-left">
                                <div class="sefarpay-section-icon">
                                    <i
                                        class="fas fa-cogs sefarpay-icon-fallback sefarpay-icon-cogs"></i>
                                </div>
                                <div class="sefarpay-section-title-container">
                                    <h2 class="sefarpay-section-title">Fonctionnement</h2>
                                    <p class="sefarpay-section-subtitle">
                                        Comment SefarPay transforme votre site en plateforme de
                                        paiement
                                    </p>
                                </div>
                            </div>
                            <div class="sefarpay-toggle-icon">
                                <i
                                    class="fas fa-chevron-down sefarpay-icon-fallback sefarpay-icon-chevron-down"></i>
                            </div>
                        </div>
                        <div class="sefarpay-section-content">
                            <div class="sefarpay-section-inner">
                                <div
                                    style="
                      display: grid;
                      grid-template-columns: repeat(
                        auto-fit,
                        minmax(300px, 1fr)
                      );
                      gap: 30px;
                      margin-bottom: 30px;
                    ">
                                    <div
                                        style="
                        background: linear-gradient(
                          135deg,
                          rgba(0, 84, 166, 0.05),
                          rgba(58, 167, 170, 0.05)
                        );
                        padding: 25px;
                        border-radius: 15px;
                        border-left: 4px solid var(--sefarpay-primary-color);
                      ">
                                        <h4
                                            style="
                          color: var(--sefarpay-primary-color);
                          margin-bottom: 15px;
                          font-size: 1.2rem;
                        ">
                                            <i
                                                class="fas fa-plug sefarpay-icon-fallback sefarpay-icon-plug"
                                                style="margin-right: 10px"></i>Intégration Transparente
                                        </h4>
                                        <p>
                                            SefarPay s'intègre parfaitement à votre site WordPress
                                            existant sans modification majeure de votre
                                            infrastructure.
                                        </p>
                                    </div>
                                    <div
                                        style="
                        background: linear-gradient(
                          135deg,
                          rgba(58, 167, 170, 0.05),
                          rgba(0, 84, 166, 0.05)
                        );
                        padding: 25px;
                        border-radius: 15px;
                        border-left: 4px solid var(--sefarpay-secondary-color);
                      ">
                                        <h4
                                            style="
                          color: var(--sefarpay-secondary-color);
                          margin-bottom: 15px;
                          font-size: 1.2rem;
                        ">
                                            <i
                                                class="fas fa-shield-alt sefarpay-icon-fallback sefarpay-icon-shield"
                                                style="margin-right: 10px"></i>Sécurité Maximale
                                        </h4>
                                        <p>
                                            Toutes les transactions sont cryptées et sécurisées
                                            selon les standards internationaux les plus stricts.
                                        </p>
                                    </div>
                                </div>
                                <p
                                    style="
                      font-size: 1.1rem;
                      line-height: 1.8;
                      color: var(--sefarpay-text-light);
                    ">
                                    Le système fonctionne comme une passerelle de paiement
                                    intelligente intégrée à votre site WordPress. Une fois
                                    configuré, le plugin permet à vos clients de régler leurs
                                    achats en utilisant les méthodes de paiement les plus
                                    populaires en Algérie. Le système traite les transactions de
                                    manière ultra-sécurisée, gère automatiquement les
                                    confirmations de paiement en temps réel, et vous fournit des
                                    outils de suivi complets avec des rapports détaillés et des
                                    analyses de performance pour optimiser votre business.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Configuration Section -->
                <div class="sefarpay-section">
                    <div class="sefarpay-section-card">
                        <div
                            class="sefarpay-section-header"
                            onclick="sefarpayToggleSection(this)">
                            <div class="sefarpay-section-header-left">
                                <div class="sefarpay-section-icon">
                                    <i
                                        class="fas fa-list-ol sefarpay-icon-fallback sefarpay-icon-list"></i>
                                </div>
                                <div class="sefarpay-section-title-container">
                                    <h2 class="sefarpay-section-title">
                                        Enregistrement et Configuration
                                    </h2>
                                    <p class="sefarpay-section-subtitle">
                                        Guide étape par étape pour démarrer avec SefarPay
                                    </p>
                                </div>
                            </div>
                            <div class="sefarpay-toggle-icon">
                                <i
                                    class="fas fa-chevron-down sefarpay-icon-fallback sefarpay-icon-chevron-down"></i>
                            </div>
                        </div>
                        <div class="sefarpay-section-content">
                            <div class="sefarpay-section-inner">
                                <div class="sefarpay-steps-container">
                                    <div class="sefarpay-step-item">
                                        <div class="sefarpay-step-number">1</div>
                                        <div class="sefarpay-step-content">
                                            <div class="sefarpay-step-title">
                                                Installation
                                            </div>
                                            <div class="sefarpay-step-description">
                                                Une fois que vous avez installé et activé le plugin, il
                                                reste "Inactif" par défaut, vous devez d'abord vous enregistrer
                                                dans le menu <strong>Enregistrement</strong>.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sefarpay-step-item">
                                        <div class="sefarpay-step-number">2</div>
                                        <div class="sefarpay-step-content">
                                            <div class="sefarpay-step-title">
                                                Configuration des paramètres
                                            </div>
                                            <div class="sefarpay-step-description">
                                                Après que vous ayez enregistré votre site, vous devez
                                                configurer les paramètres du plugin dans le menu
                                                <strong>Configuration</strong>. Saisissez vos clés API
                                                sécurisées, configurez les méthodes de paiement
                                                acceptées, et personnalisez l'apparence selon votre
                                                charte graphique.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sefarpay-step-item">
                                        <div class="sefarpay-step-number">3</div>
                                        <div class="sefarpay-step-content">
                                            <div class="sefarpay-step-title">
                                                Choix des pages et insertion des shortcodes
                                            </div>
                                            <div class="sefarpay-step-description">
                                                À l'étape précédente, vous avez choisi une URL de paiement réussi et une autre pour les paiements échoués.
                                                Il est maintenant temps d'insérer les shortcodes sur les pages respectives :

                                                <ul>
                                                    <li>
                                                        Shortcode de la page de paiement (à mettre sur la page Panier ou Checkout de WooCommerce) :
                                                        <strong>[sefarpay_shortcode]</strong>
                                                    </li>
                                                    <li>
                                                        Shortcode de la page de paiement accepté : <strong>[sefarpay_payment_success_shortcode]</strong>
                                                    </li>
                                                    <li>
                                                        Shortcode de la page de paiement refusé : <strong>[sefarpay_payment_declined_shortcode]</strong>
                                                    </li>
                                                </ul>

                                                Tout est prêt, vos utilisateurs peuvent désormais payer en cliquant sur le bouton configuré.

                                                <span>
                                                    Veuillez noter que Sefarpay Capital doit préalablement activer l'extension, sinon le bouton ne sera pas affiché.
                                                    Vous pouvez consulter l'état de votre plugin dans le tableau de bord.
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Important Section -->
            <div class="sefarpay-section">
                <div class="sefarpay-section-card">
                    <div
                        class="sefarpay-section-header"
                        onclick="sefarpayToggleSection(this)">
                        <div class="sefarpay-section-header-left">
                            <div class="sefarpay-section-icon">
                                <i
                                    class="fas fa-exclamation-triangle sefarpay-icon-fallback sefarpay-icon-warning"></i>
                            </div>
                            <div class="sefarpay-section-title-container">
                                <h2 class="sefarpay-section-title">Points Importants</h2>
                                <p class="sefarpay-section-subtitle">
                                    Informations cruciales pour une utilisation optimale
                                </p>
                            </div>
                        </div>
                        <div class="sefarpay-toggle-icon">
                            <i
                                class="fas fa-chevron-down sefarpay-icon-fallback sefarpay-icon-chevron-down"></i>
                        </div>
                    </div>
                    <div class="sefarpay-section-content">
                        <div class="sefarpay-section-inner">
                            <ul class="sefarpay-important-list">
                                <li class="sefarpay-important-item">
                                    <div class="sefarpay-important-icon">
                                        <i
                                            class="fas fa-shield-alt sefarpay-icon-fallback sefarpay-icon-shield"></i>
                                    </div>
                                    <div class="sefarpay-important-text">
                                        <strong>Sécurité maximale des clés API :</strong> Ne
                                        partagez jamais vos clés API privées avec des tiers et
                                        stockez-les de manière ultra-sécurisée. Utilisez
                                        impérativement HTTPS sur votre site pour protéger toutes
                                        les données de paiement et respecter les standards PCI
                                        DSS.
                                    </div>
                                </li>
                                <li class="sefarpay-important-item">
                                    <div class="sefarpay-important-icon">
                                        <i
                                            class="fas fa-sync-alt sefarpay-icon-fallback sefarpay-icon-sync"></i>
                                    </div>
                                    <div class="sefarpay-important-text">
                                        <strong>Sauvegarde et maintenance régulière :</strong>
                                        Effectuez des sauvegardes automatiques et régulières de
                                        votre site WordPress et de la base de données,
                                        particulièrement avant toute mise à jour du plugin ou
                                        modification importante de votre configuration.
                                    </div>
                                </li>
                                <li class="sefarpay-important-item">
                                    <div class="sefarpay-important-icon">
                                        <i
                                            class="fas fa-headset sefarpay-icon-fallback sefarpay-icon-headset"></i>
                                    </div>
                                    <div class="sefarpay-important-text">
                                        <strong>Support technique professionnel :</strong> En
                                        cas de problème technique ou de question, contactez
                                        immédiatement le support technique SefarPay Capital
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documentation Section -->
            <!--
      <div class="sefarpay-section">
        <div class="sefarpay-section-card">
          <div
            class="sefarpay-section-header"
            onclick="sefarpayToggleSection(this)">
            <div class="sefarpay-section-header-left">
              <div class="sefarpay-section-icon">
                <i
                  class="fas fa-book sefarpay-icon-fallback sefarpay-icon-book"></i>
              </div>
              <div class="sefarpay-section-title-container">
                <h2 class="sefarpay-section-title">Documentation</h2>
                <p class="sefarpay-section-subtitle">
                  Guides, tutoriels et ressources pour maîtriser SefarPay
                </p>
              </div>
            </div>
            <div class="sefarpay-toggle-icon">
              <i
                class="fas fa-chevron-down sefarpay-icon-fallback sefarpay-icon-chevron-down"></i>
            </div>
          </div>
          <div class="sefarpay-section-content">
            <div class="sefarpay-section-inner">
              <div class="sefarpay-documentation-grid">
                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-rocket sefarpay-icon-fallback sefarpay-icon-rocket"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">
                    Guide de démarrage rapide
                  </h4>
                  <p class="sefarpay-doc-description">
                    Configurez votre plugin SefarPay en quelques minutes
                    avec notre guide étape par étape.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-play sefarpay-icon-fallback sefarpay-icon-play"></i>
                    Commencer
                  </a>
                </div>

                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-code sefarpay-icon-fallback sefarpay-icon-code"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">API et intégration</h4>
                  <p class="sefarpay-doc-description">
                    Documentation technique complète pour les développeurs
                    et intégrations avancées.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-terminal sefarpay-icon-fallback sefarpay-icon-terminal"></i>
                    API Docs
                  </a>
                </div>

                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-video sefarpay-icon-fallback sefarpay-icon-video"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">Tutoriels vidéo</h4>
                  <p class="sefarpay-doc-description">
                    Apprenez visuellement avec nos tutoriels vidéo détaillés
                    et nos démonstrations.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-play-circle sefarpay-icon-fallback sefarpay-icon-play-circle"></i>
                    Regarder
                  </a>
                </div>

                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-question-circle sefarpay-icon-fallback sefarpay-icon-question"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">FAQ et dépannage</h4>
                  <p class="sefarpay-doc-description">
                    Trouvez rapidement des réponses aux questions fréquentes
                    et résolvez les problèmes.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-search sefarpay-icon-fallback sefarpay-icon-search"></i>
                    Explorer
                  </a>
                </div>

                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-download sefarpay-icon-fallback sefarpay-icon-download"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">Ressources et outils</h4>
                  <p class="sefarpay-doc-description">
                    Téléchargez des exemples de code, des templates et des
                    outils utiles.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-cloud-download-alt sefarpay-icon-fallback sefarpay-icon-cloud-download"></i>
                    Télécharger
                  </a>
                </div>

                <div class="sefarpay-doc-card">
                  <div class="sefarpay-doc-icon">
                    <i
                      class="fas fa-users sefarpay-icon-fallback sefarpay-icon-users"></i>
                  </div>
                  <h4 class="sefarpay-doc-title">Communauté</h4>
                  <p class="sefarpay-doc-description">
                    Rejoignez notre communauté de développeurs et partagez
                    vos expériences.
                  </p>
                  <a href="#" class="sefarpay-doc-link">
                    <i
                      class="fas fa-comments sefarpay-icon-fallback sefarpay-icon-comments"></i>
                    Rejoindre
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                      -->

            <!-- Help Section Enhanced -->
            <div class="sefarpay-help-section">
                <h3 class="sefarpay-help-title">
                    <i
                        class="fas fa-graduation-cap sefarpay-icon-fallback sefarpay-icon-graduation"
                        style="
                  margin-right: 15px;
                  color: var(--sefarpay-secondary-color);
                "></i>
                    Besoin d'aide supplémentaire ?
                </h3>
                <p class="sefarpay-help-description">
                    Accédez à notre centre de documentation complet avec des guides
                    détaillés, des tutoriels vidéo, des exemples de code pratiques, et
                    des solutions aux problèmes les plus fréquents. Notre équipe
                    d'experts est là pour vous accompagner.
                </p>
                <a href="https://sefarcapital.dz/" class="sefarpay-help-button">
                    <i
                        class="fas fa-book-open sefarpay-icon-fallback sefarpay-icon-book-open"></i>
                    Aller sur Sefar Capital
                </a>
            </div>
        </div>
    </div>

    <style>
        /* CSS encapsulé pour éviter les conflits WordPress */
        .sefarpay-welcome-container {
            --sefarpay-primary-color: #0054a6;
            --sefarpay-primary-light: #1a6bc2;
            --sefarpay-primary-dark: #00407d;
            --sefarpay-secondary-color: #3aa7aa;
            --sefarpay-secondary-light: #4dbdc0;
            --sefarpay-secondary-dark: #2a8a8d;
            --sefarpay-light-gray: #f8f9fa;
            --sefarpay-medium-gray: #e9ecef;
            --sefarpay-dark-gray: #343a40;
            --sefarpay-error-color: #e74c3c;
            --sefarpay-success-color: #2ecc71;
            --sefarpay-warning-color: #f39c12;
            --sefarpay-info-color: #3498db;
            --sefarpay-white: #ffffff;
            --sefarpay-text-light: #6c757d;
            --sefarpay-gradient-primary: linear-gradient(135deg,
                    var(--sefarpay-primary-color),
                    var(--sefarpay-primary-light));
            --sefarpay-gradient-secondary: linear-gradient(135deg,
                    var(--sefarpay-secondary-color),
                    var(--sefarpay-secondary-light));
            --sefarpay-gradient-background: linear-gradient(135deg,
                    #f5f7fa 0%,
                    #c3cfe2 100%);
        }

        .sefarpay-welcome-container * {
            box-sizing: border-box;
            font-family: "Poppins", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap");

        /* Fallback pour les icônes si Font Awesome ne charge pas */
        .sefarpay-icon-fallback {
            display: inline-block;
            width: 1em;
            height: 1em;
            text-align: center;
            font-style: normal;
            font-weight: bold;
        }

        /* Icônes de fallback en Unicode */
        .sefarpay-icon-credit-card::before {
            content: "💳";
        }

        .sefarpay-icon-info::before {
            content: "ℹ️";
        }

        .sefarpay-icon-cogs::before {
            content: "⚙️";
        }

        .sefarpay-icon-list::before {
            content: "📋";
        }

        .sefarpay-icon-warning::before {
            content: "⚠️";
        }

        .sefarpay-icon-book::before {
            content: "📚";
        }

        .sefarpay-icon-rocket::before {
            content: "🚀";
        }

        .sefarpay-icon-code::before {
            content: "💻";
        }

        .sefarpay-icon-video::before {
            content: "🎥";
        }

        .sefarpay-icon-question::before {
            content: "❓";
        }

        .sefarpay-icon-download::before {
            content: "⬇️";
        }

        .sefarpay-icon-users::before {
            content: "👥";
        }

        .sefarpay-icon-graduation::before {
            content: "🎓";
        }

        .sefarpay-icon-chevron-down::before {
            content: "▼";
        }

        .sefarpay-icon-shield::before {
            content: "🛡️";
        }

        .sefarpay-icon-sync::before {
            content: "🔄";
        }

        .sefarpay-icon-headset::before {
            content: "🎧";
        }

        .sefarpay-icon-plug::before {
            content: "🔌";
        }

        .sefarpay-icon-quote::before {
            content: "💬";
        }

        .sefarpay-icon-play::before {
            content: "▶️";
        }

        .sefarpay-icon-terminal::before {
            content: "⌨️";
        }

        .sefarpay-icon-play-circle::before {
            content: "⏯️";
        }

        .sefarpay-icon-search::before {
            content: "🔍";
        }

        .sefarpay-icon-cloud-download::before {
            content: "☁️";
        }

        .sefarpay-icon-comments::before {
            content: "💬";
        }

        .sefarpay-icon-book-open::before {
            content: "📖";
        }

        .sefarpay-welcome-container {
            background: var(--sefarpay-gradient-background);
            color: var(--sefarpay-dark-gray);
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
            margin: 0;
        }

        /* Particules d'arrière-plan */
        .sefarpay-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .sefarpay-particle {
            position: absolute;
            background: rgba(0, 84, 166, 0.1);
            border-radius: 50%;
            animation: sefarpay-float 6s ease-in-out infinite;
        }

        .sefarpay-particle:nth-child(1) {
            width: 4px;
            height: 4px;
            left: 10%;
            animation-delay: 0s;
        }

        .sefarpay-particle:nth-child(2) {
            width: 6px;
            height: 6px;
            left: 20%;
            animation-delay: 1s;
        }

        .sefarpay-particle:nth-child(3) {
            width: 3px;
            height: 3px;
            left: 30%;
            animation-delay: 2s;
        }

        .sefarpay-particle:nth-child(4) {
            width: 5px;
            height: 5px;
            left: 40%;
            animation-delay: 3s;
        }

        .sefarpay-particle:nth-child(5) {
            width: 4px;
            height: 4px;
            left: 50%;
            animation-delay: 4s;
        }

        .sefarpay-particle:nth-child(6) {
            width: 7px;
            height: 7px;
            left: 60%;
            animation-delay: 5s;
        }

        .sefarpay-particle:nth-child(7) {
            width: 3px;
            height: 3px;
            left: 70%;
            animation-delay: 0.5s;
        }

        .sefarpay-particle:nth-child(8) {
            width: 5px;
            height: 5px;
            left: 80%;
            animation-delay: 1.5s;
        }

        .sefarpay-particle:nth-child(9) {
            width: 4px;
            height: 4px;
            left: 90%;
            animation-delay: 2.5s;
        }

        @keyframes sefarpay-float {

            0%,
            100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .sefarpay-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: var(--sefarpay-white);
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        /* Hero Header Enhanced */
        .sefarpay-hero-header {
            background: var(--sefarpay-gradient-primary);
            padding: 80px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .sefarpay-hero-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle,
                    rgba(255, 255, 255, 0.1) 1px,
                    transparent 1px);
            background-size: 50px 50px;
            animation: sefarpay-backgroundMove 20s linear infinite;
        }

        @keyframes sefarpay-backgroundMove {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            100% {
                transform: translate(50px, 50px) rotate(360deg);
            }
        }

        .sefarpay-hero-header::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: var(--sefarpay-white);
            clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 80%);
        }

        .sefarpay-hero-content {
            position: relative;
            z-index: 3;
        }

        /* État du plugin */
        .sefarpay-plugin-status {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 12px 20px;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--sefarpay-white);
            z-index: 4;
        }

        .sefarpay-status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            animation: sefarpay-pulse 2s ease-in-out infinite;
        }

        .sefarpay-status-active .sefarpay-status-indicator {
            background-color: #2ecc71;
            box-shadow: 0 0 10px rgba(46, 204, 113, 0.5);
        }

        .sefarpay-status-inactive .sefarpay-status-indicator {
            background-color: #e74c3c;
            box-shadow: 0 0 10px rgba(231, 76, 60, 0.5);
        }

        @keyframes sefarpay-pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }
        }

        .sefarpay-plugin-logo {
            width: 100px;
            height: 100px;
            background: var(--sefarpay-white);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            font-size: 2.5rem;
            color: var(--sefarpay-primary-color);
            font-weight: 800;
            position: relative;
            animation: sefarpay-logoFloat 3s ease-in-out infinite;
        }

        @keyframes sefarpay-logoFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(5deg);
            }
        }

        .sefarpay-plugin-logo::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: var(--sefarpay-gradient-secondary);
            border-radius: 30px;
            z-index: -1;
            opacity: 0.3;
            animation: sefarpay-logoPulse 2s ease-in-out infinite;
        }

        @keyframes sefarpay-logoPulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.3;
            }

            50% {
                transform: scale(1.05);
                opacity: 0.6;
            }
        }

        .sefarpay-hero-title {
            color: var(--sefarpay-white);
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, #fff, #f0f8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sefarpay-hero-subtitle {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.4rem;
            font-weight: 400;
            margin-bottom: 40px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sefarpay-plugin-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .sefarpay-info-item {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            padding: 20px 30px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .sefarpay-info-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.2),
                    transparent);
            transition: left 0.6s;
        }

        .sefarpay-info-item:hover::before {
            left: 100%;
        }

        .sefarpay-info-item:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.3);
        }

        .sefarpay-info-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sefarpay-info-value {
            color: var(--sefarpay-white);
            font-size: 1.2rem;
            font-weight: 700;
        }

        .sefarpay-info-value a {
            color: var(--sefarpay-white);
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .sefarpay-info-value a:hover {
            opacity: 0.8;
        }

        /* Main Content Enhanced */
        .sefarpay-main-content {
            padding: 60px 40px;
            background: linear-gradient(180deg,
                    var(--sefarpay-white) 0%,
                    #f8f9fa 100%);
        }

        .sefarpay-section {
            margin-bottom: 30px;
        }

        /* Collapsible Section Cards */
        .sefarpay-section-card {
            background: var(--sefarpay-white);
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 84, 166, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .sefarpay-section-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--sefarpay-gradient-primary);
        }

        .sefarpay-section-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .sefarpay-section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 35px 40px;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .sefarpay-section-header:hover {
            background: rgba(0, 84, 166, 0.02);
        }

        .sefarpay-section-header-left {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .sefarpay-section-icon {
            width: 60px;
            height: 60px;
            background: var(--sefarpay-gradient-primary);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--sefarpay-white);
            font-size: 1.8rem;
            margin-right: 25px;
            box-shadow: 0 8px 20px rgba(0, 84, 166, 0.3);
            transition: all 0.3s;
        }

        .sefarpay-section-header:hover .sefarpay-section-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .sefarpay-section-title-container {
            flex: 1;
        }

        .sefarpay-section-title {
            color: var(--sefarpay-primary-color);
            font-size: 2rem;
            font-weight: 700;
            margin: 0 0 8px 0;
            transition: color 0.3s;
        }

        .sefarpay-section-subtitle {
            color: var(--sefarpay-text-light);
            font-size: 1rem;
            font-weight: 400;
            margin: 0;
        }

        .sefarpay-toggle-icon {
            width: 40px;
            height: 40px;
            background: var(--sefarpay-gradient-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--sefarpay-white);
            font-size: 1.2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(58, 167, 170, 0.3);
        }

        .sefarpay-section-card.sefarpay-expanded .sefarpay-toggle-icon {
            transform: rotate(180deg);
            background: var(--sefarpay-gradient-primary);
        }

        .sefarpay-section-content {
            max-height: 0;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
        }

        .sefarpay-section-card.sefarpay-expanded .sefarpay-section-content {
            max-height: 2000px;
            opacity: 1;
            padding: 0 40px 40px 40px;
        }

        .sefarpay-section-inner {
            color: var(--sefarpay-dark-gray);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Description Section Enhanced */
        .sefarpay-description-text {
            font-size: 1.3rem;
            color: var(--sefarpay-text-light);
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.9;
            position: relative;
            padding: 30px;
            background: linear-gradient(135deg,
                    rgba(0, 84, 166, 0.05),
                    rgba(58, 167, 170, 0.05));
            border-radius: 20px;
            border-left: 5px solid var(--sefarpay-secondary-color);
        }

        /* Steps Section Enhanced */
        .sefarpay-steps-container {
            display: grid;
            gap: 25px;
            margin-top: 30px;
        }

        .sefarpay-step-item {
            display: flex;
            align-items: flex-start;
            padding: 30px;
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            border-radius: 20px;
            border-left: 6px solid var(--sefarpay-secondary-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .sefarpay-step-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(58, 167, 170, 0.1),
                    transparent);
            transition: left 0.6s;
        }

        .sefarpay-step-item:hover::before {
            left: 100%;
        }

        .sefarpay-step-item:hover {
            background: linear-gradient(135deg, rgba(58, 167, 170, 0.08), #ffffff);
            transform: translateX(15px) scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .sefarpay-step-number {
            width: 50px;
            height: 50px;
            background: var(--sefarpay-gradient-secondary);
            color: var(--sefarpay-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.3rem;
            margin-right: 25px;
            flex-shrink: 0;
            box-shadow: 0 6px 15px rgba(58, 167, 170, 0.4);
            position: relative;
        }

        .sefarpay-step-number::before {
            content: "";
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: var(--sefarpay-gradient-primary);
            border-radius: 50%;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .sefarpay-step-item:hover .sefarpay-step-number::before {
            opacity: 0.3;
        }

        .sefarpay-step-content {
            flex: 1;
        }

        .sefarpay-step-title {
            color: var(--sefarpay-primary-color);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 12px;
        }

        .sefarpay-step-description {
            color: var(--sefarpay-text-light);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .sefarpay-step-description a {
            color: var(--sefarpay-secondary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .sefarpay-step-description a:hover {
            color: var(--sefarpay-secondary-dark);
        }

        /* Important Section Enhanced */
        .sefarpay-important-list {
            list-style: none;
            margin-top: 25px;
        }

        .sefarpay-important-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 25px;
            background: linear-gradient(135deg,
                    rgba(243, 156, 18, 0.08),
                    rgba(255, 255, 255, 0.9));
            border-radius: 18px;
            border-left: 5px solid var(--sefarpay-warning-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .sefarpay-important-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(243, 156, 18, 0.1),
                    transparent);
            transition: left 0.6s;
        }

        .sefarpay-important-item:hover::before {
            left: 100%;
        }

        .sefarpay-important-item:hover {
            background: linear-gradient(135deg,
                    rgba(243, 156, 18, 0.12),
                    rgba(255, 255, 255, 0.95));
            transform: translateX(10px) scale(1.02);
            box-shadow: 0 8px 20px rgba(243, 156, 18, 0.2);
        }

        .sefarpay-important-icon {
            color: var(--sefarpay-warning-color);
            font-size: 1.5rem;
            margin-right: 20px;
            margin-top: 3px;
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            background: rgba(243, 156, 18, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .sefarpay-important-item:hover .sefarpay-important-icon {
            background: var(--sefarpay-warning-color);
            color: var(--sefarpay-white);
            transform: scale(1.1);
        }

        .sefarpay-important-text {
            color: var(--sefarpay-dark-gray);
            font-size: 1.1rem;
            line-height: 1.7;
            font-weight: 500;
        }

        .sefarpay-important-text strong {
            color: var(--sefarpay-primary-color);
            font-weight: 700;
        }

        /* Documentation Section */
        .sefarpay-documentation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .sefarpay-doc-card {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            padding: 30px;
            border-radius: 20px;
            border-left: 6px solid var(--sefarpay-info-color);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .sefarpay-doc-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(52, 152, 219, 0.1),
                    transparent);
            transition: left 0.6s;
        }

        .sefarpay-doc-card:hover::before {
            left: 100%;
        }

        .sefarpay-doc-card:hover {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.08), #ffffff);
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .sefarpay-doc-icon {
            width: 60px;
            height: 60px;
            background: var(--sefarpay-gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--sefarpay-white);
            font-size: 1.8rem;
            margin: 0 auto 20px;
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.3);
        }

        .sefarpay-doc-title {
            color: var(--sefarpay-primary-color);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .sefarpay-doc-description {
            color: var(--sefarpay-text-light);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .sefarpay-doc-link {
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            background: var(--sefarpay-gradient-secondary);
            color: var(--sefarpay-white);
            text-decoration: none;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(58, 167, 170, 0.3);
        }

        .sefarpay-doc-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(58, 167, 170, 0.4);
            color: var(--sefarpay-white);
            text-decoration: none;
        }

        .sefarpay-doc-link i {
            margin-right: 8px;
        }

        /* Help Section Enhanced */
        .sefarpay-help-section {
            text-align: center;
            margin-top: 60px;
            padding: 50px;
            background: linear-gradient(135deg,
                    rgba(0, 84, 166, 0.08),
                    rgba(58, 167, 170, 0.08));
            border-radius: 25px;
            border: 2px dashed rgba(0, 84, 166, 0.2);
            position: relative;
            overflow: hidden;
        }

        .sefarpay-help-section::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle,
                    rgba(0, 84, 166, 0.05) 1px,
                    transparent 1px);
            background-size: 30px 30px;
            animation: sefarpay-backgroundMove 15s linear infinite;
        }

        .sefarpay-help-title {
            color: var(--sefarpay-primary-color);
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        .sefarpay-help-description {
            color: var(--sefarpay-text-light);
            font-size: 1.1rem;
            margin-bottom: 35px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
            position: relative;
            z-index: 2;
        }

        .sefarpay-help-button {
            display: inline-flex;
            align-items: center;
            padding: 20px 40px;
            background: var(--sefarpay-gradient-primary);
            color: var(--sefarpay-white);
            text-decoration: none;
            border-radius: 20px;
            font-size: 1.2rem;
            font-weight: 700;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 84, 166, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .sefarpay-help-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.2),
                    transparent);
            transition: left 0.6s;
        }

        .sefarpay-help-button:hover::before {
            left: 100%;
        }

        .sefarpay-help-button:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 84, 166, 0.4);
            color: var(--sefarpay-white);
            text-decoration: none;
        }

        .sefarpay-help-button i {
            margin-right: 15px;
            font-size: 1.3rem;
        }

        /* Responsive Design Enhanced */
        @media (max-width: 768px) {
            .sefarpay-welcome-container {
                padding: 10px;
            }

            .sefarpay-container {
                border-radius: 20px;
            }

            .sefarpay-hero-header {
                padding: 60px 25px;
            }

            .sefarpay-plugin-status {
                position: relative;
                top: auto;
                right: auto;
                margin-bottom: 20px;
                align-self: center;
            }

            .sefarpay-hero-title {
                font-size: 2.5rem;
            }

            .sefarpay-hero-subtitle {
                font-size: 1.2rem;
            }

            .sefarpay-plugin-info {
                gap: 15px;
                flex-direction: column;
            }

            .sefarpay-info-item {
                padding: 15px 25px;
            }

            .sefarpay-main-content {
                padding: 40px 25px;
            }

            .sefarpay-section-header {
                padding: 25px 20px;
                flex-direction: column;
                text-align: center;
            }

            .sefarpay-section-header-left {
                flex-direction: column;
                margin-bottom: 20px;
            }

            .sefarpay-section-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .sefarpay-section-title {
                font-size: 1.6rem;
            }

            .sefarpay-section-card.sefarpay-expanded .sefarpay-section-content {
                padding: 0 20px 30px 20px;
            }

            .sefarpay-step-item {
                flex-direction: column;
                text-align: center;
                padding: 25px 20px;
            }

            .sefarpay-step-number {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .sefarpay-important-item {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .sefarpay-important-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .sefarpay-documentation-grid {
                grid-template-columns: 1fr;
            }

            .sefarpay-help-section {
                padding: 40px 25px;
            }

            .sefarpay-help-button {
                padding: 18px 30px;
                font-size: 1.1rem;
            }
        }

        @media (max-width: 480px) {
            .sefarpay-hero-title {
                font-size: 2rem;
            }

            .sefarpay-hero-subtitle {
                font-size: 1rem;
            }

            .sefarpay-section-title {
                font-size: 1.4rem;
            }

            .sefarpay-section-inner {
                font-size: 1rem;
            }
        }

        /* Animation pour l'apparition des éléments */
        .sefarpay-section-card {
            opacity: 0;
            transform: translateY(30px);
            animation: sefarpay-fadeInUp 0.6s ease-out forwards;
        }

        .sefarpay-section-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .sefarpay-section-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .sefarpay-section-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .sefarpay-section-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .sefarpay-section-card:nth-child(5) {
            animation-delay: 0.5s;
        }

        @keyframes sefarpay-fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        // Fonction pour basculer l'état des sections
        function sefarpayToggleSection(header) {
            const card = header.closest(".sefarpay-section-card");
            const isExpanded = card.classList.contains("sefarpay-expanded");

            // Fermer toutes les autres sections
            document
                .querySelectorAll(".sefarpay-section-card.sefarpay-expanded")
                .forEach((otherCard) => {
                    if (otherCard !== card) {
                        otherCard.classList.remove("sefarpay-expanded");
                    }
                });

            // Basculer la section actuelle
            if (isExpanded) {
                card.classList.remove("sefarpay-expanded");
            } else {
                card.classList.add("sefarpay-expanded");
            }
        }

        // Animation d'apparition progressive des sections
        const sefarpayObserverOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
        };

        const sefarpayObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, sefarpayObserverOptions);

        // Observer toutes les cartes de section
        document.querySelectorAll(".sefarpay-section-card").forEach((card) => {
            sefarpayObserver.observe(card);
        });

        // Effet de parallaxe léger sur le header
        window.addEventListener("scroll", () => {
            const scrolled = window.pageYOffset;
            const heroHeader = document.querySelector(".sefarpay-hero-header");
            if (heroHeader) {
                heroHeader.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });

        // Animation des particules
        function sefarpayCreateParticle() {
            const particle = document.createElement("div");
            particle.className = "sefarpay-particle";
            particle.style.left = Math.random() * 100 + "%";
            particle.style.animationDuration = Math.random() * 3 + 2 + "s";
            particle.style.opacity = Math.random();
            document.querySelector(".sefarpay-particles").appendChild(particle);

            setTimeout(() => {
                particle.remove();
            }, 5000);
        }

        // Créer des particules périodiquement
        setInterval(sefarpayCreateParticle, 300);

        // Animation des étapes au survol
        document
            .querySelectorAll(".sefarpay-step-item")
            .forEach((step, index) => {
                step.addEventListener("mouseenter", () => {
                    step.style.transform = "translateX(15px) scale(1.02)";
                });

                step.addEventListener("mouseleave", () => {
                    step.style.transform = "translateX(0) scale(1)";
                });
            });

        // Animation des éléments importants
        document.querySelectorAll(".sefarpay-important-item").forEach((item) => {
            item.addEventListener("mouseenter", () => {
                item.style.transform = "translateX(10px) scale(1.02)";
            });

            item.addEventListener("mouseleave", () => {
                item.style.transform = "translateX(0) scale(1)";
            });
        });

        // Animation des cartes de documentation
        document.querySelectorAll(".sefarpay-doc-card").forEach((card) => {
            card.addEventListener("mouseenter", () => {
                card.style.transform = "translateY(-8px) scale(1.02)";
            });

            card.addEventListener("mouseleave", () => {
                card.style.transform = "translateY(0) scale(1)";
            });
        });

        // Effet de clic sur les boutons de documentation
        document.querySelectorAll(".sefarpay-doc-link").forEach((link) => {
            link.addEventListener("click", (e) => {
                e.preventDefault();

                // Animation de clic
                const button = e.target.closest(".sefarpay-doc-link");
                button.style.transform = "translateY(-2px) scale(0.98)";

                setTimeout(() => {
                    button.style.transform = "translateY(-2px) scale(1)";

                    // Créer une notification toast
                    const toast = document.createElement("div");
                    toast.innerHTML = `
                        <div style="
                            position: fixed;
                            top: 20px;
                            right: 20px;
                            background: var(--sefarpay-gradient-primary);
                            color: white;
                            padding: 15px 25px;
                            border-radius: 10px;
                            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                            z-index: 1000;
                            animation: sefarpaySlideInRight 0.5s ease-out;
                        ">
                            <i class="fas fa-book" style="margin-right: 10px;"></i>
                            Ouverture de la documentation...
                        </div>
                    `;
                    document.body.appendChild(toast);

                    setTimeout(() => {
                        toast.remove();
                    }, 3000);
                }, 150);
            });
        });

        // Effet de clic sur le bouton d'aide principal
        document
            .querySelector(".sefarpay-help-button")
            .addEventListener("click", (e) => {
                e.preventDefault();

                // Animation de clic
                const button = e.target.closest(".sefarpay-help-button");
                button.style.transform = "translateY(-5px) scale(0.98)";

                setTimeout(() => {
                    button.style.transform = "translateY(-5px) scale(1.05)";

                    // Créer une notification toast
                    const toast = document.createElement("div");
                    toast.innerHTML = `
                    <div style="
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        background: var(--sefarpay-gradient-primary);
                        color: white;
                        padding: 15px 25px;
                        border-radius: 10px;
                        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                        z-index: 1000;
                        animation: sefarpaySlideInRight 0.5s ease-out;
                    ">
                        <i class="fas fa-rocket" style="margin-right: 10px;"></i>
                        Redirection vers la documentation...
                    </div>
                `;
                    document.body.appendChild(toast);

                    setTimeout(() => {
                        toast.remove();
                    }, 3000);
                }, 150);
            });

        // Smooth scroll pour les liens internes
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            });
        });

        // Ouvrir automatiquement la première section au chargement
        window.addEventListener("load", () => {
            setTimeout(() => {
                const firstSection = document.querySelector(".sefarpay-section-card");
                if (firstSection) {
                    firstSection.classList.add("sefarpay-expanded");
                }
            }, 1000);
        });

        // Simuler le changement d'état du plugin (pour démonstration)
        function sefarpayTogglePluginStatus() {
            const statusElement = document.querySelector(".sefarpay-plugin-status");
            const isActive = statusElement.classList.contains(
                "sefarpay-status-active"
            );

            if (isActive) {
                statusElement.classList.remove("sefarpay-status-active");
                statusElement.classList.add("sefarpay-status-inactive");
                statusElement.querySelector("span").textContent =
                    "État du plugin: Inactif";
            } else {
                statusElement.classList.remove("sefarpay-status-inactive");
                statusElement.classList.add("sefarpay-status-active");
                statusElement.querySelector("span").textContent =
                    "État du plugin: Actif";
            }
        }

        // Ajouter des styles d'animation CSS dynamiquement
        const sefarpayStyle = document.createElement("style");
        sefarpayStyle.textContent = `
            @keyframes sefarpaySlideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(sefarpayStyle);
    </script>
</body>

</html>