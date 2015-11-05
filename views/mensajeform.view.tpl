<form action="index.php?page=mensajeform" method="post">
    <input type="hidden" name="msgid" value="{{msgid}}"/>
    <input type="hidden" name="formMode" value="{{formMode}}"/>
    <div>
        <label>Mensaje</label>
        <br/>
        <textarea name="msgdsc">{{msgdsc}}</textarea>
    </div>
    <div>
        <button onclick="btnSubmit">Guardar</button>
    </div>
</form>
<script>
    function btnSubmit(e){
        //validacion a nivel cliente
        document.forms[0].submit();
    }
</script>
