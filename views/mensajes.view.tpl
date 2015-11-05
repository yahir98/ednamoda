<h1>Mensajes Registrados</h1>
<div style="text-align:right">
    <a href="index.php?page=mensajeform&formmode=INS">
        Insertar Nuevo
    </a>
</div>
<b>Mostrando {{mensajescount}} Registros</b>
<table>
    <tr>
        <th>
            Código
        </th>
        <th>
            Mensaje
        </th>
        <th>
            Acciones
        </th>
    </tr>

{{foreach mensajes}}
    <tr>
        <td>
            {{msgid}}
        </td>
        <td>
            {{msgdsc}}
        </td>
        <td>
            <a href="index.php?page=mensajeform&formmode=SEL&msgid={{msgid}}">Ver</a>
        </td>
    </tr>

{{endfor mensajes}}

</table>
