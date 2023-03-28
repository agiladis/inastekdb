function selectCategory() {
    let idCategory = document.querySelector("#kategori_produk").value;
    
    $.ajax({
        url: "query-id-category.php",
        method: "POST",
        data: {id: idCategory},
        success: function(data) {
            $('#debug').html(data);
        }
    })
}