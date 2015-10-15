<section class="content" data-controller="Controllers/SearchController" data-bind="if: visible">
    <article class="search">
        <input type="text" data-bind="value: query, valueUpdate: 'input'" placeholder="Поиск по участникам" />
    </article>

    <!--ko ifnot: users().length-->
        <!--ko if: query().trim().length > 0 -->
            <h1>По вашему запросу ничего не найдено</h1>
        <!--/ko-->
        <!--ko ifnot: query().trim().length > 0 -->
            <h1>Введите имя пользователя</h1>
        <!--/ko-->
    <!--/ko-->

    <section class="users" data-bind="foreach: users">

        <article class="user" data-bind="click: $parent.load">
            <img src="https://github.com/identicons/jasonlong.png" alt="User" data-bind="attr: {
                    src: avatar,
                    alt: name
                }" />

            <span class="login" data-bind="html: highlight.login">User Login</span>

            <span class="name" data-bind="html: highlight.name">User Name</span>

            <nav>
                <a href="http://laravel.su/users" target="_blank"
                   data-bind="attr: {href: 'http://laravel.su/users?query=' + login}" >
                    На Laravel.su
                </a>

                <span class="separator">&nbsp;</span>

                <a href="https://gitter.im" target="_blank" data-bind="attr: {href: 'https://gitter.im' + url }">
                    Личное сообщение
                </a>
            </nav>
        </article>

    </section>
</section>