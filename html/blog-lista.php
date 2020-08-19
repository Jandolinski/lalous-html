<?php include('header.php'); ?>

<div class="container">
    <div class="blog">
        <div class="blog__top">
            <div class="okruszki">
                <!-- masz je gotowe więc nie piszę -->
            </div>

            <div class="blog__controls">
                <label for="blog_categories">
                    POKAŻ KATEGORIĘ
                </label>
                <div class="select_wrapper">
                    <select name="blog_categories" id="blog_categories">
                        <option value="all" disabled selected>Wszystkie wpisy</option>
                        <option value="Kat_1">Kategoria 1</option>
                        <option value="Kat_2">Kategoria 2</option>
                    </select>
                </div>
                <label for="blog_time">
                    SORTUJ
                </label>
                <div class="select_wrapper">
                    <select name="blog_time" id="blog_time">
                        <option value="newest" selected>Od najnowszych</option>
                        <option value="oldest">Od najstarszych</option>
                    </select>
                </div>
                <label for="blog_show">
                    POKAŻ
                </label>
                <div class="select_wrapper">
                    <select name="blog_show" id="blog_show">
                        <option value="16" selected>16</option>
                        <option value="24">24</option>
                    </select>
                </div>
                <div class="blog__pagination pagination">
                    <button class="pagination__left">
                        < </button> <div class="pagination__number">
                            1
                </div>
                <button class="pagination__right">
                    >
                </button>
            </div>
        </div>
    </div>

</div>

<div class="blog__center">
    <div class="posts">
        <?php for ($i = 1; $i <= 16; $i++) : ?>
            <div class="posts__item post">

            </div>
        <?php endfor; ?>
    </div>
</div>

<div class="blog__bottom">
    <div class="okruszki">
        <!-- masz je gotowe więc nie piszę -->
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>