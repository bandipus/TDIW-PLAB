async function CarregaCategories(){
    var resposta = await fetch("index.php?action=categories"); 
    var respostaTxt = await resposta.text();
    document.getElementById("container").innerHTML = respostaTxt;
}

async function CarregaProductes(categoria){
    var resposta = await fetch("index.php?action=productes&category_id="+categoria); 
    var respostaTxt = await resposta.text();
    document.getElementById("container").innerHTML = respostaTxt;
}

async function CarregaDetall(producte){
    var resposta = await fetch("index.php?action=product_details&product_id="+producte); 
    var respostaTxt = await resposta.text();
    document.getElementById("container").innerHTML = respostaTxt;
}

async function AddCart(id, nom, preu, quantity, img, categoriaId) {
    var url = "index.php?action=add" +
                "&product_id=" + encodeURIComponent(id) +
                "&product_nom=" + encodeURIComponent(nom) +
                "&product_preu=" + encodeURIComponent(preu) +
                "&product_quantity=" + encodeURIComponent(quantity) +
                "&product_img=" + encodeURIComponent(img) +
                "&category_id=" + encodeURIComponent(categoriaId);

    var resposta = await fetch(url);
    var respostaTxt = await resposta.text();
    document.getElementById("tool-bar").innerHTML = respostaTxt;
}


async function serch(key){
    var resposta = await fetch("index.php?action=search&busqueda="+key); 
    var respostaTxt = await resposta.text();
    document.getElementById("container").innerHTML = respostaTxt;
}





