  const formCadMsgContato = document.getElementById('form-cad-msg-contato');
  if (formCadMsgContato){
    formCadMsgContato.addEventListener("Submit", (e) => {
        e.preventDefault();
        grecaptcha.ready(function() {
            // Recuperar a site key
                var sitekey = Document.getElementById('sitekey').value;
                grecaptcha.execute('sitekey', {action: 'submit'}).then(async function(token) {
                    // Add your logic to submit to your backend server here.
                    document.getElementById('g-recaptcha-response').value = token;

                    const dadosform = new FormData(form-cad-msg-contato);
                    dadosform.append("g-recaptcha-response", token);

                    await fetch("enviar.php", {
                        method: "POST",
                        body: dadosform
                    });

                    const resposta = await dados.json();

                    if(resposta['status']){
                        formCadMsgContato.reset();
                        document.getElementById('msg'.innerHTML = resposta['msg']);
                    }else{
                        document.getElementById('msg'.innerHTML = resposta['msg']);
                    }
                });
              });
    })
  }