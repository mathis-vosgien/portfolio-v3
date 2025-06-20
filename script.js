document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("load", () => {
        const loader = document.getElementById("loader");
        if (loader) {
            loader.style.opacity = "0";
            setTimeout(() => {
                loader.style.display = "none";
            }, 1500);
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
  // Sélectionne tous les boutons d'ouverture
  const openButtons = document.querySelectorAll(".openModal");
  // Sélectionne toutes les modales
  const modals = document.querySelectorAll(".modal");
  // Sélectionne tous les boutons de fermeture
  const closeButtons = document.querySelectorAll(".close");

  const header = document.getElementById('header');

  // Ouvrir la modale correspondante
  openButtons.forEach(button => {
      button.addEventListener("click", () => {
          const modalId = button.getAttribute("data-modal");
          const modal = document.getElementById(modalId);
          if (modal) {
              modal.style.display = "block";
              header.style.display = "none";
              document.body.classList.add("no-scroll");
          }
      });
  });

  // Fermer la modale lorsqu'on clique sur "X"
  closeButtons.forEach(button => {
      button.addEventListener("click", () => {
          button.closest(".modal").style.display = "none";
          header.style.display = "block";
          document.body.classList.remove("no-scroll");
      });
  });
  
  // Fermer la modale en cliquant en dehors du contenu
  window.addEventListener("click", (event) => {
      modals.forEach(modal => {
          if (event.target === modal) {
              modal.style.display = "none";
              header.style.display = "block";
              document.body.classList.remove("no-scroll");
          }
      });
  });

});


