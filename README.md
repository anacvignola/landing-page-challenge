# landing-page-challenge

Um desafio de uma simples landing page, com envio de e-mail, e download de um Ebook, mais detalhes [aqui](/assets/docs/readme.pdf).

Para envio de e-mail utilizei a bibliote PHPMailer.
Para download do ebook, estou abrindo o pdf em nova aba.

 Primeiro clone o repositório com o comando
                
      git clone

* Em seguida, edite o arquivo "send.php" com seus dados de email nas linhas mostradas abaixo.

      $mail->Host = 'email.domain.com';                    // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                              // Enable SMTP authentication
      $mail->Username = 'email@domain.com';                // SMTP username
      $mail->Password = 'password';                        // SMTP password
      $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                   // TCP port to connect to


* Para testar você pode usar [XAMPP](https://www.apachefriends.org/pt_br/index.html), coloque o projeto na pasta '\xampp\htdocs'.

* Execute o XAMPP e inicie no Apache.

* Agora abra o navegador e vá para

      'localhost/landing-page-challenge'.

<img alt="landing-page" src="/assets/images/layout-teste-dev.png" />


