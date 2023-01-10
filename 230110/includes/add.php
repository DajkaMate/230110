
    <div class="container py-3 ">
        <h1 class="text-center display-5">Pizza hozzáadása</h1>
        <div class="card m-auto rounded-4" style="width: 25rem;">
            <div class="card-body rounded-4 bg-dark">
                <h5 class="card-title text-white text-center" >Hozzáadás</h5>
                <form action="./?p=added" method="post">
                    <label for="nev" class="mt-3 fs-5 text-white">Pizza neve:</label><br>
                    <input type="text" name="nev" class="form-control mt-1" placeholder="Add meg a pizza nevét">
                    <label for="feltet" class="mt-3 fs-5 text-white">Feltétek:</label><br>
                    <input type="text" name="feltet" class="form-control mt-1 " placeholder="Add meg a pizza feltéteit">
                    <label for="ar" class="mt-3 fs-5 text-white">Ár:</label><br>
                    <input type="number" name="ar" class="form-control mt-1" placeholder="Add meg a pizza árát">
                    <div class="form-check mt-3 fs-5 text-white">
                        <label class="form-check-label" for="flexCheckDefault">Akciós</label>
                        <input class="form-check-input" type="checkbox" name="akcios" id="flexCheckDefault">        
                    </div>
                    <button type="submit" name="add" class="d-block mx-auto btn btn-warning mt-3">Hozzáadás</button>
                </form>
        </div>
</div>
    </div>