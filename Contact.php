<section id="Contact">
  <div class="contactH-wrapper">
    <h1 class="contactH">Nous Contacter</h1>
  </div>
  <div class="container-fluid ">
    <div class="container p-5 my-4">
      <div class="row g-4">
        <div class="col-12 text-center">
          <h2 class="contacten">
            Pour en savoir plus,<br>
            rejoignez <strong class="c-next">Next</strong>
          </h2>
        </div>
        <div class="col-12 col-md-7 contact-form">
          <form method="POST" action="contact_traitement.php" class="p-4 p-md-5 border rounded-3 bg-white">
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <input type="text" name="nom" class="form-control" placeholder="Nom">
              </div>
              <div class="col-md-6">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom">
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-6">
                <input type="text" name="telephone" class="form-control" placeholder="Numéro">
              </div>
            </div>
            <div class="mb-3">
              <input type="text" name="sujet" class="form-control" placeholder="Sujet">
            </div>
            <div class="mb-3">
              <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn contact-btn d-flex align-items-center justify-content-center gap-3">
              <span class="btn-text">
                Envoyer le message
              </span>
              <span class="btn-icon" aria-hidden="true"> &gt;
              </span>
            </button>
          </form>
        </div>
        <div class="col-12 col-md-5 contact-detail">
          <div class="contact-block">
            <h4>Adresse</h4>
            <p>
              XX Rue Du Pont Neuf<br>
              Paris 75XXX
            </p>
          </div>
          <div class="contact-block">
            <h4>Contact</h4>
            <p>
              Numéro : +33 X XX XX XX XX<br>
              Email : next@email.com
            </p>
          </div>
          <div class="contact-block">
            <h4>Horaires</h4>
            <p>
              Lundi – Vendredi<br>
              10:00 – 18:00
            </p>
          </div>
          <div class="contact-block">
            <h4>Restons Connectés</h4>
            <ul class="social-links">
              <li>
                <a href="#" aria-label="Facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" aria-label="Instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" aria-label="LinkedIn">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li>
                <a href="#" aria-label="X Twitter">
                  <i class="fab fa-x-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-image-full"></div>
  <div class="newsletter-wrapper">
    <div class="contebody py-5">
      <div class="row align-items-center">
        <div class="col-12 col-lg-5">
          <h2 class="newsletter-title">
            Abonnez-vous à la newsletter
          </h2>
        </div>
        <div class="col-12 col-lg-7">
          <form method="POST" action="newsletter_traitement.php" class="newsletter-form d-flex">
            <input type="email" name="email" class="form-control" placeholder="Entrez votre email">
            <button type="submit" class="btn newsletter-btn"></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>