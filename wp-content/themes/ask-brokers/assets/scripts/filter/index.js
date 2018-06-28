class Filter {
  constructor () {
    this.homeArticles = $('#homeArticles');
    this.getAllArticles();
  }

  getAllArticles () {
    $.getJSON('http://ask-brokers.test/wp-json/wp/v2/posts/?per_page=50', posts => {
      this.homeArticles.html(
          `
            ${posts.map(item =>
              `
                <a href="${ item.link }" class="home-article">
                  <img src="http://via.placeholder.com/200x200" alt="" class="home-article__image">

                  <div class="home-article__content">
                    <span class="home-article__title">${ item.title.rendered }</span>

                    <p class="home-article__text">${ item.excerpt.rendered }</p>

                    <span class="home-article__source">${ item.category }</span>
                  </div>
                </a>
              `
            ).join('')}
          `
      );
    });
  }
}

export default Filter;
