  const formCadMsgContato = document.getElementById("form-contato");

  if (formCadMsgContato){
    
    formCadMsgContato.addEventListener("submit", (e) => {
        e.preventDefault();       
        grecaptcha.ready(function() {
            // Recuperar a site key
                var sitekey = document.getElementById('sitekey').value;
                grecaptcha.execute(sitekey, {action: 'submit'}).then(async function(token) {
                    // Add your logic to submit to your backend server here.
                    document.getElementById('g-recaptcha-response').value = token;

                    const dadosForm = new FormData(formCadMsgContato);
                    dadosForm.append("g-recaptcha-response", token);

                    const dados = await fetch("enviar.php", {
                        method: "POST",
                        body: dadosForm
                    });

                    formCadMsgContato.reset();
                    window.location.href = "index.html";

                    // const resposta = await dados.json();

                    // if(resposta['status']){
                    //     formCadMsgContato.reset();
                    //     document.getElementById('msg'.innerHTML = resposta['msg']);
                    // }else{
                    //     document.getElementById('msg'.innerHTML = resposta['msg']);
                    // }
                });
              });
    });
}