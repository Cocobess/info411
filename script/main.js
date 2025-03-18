axios.get("include/recuperer_fruit").then(response => {
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
    
    axios.get("include/recuperer_fruit").then( response => {

    response.data.forEach( fruit => {
        let div = create("div",fruitContainer)
        create("h2", div, fruit.nom)   
        let ul = create("ul", div)   
        create("li", ul, "Poids : " + fruit.poid + " g.")             
        create("li", ul, "Taille : " + fruit.taille + " cm.")             

     
    })

})
}