<main>
  <section>
    <a href="index.php">
      <button class="btn btn-success" type="button">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3">Cadastrar Vaga</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="">Título</label>
      <br>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <br>
    <div class="form-group">
      <label for="">Descrição</label>
      <br>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <br>
    <div class="form-group">
      <label for="">Status</label>
      <br>
      <div>
        <div class="form-check form-check-inline">
          <label class="form-controll" for="">
            <input type="radio" name="active" value="s" checked> Ativo
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-controll" for="">
            <input type="radio" name="active" value="n"> Inativo
          </label>
        </div>
      </div>
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </form>
</main>
