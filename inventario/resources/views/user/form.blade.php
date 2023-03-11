<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="imagen">IMAGEN</label>
    <input type="file" class="form-control-file" id="imagen" name="imagen">
  </div>
  <div class="form-group">
    <label for="nombre">NOMBRE</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="detalles">DETALLES</label>
    <textarea class="form-control" id="detalles" name="detalles"></textarea>
  </div>
  <div class="form-group">
    <label for="precio">PRECIO</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>
  <div class="form-group">
    <label for="cantidad">CANTIDAD</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="form-group">
    <label for="acciones">ACCIONES</label>
    <select class="form-control" id="acciones" name="acciones">
      <option value="editar">Editar</option>
      <option value="borrar">Borrar</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>