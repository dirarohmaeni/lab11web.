const Home = {
    template: `
    <div class="card shadow">

        <div class="card-body text-center p-5">

            <h2 class="mb-3">
                Selamat Datang
            </h2>

            <p class="lead">
                Selamat datang di aplikasi Portal Admin Artikel berbasis
                <strong>VueJS + Vue Router + CodeIgniter 4 REST API</strong>.
            </p>

            <hr>

            <p>
                Aplikasi ini merupakan hasil Praktikum 12
                Pemrograman Web 2.
            </p>

            <div class="mt-4">

                <router-link
                    to="/artikel"
                    class="btn btn-primary">

                    Kelola Artikel

                </router-link>

            </div>

        </div>

    </div>
    `
}