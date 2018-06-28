class Helpers {
  constructor () {
    this.articleContentImageWidth();
  }

  articleContentImageWidth () {
    $('.article-single-content p').has('img').css('width', '100%');
  }
};

export default Helpers;
