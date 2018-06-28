class Search {
  constructor () {
    if ($(window).width() > 767) {
      this.searchField = $('#searchField');
      this.searchLoader = $('#searchLoader');
      this.searchResults = $('#searchResults');
    } else {
      this.searchField = $('#searchField-mobile');
      this.searchLoader = $('#searchLoader-mobile');
      this.searchResults = $('#searchResults-mobile');
    }
    this.events();
    this.typingTimer;
    this.prevValue;
  }

  events () {
    this.searchField.on('keyup', () => this.typingLogic());
  }

  typingLogic () {
    if(this.searchField.val() !== this.prevValue) {
      clearTimeout(this.typingTimer);

      if (this.searchField.val()) {
        this.searchLoader.show();
        this.typingTimer = setTimeout(() => {
          this.getSearchResults();
          this.searchResults.show();
          this.searchLoader.hide();
        }, 1000);
      } else {
        this.searchResults.hide();
        this.searchLoader.hide();
      }
    }

    this.prevValue = this.searchField.val();
  }

  getSearchResults () {
    $.getJSON('http://ask-brokers.test/wp-json/wp/v2/posts?search=' + this.searchField.val(), posts => {
      this.searchResults.html(
        `
        ${posts.map(item =>
            `
              <a href="${ item.link }" class="search__article">
                <div class="search__text">${ item.title.rendered }</div>
                <span class="search__date">${ new Date(item.date).toLocaleDateString("en-GB") }</span>
              </a>
            `
          ).join('')}
        `
      );
    });
  }
}

export default Search;
