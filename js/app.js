function showPizzaData() {
  $.getJSON('json/pizza.json', function (data) {
    const menu = data.menu;
    $.each(menu, function (indexInArray, valueOfElement) {
      $('#list-menu').append(
        `<div class="col-md-3"><div class="card"><img src="img/menu/${valueOfElement.gambar}" class="card-img-top" alt="beef-lasagna" /><div class="card-body"><h5 class="card-title">${valueOfElement.nama}</h5><p class="card-text">${valueOfElement.deskripsi}</p><h6>Rp. ${valueOfElement.harga}</h6><a href="#" class="btn btn-dark d-block">Buy Now</a></div></div></div>`
      );
    });
  });
}

showPizzaData();

$('.nav-link').on('click', function () {
  const navLink = $('.nav-link');
  navLink.removeClass('active');
  $(this).addClass('active');

  const getKategori = $(this).html();
  $('h3').html(getKategori);
  if (getKategori == 'All Menu') {
    showPizzaData();
    return;
  }

  $.getJSON('json/pizza.json', function (data) {
    const menu = data.menu;
    let content = '';

    $.each(menu, function (indexInArray, valueOfElement) {
      if (valueOfElement.kategori == getKategori.toLowerCase()) {
        content += `<div class="col-md-3"><div class="card"><img src="img/menu/${valueOfElement.gambar}" class="card-img-top" alt="beef-lasagna" /><div class="card-body"><h5 class="card-title">${valueOfElement.nama}</h5><p class="card-text">${valueOfElement.deskripsi}</p><h6>Rp. ${valueOfElement.harga}</h6><a href="#" class="btn btn-dark d-block">Buy Now</a></div></div></div>`;
      }
    });

    $('#list-menu').html(content);
  });
});
