<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OPNID - Portugal</title>

    <!-- CSS -->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <!-- CSS -->
  </head>

  <body>
    <header>
      <img src="./assets/img/logo.svg" alt="OPNID - Portugal" />
      <aside>
        <a href="#"
          ><img src="./assets/img/facebook-box-fill.svg" alt="facebook"
        /></a>
        <a href="#"
          ><img src="./assets/img/instagram-line.svg" alt="instagram"
        /></a>
        <a href="#"><img src="./assets/img/twitter-fill.svg" alt="twitter"/></a>
        <a href="#"
          ><img src="./assets/img/pinterest-fill.svg" alt="pinterest"
        /></a>
      </aside>
    </header>

    <div class="wrapper">
      <section>
        <h1>
          Entenda como escolher
          <br />a melhor clínica de <br />implantes dentários:
        </h1>
        <h2>
          Saiba o que deve considerar na hora de
          <br />a clínica que vai transformar a <br />sua vida e o seu sorriso.
        </h2>
        <ul>
          <li>Experts em Implantologia</li>
          <li>Recomendada pelos portugueses</li>
          <li>Acompanhamento profissional</li>
        </ul>
        <img src="./assets/img/icon-2.png" alt="2" />
      </section>

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
    </div>

    <footer>
      <img src="./assets/img/logo-white.svg" alt="SWISS Dental Services" />
      <div id="adress">
        <div id="menu">
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
      <aside>
        <a href="#"
          ><img src="./assets/img/facebook-box-fill.svg" alt="facebook"
        /></a>
        <a href="#"
          ><img src="./assets/img/instagram-line.svg" alt="instagram"
        /></a>
        <a href="#"><img src="./assets/img/twitter-fill.svg" alt="twitter"/></a>
        <a href="#"
          ><img src="./assets/img/pinterest-fill.svg" alt="pinterest"
        /></a>
      </aside>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JavaScript -->
  </body>
</html>
