$ = jQuery;

var $chaletsearch = $('#chalet-search');

var $searchform = $chaletsearch.find('form');
var $searchresults = $chaletsearch.find('#listingcard');

$searchform.submit(function(e) {
  e.preventDefault();

  var $data = {
    action: 'chalet_search',
    price: $chaletsearch.find('#price').val(),
    no_of_bedrooms: $chaletsearch.find('#bedrooms').val(),
    no_of_bathrooms: $chaletsearch.find('#bathrooms').val(),
  };
  console.log($data);

  $.ajax({
    url: ajax_url,
    data: $data,
    success: function(response) {
      $chaletsearch.find('#listing-card').empty();

      for (var i = 0; i < response.length; i++) {
        var $html = `
        <div class="listing__card">

        <div class="listing__card-image">
            <div class="img-overlay"></div>
            <div class="f-img-1">
                <img src="${response[i].image}">
            </div>
        </div>
        <div class="listing__card-price">
            <span>$${response[i].price}</span>
            <div class="tag">${response[i].status[0].name}</div>
        </div>
        <div class="listing__card-body">
            <!-- <h3><?php the_title()?></h3> -->
            <h3>${response[i].title}</h3>
            <p>${response[i].location}</p>
            <span>${response[i].bedroom} bd | ${response[i].bathroom} ba |
                ${response[i].sqft} sqft</span>
        </div>
        </div>
          `;
        // $('#search-results').empty();
        $('#search-results')
          .find('#listing-card')
          .empty()
          .append($html);
      }
    },
  });
});
