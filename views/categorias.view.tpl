<h2>Trabajar con Categorías</h2>
<a href="index.php?page=category&acc=ins">Nuevo</a>
<div>
  <div class="rowhd sdhide">
    <div class="col1">Código</div>
    <div class="col3">Categoría</div>
    <div class="col1">Estado</div>
    <div class="col1">Acciones</div>
  </div>
  {{foreach categorias}}
  <div class="row">
    <div class="col1">{{ctgid}}</div>
    <div class="col3">{{ctgdsc}}</div>
    <div class="col1">{{ctgest}}</div>
    <div class="col1">
      <a href="index.php?page=category&acc=upd&ctgid={{ctgid}}">Update</a> |
      <a href="index.php?page=category&acc=dlt&ctgid={{ctgid}}">Delete</a>
    </div>
  </div>
  {{endfor categorias}}
</div>
