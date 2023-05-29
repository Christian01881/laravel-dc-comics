<header>
    <nav>
        <div class="container d-flex justify-content-between align-items-center">
             <div>
            <img class="logo" src="/img/dc-logo.png" alt="">
            </div>
            <div>
                <ul class="d-flex">
                    <li class="p-15">Characters</li>
                    <li class="p-15">Comics</li>
                    <li class="p-15">Movies</li>
                    <li class="p-15">TV</li>
                    <li class="p-15">Games</li>
                    <li class="p-15">Collectibles</li>
                    <li class="p-15">Videos</li>
                    <li class="p-15">Fans</li>
                    <li class="p-15">News</li>
                    <li class="p-15">Shop</li>
                    <li class="p-15"><a class="link" href="{{ route('comics.create') }}">Create Comic</a></li>
                </ul>
            </div>
        <div>
            <input type="text" class="" placeholder="Search">
        </div>
        </div>
    </nav>
</header>


<style lang="scss" scoped>

    .logo{
        width: 80px;
        height: 80px;
    }

    header li{
        list-style: none;
        border-bottom: 3px solid transparent;
        line-height: 70px
    }

    header li:hover{
            cursor: pointer;
            border-bottom: 3px solid #0282f9;
        }

    .p-15{
        padding-right: 15px
    }

    input{
        border: none;
        border-bottom: 3px solid #0282f9;
        text-align: end;
    }

    nav{
        height: 110px;
        position: fixed;
        top: 0;
        background-color: white;
        width: 100%;
        z-index: 1000;
    }

    header{
        height: 500px;
        background-image: url(/img/jumbotron.jpg);
        background-size: cover;
        z-index: 1000;
    }


</style>

