<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
        closed="true" buttons="#dlg-buttons">
    <form id="fm" method="post" novalidate>
        <div class="fitem">
            <label>Nome:</label>
            <input name="nome" class="easyui-textbox" required="true">
        </div>
        <div class="fitem">
            <label>Telefone:</label>
            <input name="telefone" id="telefone"  minlength="9" maxlength="9"  class="easyui-validType" data-options="validType:'length[9]'" required="true">
        </div>
        <div class="fitem">
            <label>Ativo:</label>
            <select name="ativo" class="easui-combobox combobox" required="true">
                <option value="1">SIM</option>
                <option value="0">NAO</option>
            </select>
        </div>
        <div class="fitem">
            <label>Data de Admissao:</label>
            <input name="data_admissao" class="easyui-datebox" required="true">
        </div>
        <div class="fitem">
            <label>Tipo Contrato:</label>
            <select name="tipo_contrato" class="easui-combobox combobox">
                <option value="E">Empregado</option>
                <option value="T">Terceirizado</option>
            </select>
        </div>
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="motorista.save()" style="width:90px">Save</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
</div>
