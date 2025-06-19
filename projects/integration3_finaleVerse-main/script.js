document.addEventListener('DOMContentLoaded', function () {
    const carouselWrapperBloc1 = document.getElementById('carouselWrapperBloc1');
    const backBloc1 = document.getElementById('backBloc1');
    const nextBloc1 = document.getElementById('nextBloc1');
  
    let currentIndex = 0;
  
    function updateCarousel() {
      const translateValue = -currentIndex * 554;
      carouselWrapperBloc1.style.transform = `translateX(${translateValue}px)`;
    }
  
    function nextSlide() {
      if (currentIndex < 6) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
      updateCarousel();
    }
  
    function prevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = 6;
      }
      updateCarousel();
    }
    //CAROUSSEL NUMER0 2
    backBloc1.addEventListener('click', nextSlide);
    nextBloc1.addEventListener('click', prevSlide);
    
  });

  document.addEventListener('DOMContentLoaded', function () {
    const diaporamaContainer = document.getElementById('carouselContainerBloc4');
    const nextBloc4 = document.getElementById('nextBloc4');
    const backBloc4 = document.getElementById('backBloc4');

    let currentIndex2 = 0;

    function showSlide(index) {
        const diaporamaItems = diaporamaContainer.getElementsByClassName('carouselItemBloc4');
        for (let i = 0; i < diaporamaItems.length; i++) {
            diaporamaItems[i].style.display = i === index ? 'flex' : 'none';
        }
    }

    function nextSlide() {
        if (currentIndex2 < diaporamaContainer.children.length - 1) {
          currentIndex2++;
        } else {
          currentIndex2 = 0;
        }
        showSlide(currentIndex2);
    }

    function prevSlide() {
        if (currentIndex2 > 0) {
          currentIndex2--;
        } else {
          currentIndex2 = diaporamaContainer.children.length - 1;
        }
        showSlide(currentIndex2);
    }

    showSlide(currentIndex2);

    nextBloc4.addEventListener('click', prevSlide);
    backBloc4.addEventListener('click', nextSlide);
});

// script.js
// script.js
const thumbnails = document.querySelectorAll('.thumbnail');
const mainImage = document.getElementById('main-image');

// Fonction pour changer l'image principale
function changeMainImage(event) {
    const newImageSrc = event.target.dataset.large;
    
    // Ajouter une classe d'animation avant de changer l'image
    mainImage.classList.add('image-fade');

    // Attendre la fin de l'animation avant de changer l'image
    setTimeout(() => {
        mainImage.src = newImageSrc; // Changer l'image principale
        mainImage.classList.remove('image-fade'); // Enlever l'animation de disparition
    }, 500); // Délai de 500ms pour que l'animation de disparition se termine
}

// Attacher un événement de clic à chaque miniature
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', changeMainImage);
});

const toggleButton = document.getElementById('toggle-button'); // Bouton
const productDescription = document.getElementById('product-description'); // Paragraphe

toggleButton.addEventListener('click', () => {
    // Vérifie si la classe "hidden" est présente
    if (productDescription.classList.contains('hidden')) {
        productDescription.classList.remove('hidden'); // Affiche le texte
        productDescription.style.display = 'block'; // En cas de problème avec CSS
        toggleButton.textContent = 'Hide Description'; // Change le texte du bouton
    } else {
        productDescription.classList.add('hidden'); // Masque le texte
        productDescription.style.display = 'none'; // En cas de problème avec CSS
        toggleButton.textContent = 'Product Description'; // Change le texte du bouton
    }
});
