<h1>Tipo de Cuentas</h1>
<hr />
<a class="btn btn-primary pull-right" role="button"
  href="index.php?page=workwithform&mode=INS">
      <span class="glyphicon glyphicon-plus"></span>
       &nbsp;Agregar Nuevo
</a>
<form method="post" action="index.php?page=workwith" >
  <table cellspacing:3px;>
    <tr>
      <td style="width:220px;">
        <b>Código</b>
      </td>
      <td>
        <input type="text" name="tipCtaCod" value="{{tipCtaCod}}"
            placeholder="Un Número"/>
      </td>
    </tr>
    <tr>
      <td>
        <b>Tipo de Cuenta</b>
      </td>
      <td>
        <input type="text" name="tipCtaDsc" value="{{tipCtaDsc}}"
            placeholder="Tipo de Cuenta"/>
      </td>
    </tr>
    <tr>
      <td>
        <b>Operador</b>
      </td>
      <td>
        <select name="tipCtaOpr">
            {{foreach cmbOperadores}}
              <option value="{{operador}}" {{seleccionado}}>{{nombre}}</option>
            {{endfor cmbOperadores}}
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:right">
        <input type="submit" value="Filtrar" name="btnFiltrar"  class="btn btn-default"/>
      </td>
    </tr>
  </table>
</form>
<hr />
<table style="width:80%; margin:1em auto;">
  <tr>
    <th>
      Código
    </th>
    <th>
      Descripción
    </th>
    <th>
      Operador
    </th>
    <th>
      &nbsp;
    </th>
  </tr>
  {{foreach tipoCuentas}}
      <tr>
        <td>
          {{tipCtaCod}}
        </td>
        <td>
          {{tipCtaDsc}}
        </td>
        <td>
          {{tipCtaOpr}}
        </td>
        <td>
          <a class="btn" title="Edita tipo de Cuenta" role="button"
            href="index.php?page=workwithform&mode=UPD&tipCtaCod={{tipCtaCod}}"
          >
            <span class="glyphicon glyphicon-edit"></span>
          </a>
          <a class="btn" title="Eliminar tipo de Cuenta" role="button"
            href="index.php?page=workwithform&mode=DLT&tipCtaCod={{tipCtaCod}}"
          >
            <span class="glyphicon glyphicon-trash"></span>
          </a>
        </td>
      </tr>
  {{endfor tipoCuentas}}

</table>

<br />
<hr />
<h2>Estructura de Tabla utilizada</h2>
<pre>
  CREATE TABLE `tipoCuentas` (
  `tipCtaCod` int(11) NOT NULL,
  `tipCtaDsc` varchar(45) NOT NULL,
  `tipCtaOpr` char(1) NOT NULL,
    PRIMARY KEY (`tipCtaCod`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
</pre>
