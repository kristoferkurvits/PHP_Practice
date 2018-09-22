<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="trainings">Koolitused</a>
            <a class="nav-link" href="register" align="right">Registreeru</a>
            <a class="nav-link" href="login" align="right">Logi sisse</a>
            @auth
            <a class="nav-link" >{{ "Tere tulemast, " . $name . "!"}}</a>
            @endauth



        </nav>

    </div>


</div>
