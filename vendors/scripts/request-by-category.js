function selectCategory() {
  let idBatch = document.querySelector("#batch_produksi").value;
  let idCategory = document.querySelector("#kategori_produk").value;

  $.ajax({
    url: "include/query-id-category.php",
    method: "POST",
    data: { id: idCategory, id_batch: idBatch },
    success: function (data) {
      $("#debug").html(data);
    },
  });
}

function selectPemesan() {
  let idPemesan = document.querySelector("#id_pemesan").value;

  $.ajax({
    url: "include/query-id-pemesan.php",
    method: "POST",
    data: { id_pemesan: idPemesan },
    success: function (data) {
      $("#nomor_batch").html(data);
    },
  });
}
