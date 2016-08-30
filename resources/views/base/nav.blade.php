<nav class="uk-navbar uk-margin-large-bottom">
    <a class="uk-navbar-brand uk-hidden-small" href="/">l53uikit</a>
    <ul class="uk-navbar-nav uk-hidden-small">
        <li class="{{ (Request::is('/') ? 'uk-active' : '') }}">
            <a href="/">Frontpage</a>
        </li>
        <li class="{{ (Request::is('portfolio') ? 'uk-active' : '') }}">
            <a href="/portfolio">Portfolio</a>
        </li>
        <li class="{{ (Request::is('blog') || Request::is('post') ? 'uk-active' : '') }}">
            <a href="/blog">Blog</a>
        </li>
        <li class="{{ (Request::is('documentation') ? 'uk-active' : '') }}">
            <a href="/documentation">Documentation</a>
        </li>
        <li class="{{ (Request::is('contact') ? 'uk-active' : '') }}">
            <a href="/contact">Contact</a>
        </li>
        <li class="{{ (Request::is('login') ? 'uk-active' : '') }}">
            <a href="/login">Login</a>
        </li>
    </ul>
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small">l35uikit</div>
</nav>
