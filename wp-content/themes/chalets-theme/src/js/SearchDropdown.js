$ = jQuery;

$('#sicon').click(function() {
  // $('#wrapper-search').css({ display: 'block' });
  $searchForm.find('input').focus();
  const tl = gsap.timeline();
  tl.fromTo(
    '.wrapper-search',
    { css: { display: 'none', opacity: 0, y: -100 } },
    { css: { display: 'block', opacity: 1, y: 0 } }
  );
});
$('.form-btn').click(function(e) {
  e.preventDefault();
  // $('#wrapper-search').css({ display: 'block' });
  $searchForm.find('input').focus();
  const tl = gsap.timeline();
  tl.fromTo(
    '.wrapper-search',
    { css: { display: 'none', opacity: 0, y: -100 } },
    { css: { display: 'block', opacity: 1, y: 0 } }
  );
});
$('.close-search').click(function() {
  const tl = gsap.timeline();
  tl.fromTo(
    '.wrapper-search',
    { css: { display: 'block', opacity: 1, y: 0 } },
    { css: { display: 'none', opacity: 0, y: -100 } }
  );

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

  const getChalets = async () => {
    const results = $chaletform.find('#search-input').val();
    const response = await axios.get(
      `${chaletsData.root_url}/wp-json/chalets/v1/search?&results=${results}`
    );
    const chalets = response.data;
    const chaletsresults = chalets.map(
      (chalet) =>
        `
            <div id="chaletresults" class="chaletresults">
                    <div class="chaletresults__image">
                        <img src="${chalet.image}" alt="">
                    </div>
                    <div class="chaletresults__details">
                        <div class="chaletresults__details-left">
                            <h1>${chalet.title}</h1>
                            <p>${chalet.bedrooms} bedrooms . ${chalet.bathrooms} bathrooms</p>
                        </div>
                        <div class="chaletresults__details-right">
                            <div class="price"><span>price</span>$${chalet.price}</div>
                            <button><a href="${chalet.permalink}">View Chalet</a></button>
                        </div>
                    </div>
                </div>
      `
    );
    $chaletform.find('#results').append(chaletsresults);
    $searchForm.find('input').val('');
  };

  getChalets();
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
