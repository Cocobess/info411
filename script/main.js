axios.get("include/recuperer_fruit.php").then(response => {
    afficher_fruit()
})


function create(tag, container, text=null) {
    const element = document.createElement(tag)
    if (text)
        element.innerText = text
    container.appendChild(element)
    return element
}

const fruitContainer = document.querySelector("#liste_fruit")

function afficher_fruit(){
    
    axios.get("include/recuperer_fruit.php").then( response => {

    response.data.forEach( fruit => {
        let div = create("div",fruitContainer)

        let nom = create("h2", div, fruit.nom)  
        nom.classList.add("nom")
        let ul = create("ul", div)
        ul.classList.add("description")
   
        create("li", ul, "Poids : " + fruit.poid + " g.")             
        create("li", ul, "Taille : " + fruit.taille + " cm.")             

     
    })

})
}