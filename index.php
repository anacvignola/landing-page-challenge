<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="Programa Nacional de Implantes dentários | OPNID - Portugal"
    />
    <meta
      name="keywords"
      content="Clínica, implantes, odontologia, dentes, dentários, sorriso, a melhor clínica"
    />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="OPNID - Portugal" />
    <link rel="icon" href="./assets/images/favicon/favicon.ico" />
    <title>OPNID - Portugal</title>

    <!-- JS -->
    <script
      src="https://kit.fontawesome.com/e65d5d5102.js"
      crossorigin="anonymous"
    ></script>
    <!-- JS -->

    <!-- CSS -->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <!-- CSS -->
  </head>

  <body>
    <header>
      <img
        class="logo-mobile"
        src="./assets/images/favicon/ms-icon-70x70.png"
        alt="Programa Nacional de Implantes dentários | OPNID - Portugal"
      />
      <img
        class="logo-desktop"
        src="./assets/images/logo.svg"
        alt="Programa Nacional de Implantes dentários | OPNID - Portugal"
      />
      <aside class="social">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </aside>
    </header>

    <div class="wrapper">
      <section>
        <h1>
          Entenda como escolher a melhor clínica de implantes dentários:
        </h1>
        <h2>
          Saiba o que deve considerar na hora de a clínica que vai transformar a
          sua vida e o seu sorriso.
        </h2>
        <ul>
          <li>Experts em Implantologia</li>
          <li>Recomendada pelos portugueses</li>
          <li>Acompanhamento profissional</li>
        </ul>
        <img src="./assets/images/icon-2.png" alt="2" />
      </section>

      <section class="form">
        <form class="form" id="formebook">
          <span
            >Preencha seus dados e descarregue gratuitamente o nosso ebook</span
          >
          <input name="name" id="name" placeholder="Nome*" required />
          <input
            name="email"
            id="email"
            type="email"
            placeholder="Email*"
            required
          />
          <select name="clinic" id="clinic" required>
            <option value="" disabled selected hidden
              >Clínica mais próxima de si*</option
            >
            <option value="Lisboa">Lisboa</option>
            <option value="Porto">Porto</option>
          </select>
          <div id="phone">
            <select name="ddd" id="ddd">
              <option value="PT">(+351)</option>
              <option value="IE">(+353)</option>
            </select>
            <input
              name="mobile"
              id="mobile"
              type="tel"
              placeholder="Telemóvel*"
              required
            />
          </div>
          <div id="termos">
            <input name="terms" id="terms" type="checkbox" required />
            <p>Li e aceito os termos e condições*</p>
          </div>
          <button type="submit">DESCARREGUE O NOSSO EBOOK</button>
        </form>
      </section>
    </div>

    <footer>
      <img src="./assets/images/logo-white.svg" alt="SWISS Dental Services" />
      <div class="adress">
        <div class="menu">
          <a href="#">Institucional</a>
          <a href="#">Clínicas</a>
          <a href="#">Tratamentos</a>
          <a href="#">Media</a>
          <a href="#">A nosa equipa</a>
          <a href="#">Contactos</a>
        </div>
        <p>© Swiss Dental Services. Todos os direitos reservados.</p>
        <p>
          SDS - Portugal Sociedade Suíça de Serviços Odontológicos, Lda. Rua
          Santos Pousada, 441 – Sala 106, 4000-486 Porto Registo na ERS nº
          22814.
          <br />Registo de estabelecimento prestador de saúde nº E135067.
          Licença de funcionamento nº 13744/2017.
        </p>
      </div>
      <aside class="social-footer">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
      </aside>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JavaScript -->
  </body>
</html>
