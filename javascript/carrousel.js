(function(){
   /**
  * Carrousel animé 
  * Ce carrousel utilise les images d'une galerie d'images
  * Le conteneur de la galerie est accessible à partir de la classe «.galerie»
  * Le conteneur du carrousel est accessible à partir de la classe «.boite__carrousel»
  * 
  *  */ 
    console.log("vive la boîte carrousel")
    /* Le conteneur de la gallerie */
    let boite__carrousel = document.querySelector(".boite__carrousel")
     /* La collection des images de la galerie */
    let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
    console.log("galerie__img.length = " + galerie__img.length)
     /* le bouton de fermeture du carrousel */
    let boite__carrousel__ferme = document.querySelector(".boite__carrousel__ferme")
    /* le conteneur des bouton de navigation du carrousel */
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")

    /**
    * 
    * Écouteur pour fermer la fenêtre 
    * 
    */ 
    boite__carrousel__ferme.addEventListener('mousedown', function(){
      boite__carrousel.classList.remove('boite__carrousel--ouvrir')
    })
    /**
 * parcourir l'ensemble des éléments de la galerie pour créer le carrousel
 *  
 * */ 
    let image = document.createElement('img')
    boite__carrousel.appendChild(image)
    //image.setAttribute("scr", "#")
    image.classList.add('boite__carrousel__img')
  let indexe = 0;

    for (const img of galerie__img) {
      let bouton = document.createElement('button')
      bouton.dataset.indexe = indexe++
      boite__carrousel__navigation.append(bouton)
    /* Ajout d'un écouteur sur chacun des boutons de navigation de notre carrousel */
      bouton.addEventListener('mousedown', function(){
        console.log(this.dataset.indexe)
        image.setAttribute('src', galerie__img[this.dataset.indexe].getAttribute('src'))
      }) // fin de l'écoute de navigation

      /* Ajout d'un écouteur sur chacune des images de la galerie */
        img.addEventListener('mousedown',function(){
          boite__carrousel.classList.add('boite__carrousel--ouvrir')
          console.log(this.getAttribute('src'))
          let source = this.getAttribute('src')
          image.setAttribute('src', source) 
        })
    }
  })()