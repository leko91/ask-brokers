<div class="fresh-reviews">
    <div class="fresh-reviews__title">
        <i class="material-icons">new_releases</i>
        Fresh reviews
    </div>

    <div class="fresh-reviews__articles">
        <?php for($i = 0; $i < 3; ++$i): ?>
            <div class="fresh-reviews__article">
                <a href="#" class="fresh-reviews__name">ETrade</a>

                <p class="fresh-reviews__text">At E*TRADE, you're in full control of your financial future.</p>

                <div class="fresh-reviews__bottom">
                    <div class="fresh-reviews__stars">
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                    </div>

                    <span class="fresh-reviews__date">05/12</span>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
