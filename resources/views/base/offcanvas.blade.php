<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
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
    </div>
</div>
