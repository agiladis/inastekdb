function selectCategory() {
    let idCategory = document.querySelector("#kategori-produk").value;
    let kodeBatch = document.querySelector("#batch-produksi").value;
    
    console.log(idCategory);

    $.ajax({
        url: "include/query-id-category.php",
        method: "POST",
        data: {
            id_kategori: idCategory, 
            kode_batch: kodeBatch,
        },
        success: function(data) {
            // $('#kode-nomor-container').html(data);
            $('#conditional-form').html(data);
        }
    })
}