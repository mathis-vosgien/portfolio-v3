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

document.addEventListener("DOMContentLoaded", () => {

const sections = document.querySelectorAll("section");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show");
        }
    });
}, { threshold: 0.05 });

sections.forEach(section => {
    observer.observe(section);
});
});


// Fonction pour vérifier si l'élément est visible avec un léger décalage
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    // La condition suivante permet de déclencher l'animation un peu avant
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour ajouter la classe 'show' à l'élément visible
function revealElementsOnScroll() {
    // Vérifier si la largeur de l'écran est supérieure ou égale à 768px
    if (window.innerWidth >= 768) {
        const timelineItems = document.querySelectorAll('.timeline-item');
        timelineItems.forEach(item => {
            if (isElementInViewport(item)) {
                item.classList.add('show');
            }
        });
    }
}

// Écouter l'événement de scroll
window.addEventListener('scroll', revealElementsOnScroll);

// Appeler la fonction une fois au chargement pour vérifier les éléments visibles dès le début
document.addEventListener('DOMContentLoaded', revealElementsOnScroll);
