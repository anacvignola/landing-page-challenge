$(".form").submit(function(e) {
  e.preventDefault();
  $.ajax({
    url: "send.php",
    type: "POST",
    data: $(".form").serialize(),
    success: function(response) {
      document.getElementById("formebook").reset();
      window.location.href =
        "https://pnid.pt/nutricao/fale-com-experts/successPage.html";
      window.open(
        "./assets/docs/implantes-dentarios-8-fatores-para-escolher-a-melhor-clinica-ebook-PNID.pdf",
        "_blank"
      );
    },
    error: function(xhr, status, error) {
      alert(xhr.responseText);
    }
  });
  return false;
});
