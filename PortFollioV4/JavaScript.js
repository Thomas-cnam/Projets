
function sendEmail(event) {
  event.preventDefault(); // empêcher l'action par défaut du formulaire

  // Récupérer les valeurs des champs email, sujet et corps
  const email = document.getElementById('email').value;
  const sujet = document.getElementById('sujet').value;
  const corps = document.getElementById('corps').value;

  // Créer le lien mailto avec les valeurs des champs email, sujet et corps
  const link = 'mailto:' + email + '?subject=' + encodeURIComponent(sujet) + '&body=' + encodeURIComponent(corps);

  // Ouvrir l'application mail avec le lien mailto
  window.location.href = link;
}

  

  
  
  
  
  
  

  
  