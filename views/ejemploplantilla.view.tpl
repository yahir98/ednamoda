<h1>Hola Mundo</h1>

<b>Nombre: </b> {{nombre}} <br/>
<b>Apellido: </b> {{apellido}} <br />

<hr/>

{{foreach generos}}
    {{codigo}} --- {{Descripcion}} <br />
{{endfor generos}}

{{if showErrores}}
  <ul>
  {{foreach errores}}
      <li>
        {{error}}
      </li>
  {{endfor errores}}
  </ul>
{{endif showErrores}}
