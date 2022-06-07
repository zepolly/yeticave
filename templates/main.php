<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $key => $category): ?>
            <li class="promo__item promo__item--<?= $key; ?>">
                <a class="promo__link" href="pages/all-lots.html"><?= $category; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php foreach ($ads as $ad): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $ad['url']; ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $ad['category']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($ad['name']); ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= formats_price(htmlspecialchars($ad['price'])); ?></span>
                        </div>
                        <?php $res = get_time(htmlspecialchars($ad['date'])); ?>
                        <div class="lot__timer timer <?php if ($res[0] < 1) : ?>timer--fishing<?php endif; ?>">
                            <?= "$res[0] : $res[1]"; ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
