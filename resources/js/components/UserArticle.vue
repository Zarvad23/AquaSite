<template>
    <div class="helpful-full">
        <div class="helpful-full-preload" v-if="false">
            Выберите новость!
        </div>
        <div class="helpful-full-content" v-if="true">
            <div class="helpful-full-content__banner">
                <span style="background-image: url('https://www.kadrof.ru/sites/default/files/illustrations/prodazha_statey.jpg')">
                    <span>
                        Пример новости
                    </span>
                </span>
            </div>
            <div class="helpful-full-content__self">
                <div class="helpful-full-content__inf">
                    <div class="helpful-full-content__date">
                        Дата создания: 26.09.02
                    </div>
                    <div class="helpful-full-content__author">
                        Автор: <b>Zarvad</b>
                    </div>
                </div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="helpful-full-content-comments">
                <h3>Комментарии</h3>
                <form>
                    <textarea name="comment" id="comment"></textarea>
                    <button type="submit">Написать</button>
                </form>
                <p>Всего комментариев (4)</p>
                <div class="helpful-full-content-comments__items">
                    <div class="helpful-full-content-comments__item">
                        <div class="helpful-full-content-comments__user">
                            <div class="helpful-full-content-comments__avatar">
                                <span style="background-image: url('https://vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png')"></span>
                            </div>
                            <div class="helpful-full-content-comments__userdata">
                                <span class="helpful-full-content-comments__nickname">Zarvad</span><span class="helpful-full-content-comments__date">26.09.02 12:22</span>
                            </div>
                        </div>
                        <div class="helpful-full-content-comments__comment">
                            Какой то комментарии бла бла бла
                        </div>
                    </div>
                    <div class="helpful-full-content-comments__item">
                        <div class="helpful-full-content-comments__user">
                            <div class="helpful-full-content-comments__avatar">
                                <span style="background-image: url('https://vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png')"></span>
                            </div>
                            <div class="helpful-full-content-comments__userdata">
                                <span class="helpful-full-content-comments__nickname">Zarvad</span><span class="helpful-full-content-comments__date">26.09.02 12:22</span>
                            </div>
                        </div>
                        <div class="helpful-full-content-comments__comment">
                            Какой то комментарии бла бла бла
                        </div>
                    </div>
                    <div class="helpful-full-content-comments__item">
                        <div class="helpful-full-content-comments__user">
                            <div class="helpful-full-content-comments__avatar">
                                <span style="background-image: url('https://vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png')"></span>
                            </div>
                            <div class="helpful-full-content-comments__userdata">
                                <span class="helpful-full-content-comments__nickname">Zarvad</span><span class="helpful-full-content-comments__date">26.09.02 12:22</span>
                            </div>
                        </div>
                        <div class="helpful-full-content-comments__comment">
                            Какой то комментарии бла бла бла
                        </div>
                    </div>
                    <div class="helpful-full-content-comments__item">
                        <div class="helpful-full-content-comments__user">
                            <div class="helpful-full-content-comments__avatar">
                                <span style="background-image: url('https://vdostavka.ru/wp-content/uploads/2019/05/no-avatar.png')"></span>
                            </div>
                            <div class="helpful-full-content-comments__userdata">
                                <span class="helpful-full-content-comments__nickname">Zarvad</span><span class="helpful-full-content-comments__date">26.09.02 12:22</span>
                            </div>
                        </div>
                        <div class="helpful-full-content-comments__comment">
                            Какой то комментарии бла бла бла
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "UserArticle"
}
</script>

<style scoped>

</style>
