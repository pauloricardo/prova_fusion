    <table id="dg" title="My Users" class="easyui-datagrid grid" 
        url="actions/motoristas/listar.php"
        toolbar="#toolbar"
        rownumbers="true" fitColumns="true" pagination="true" singleSelect="true">
    <thead>
        <tr>
            <th field="matricula" width="50">Matrícula</th>
            <th field="nome" width="50">Nome</th>
            <th field="telefone" width="50">Telefone</th>
            <th field="ativo" width="50">Ativo</th>
            <th field="data_admissao" width="50">Data de Admissão</th>
            <th field="tipo_contrato" width="50">Tipo Contrato</th>
        </tr>
    </thead>

</table>
<div id="toolbar">
    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="motorista.openDialogSave()">New User</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="motorista.openDialogEdit()">Edit User</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="motorista.destroy()">Remove User</a>
</div>
<?php include_once 'saveModal.php'; ?>