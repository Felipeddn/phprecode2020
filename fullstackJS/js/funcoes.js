// parecido com o professor Beto

// funções
function exibirCategoria(categoria) {
    // alert(categoria) 
    let produtos = document.getElementsByClassName('box_produto')
    // console.log(produtos)
    for (var posicao = 0; posicao < produtos.length; posicao++) {
        // console.log(produtos[posicao].id)
        if (categoria == produtos[posicao].id) {
            produtos[posicao].style = "display: inline-block"
        } else {
            produtos[posicao].style = "display: none"
        }
    }
}

let exibirTodos = () => {
    let produtos = document.getElementsByClassName('box_produto')
   
    for (var posicao = 0; posicao < produtos.length; posicao++) {
        produtos[posicao].style = "display: inline-block"
    }
}

let destaque = (imagem) => {
    // console.log(imagem)
    if(imagem.height == 320)
        imagem.style.height = "160px";
    else
    imagem.style.height = "320px";
}