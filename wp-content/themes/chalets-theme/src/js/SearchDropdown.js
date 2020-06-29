$ = jQuery;

$('#sicon').click(function() {
  $('#wrapper-search').css({ display: 'block' });
  $searchForm.find('input').focus();
});
$('.close-search').click(function() {
  $('#wrapper-search').css({ display: 'none' });
  $chaletform.find('#results').css({ display: 'none' });
});
$('.default_option').toggle(
  function() {
    $('.dropdown ul').addClass('active');
  },
  function() {
    $('.dropdown ul').removeClass('active');
  }
);
$('.dropdown ul li').click(function() {
  var text = $(this).text();
  $('.default_option').text(text);
  $('.dropdown ul').removeClass('active');
});

var $chaletform = $('#chalet-form');
var $searchForm = $chaletform.find('form');
var $searchInput = $searchForm.find('input');
var $chaletresults = $chaletform.find('#results');

$searchForm.submit(function(e) {
  e.preventDefault();
  $chaletform.find('#results').empty();

  var $data = {
    results: $chaletform.find('#search-input').val(),
  };
  $.ajax({
    url: `${chaletsData.root_url}/wp-json/chalets/v1/search?`,
    data: $data,
    success: function(response) {
      for (var i = 0; i < response.length; i++) {
        console.log(response);
        var $html = `
            <div id="chaletresults" class="chaletresults">
                    <div class="chaletresults__image">
                        <img src="${response[i].image}" alt="">
                    </div>
                    <div class="chaletresults__details">
                        <div class="chaletresults__details-left">
                            <h1>${response[i].title}</h1>
                            <p>${response[i].bedrooms} bedrooms . ${response[i].bathrooms} bathrooms</p>
                        </div>
                        <div class="chaletresults__details-right">
                            <div class="price"><span>price</span>$${response[i].price}</div>
                            <button><a href="${response[i].permalink}">View Chalet</a></button>
                        </div>
                    </div>
                </div>
      `;
        $chaletform.find('#results').append($html);
        $searchForm.find('input').val('');
      }
    },
  });
});

// light box
function fancyb() {
  $('[data-fancybox]').fancybox({
    iframe: {
      css: {
        width: '100px',
      },
    },
  });
}

fancyb();
