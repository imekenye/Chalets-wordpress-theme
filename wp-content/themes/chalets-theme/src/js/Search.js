(function($) {
  // class Search {
  //   // create/initiate object
  //   constructor() {
  //     //   properties about the object
  //     this.addSearchHTML();
  //     this.resultsDiv = $('#search-overlay__results');
  //     this.openButton = $('.js-search-trigger');
  //     this.closeButton = $('.search-overlay__close');
  //     this.searchOverlay = $('.search-overlay');
  //     this.searchField = $('#search-term');
  //     this.previousValue;
  //     this.events();
  //     this.isSpinnerVisible = false;
  //     this.typingTimer;
  //   }
  //   // events
  //   events() {
  //     this.openButton.on('click', this.openOverlay.bind(this));
  //     this.closeButton.on('click', this.closeOverlay.bind(this));
  //     $(document).on('keydown', this.keyPressDispatcher.bind(this));
  //     this.searchField.on('keyup', this.typingLogic.bind(this));
  //   }
  //   // methods
  //   typingLogic() {
  //     if (this.searchField.val() != this.previousValue) {
  //       clearTimeout(this.typingTimer);
  //       if (this.searchField.val()) {
  //         if (!this.isSpinnerVisible) {
  //           this.resultsDiv.html(
  //             '<div class="spinner-loader"><div></div><div></div><div></div></div>'
  //           );
  //           this.isSpinnerVisible = true;
  //         }
  //         this.typingTimer = setTimeout(this.getResults, 2000);
  //       } else {
  //         this.resultsDiv.html('');
  //         this.isSpinnerVisible = false;
  //       }
  //     }
  //     this.previousValue = this.searchField.val();
  //   }
  //   getResults = () => {
  //     $.getJSON(
  //       `${
  //         chaletsData.root_url
  //       }/wp-json/chalets/v1/search?results=${this.searchField.val()}`,
  //       (chalets) => {
  //         this.resultsDiv.html(`
  //       <h2>Chalets</h2>
  //       <hr>
  //       ${
  //         chalets.length
  //           ? '<ul class="chalet-list">'
  //           : '<p>No chalets found!</p>'
  //       }
  //       ${chalets
  //         .map(
  //           (chalet) =>
  //             `<li >
  //             <a href="${chalet.permalink}">${chalet.title}</a>
  //             </li>`
  //         )
  //         .join('')}
  //      ${chalets.length ? '</ul>' : ''}
  //       `);
  //         this.isSpinnerVisible = false;
  //       }
  //     );
  //   };
  //   keyPressDispatcher(e) {
  //     if (e.keyCode == 83 && $('input.textarea').is(':focus'))
  //       return this.openOverlay();
  //     if (e.keyCode == 27) return this.closeOverlay();
  //   }
  //   openOverlay() {
  //     this.searchOverlay.addClass('search-overlay--active');
  //     this.searchOverlay.removeClass('search-overlay--none');
  //     jQuery('body').addClass('body-no-scroll');
  //     this.searchField.val('');
  //     setTimeout(() => {
  //       this.searchField.focus();
  //     }, 303);
  //   }
  //   closeOverlay() {
  //     this.searchOverlay.addClass('search-overlay--none');
  //     this.searchOverlay.removeClass('search-overlay--active');
  //     $('body').removeClass('body-no-scroll');
  //   }
  //   addSearchHTML() {
  //     $('body').append(`
  //     <div class="search-overlay ">
  //       <div class="search-overlay__close">Close</div>
  //       <div class="search-overlay__top">
  //           <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
  //       </div>
  //       <div id="search-overlay__results" class="search-overlay__results"></div>
  //     </div>
  //   `);
  //   }
  // }
  // new Search();
})(jQuery);
