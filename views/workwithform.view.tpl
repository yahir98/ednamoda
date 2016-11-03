<!-- en las vista pueden agregar comentarios y bloques de estilo -->
<style>
  td{
    padding-top:0.5em;
    padding-bottom: 0.5em;
  }
</style>
<h1>Tipo de Cuenta</h1>
<form action="index.php?page=workwithform&mode={{mode}}&tipCtaCod={{tipCtaCod}}" method="post">
  <table style="width:640px;margin:1em auto;">
    <tr>
      <td style="width:220px">
        <b>Código</b>
      </td>
      <td>
        <!-- Si es insertado se debe permitir ingresar el código -->
        {{if enabled}}
          <input type="text" name="tipCtaCod" value="{{tipCtaCod}}"
            placeholder="Un Número" />
        {{endif enabled}}
        <!-- Si no es insertado no se debe permitir ingresar el código-->
        {{ifnot enabled}}
          <b>{{tipCtaCod}}</b>
          <input type="hidden" name="tipCtaCod" value="{{tipCtaCod}}"/>
        {{endifnot enabled}}
      </td>
    </tr>
    <tr>
      <td>
        <b>Tipo de Cuenta</b>
      </td>
      <td>

        {{ifnot deleting}}
          <input type="text" name="tipCtaDsc" value="{{tipCtaDsc}}"
              placeholder="Tipo de Cuenta"/>
        {{endifnot deleting}}
        <!-- Cuando se va a borrar no se debe actualizar los datos -->
        {{if deleting}}
            <b>{{tipCtaDsc}}</b>
            <input type="hidden" name="tipCtaDsc" value="{{tipCtaDsc}}"/>
        {{endif deleting}}
      </td>
    </tr>
    <tr>
      <td>
        <b>Operador</b>
      </td>
      <td>

        {{ifnot deleting}}
          <select name="tipCtaOpr">
              {{foreach cmbOperadores}}
                <option value="{{operador}}" {{seleccionado}}>{{nombre}}</option>
              {{endfor cmbOperadores}}
          </select>
        {{endifnot deleting}}

        {{if deleting}}
           <b>{{tipCtaOprDsc}}</b>
           <input type="hidden" name="tipCtaOpr" value="{{tipCtaOpr}}"/>
        {{endif deleting}}
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:right">
        {{if deleting}}
            <input type="submit" class="btn btn-primary" value="Eliminar" name="btnEliminar" />
        {{endif deleting}}
        {{ifnot deleting}}
            <input type="submit"  class="btn btn-primary" value="Guardar" name="btnGuardar" />
        {{endifnot deleting}}
        &nbsp;
        <a href="index.php?page=workwith" class="btn btn-warning" role="button">Cancelar</a>
      </td>
    </tr>
  </table>
</form>
