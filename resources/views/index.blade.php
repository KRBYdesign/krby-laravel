<x-layout.mainLayout>

    <section id="index-hero" class="full-screen">
        <img class="background-img" alt="" src="{{ asset('img/backgrounds/shelby_cobra_la_canyons.webp') }}"/>

        <div class="content">
            <h1 class="main-title">Kyle Ross Beasley</h1>

            <!-- Social Icons -->
            <div id="social-icons">
                <a href="https://github.com/KRBYdesign">
                    <i class="fa-brands fa-github fa-2xl"></i>
                </a>
                <a href="/">
                    <i class="fa-brands fa-linkedin fa-2xl"></i>
                </a>
            </div>
        </div>

        <i class="fa-solid fa-ellipsis fa-2xl" id="menu-icon" data-active="false"></i>

        <div id="site-menu">
            <a href="/projects" class="menu-item">Projects</a>
            <a href="/racing" class="menu-item">Racing</a>
            <a href="/blog" class="menu-item">Blog</a>
        </div>
    </section>

    <section class="full-screen" id="intro-container">
        <div class="content" id="introduction">
            <div class="frame">
                <h1 class="title">Introduction</h1>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab excepturi nulla quidem repellendus reprehenderit. Aut deserunt excepturi illo nulla omnis perferendis quia quibusdam repellendus veritatis voluptates. Assumenda distinctio dolor ea earum eligendi esse et expedita, laudantium maxime natus necessitatibus, nemo non nulla numquam provident quae qui quos sapiente, suscipit veniam.</p>

                <div>

                </div>
            </div>

            <div id="projects">
                <p class="title">Projects</p>

                <div id="container">
                    @foreach($data['featured'] as $project)
                    <x-shared.index-project-card :data="$project" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/index.js') }}"></script>
</x-layout.mainLayout>
