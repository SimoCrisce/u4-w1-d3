<?php include __DIR__ . "/includes/start.php"; ?>

<div class="row justify-content-center">
    <div class="col-6">
        <form action="index.php" method="post">
        <div class="row">
                <div class="col-6">
                    <label for="name" class="form-label">Nome</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="basic-addon3 basic-addon4">
                      </div>
                </div>
                <div class="col-6">
                    <label for="age" class="form-label">Età</label>
                      <div class="input-group">
                        <input type="number" class="form-control" id="age" aria-describedby="basic-addon3 basic-addon4">
                      </div>
                </div>
                <div class="col-12">
                    <label for="text" class="form-label">Testo</label>
                        <div class="input-group">
                        <input type="text" class="form-control" id="text" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <button class="btn btn-primary mt-3">Posta</button>
                </div>
            </div>
        </form>
    </div>    
</div>
<?php include __DIR__ . "/includes/end.php"; ?>