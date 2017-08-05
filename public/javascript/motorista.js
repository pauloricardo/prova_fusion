var motorista = function () {
    return {
        'openDialogSave': openDialogSave,
        'openDialogEdit': openDialogEdit,
        'save': save,
        'destroy': destroy
    };
    var _url;
    function openDialogSave() {
        $('#dlg').dialog('open').dialog('setTitle', 'Cadastrar/Editar Usuário');
        $('#fm').form('clear');
        _url = 'actions/motoristas/save.php';
    }
    function openDialogEdit() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg').dialog('open').dialog('setTitle', 'Edit User');
            $('#fm').form('load', row);
            $('input[name=telefone]').val(common.formatPhone($('input[name=telefone]').val()));
            _url = 'actions/motoristas/update.php?id=' + parseInt(row.matricula);
        }
    }
    function save() {
        $('#fm').form('submit', {
            url: _url,
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                if (result == 1) {
                    $.messager.show({
                        title: 'Success',
                        msg: 'Motorista cadastrado com sucesso!'
                    });
                     $('#dlg').dialog('close');        // close the dialog
                    $('#dg').datagrid('reload');    // reload the user data
                } else {
                    $.messager.show({
                        title: 'Error',
                        msg: 'Falha ao cadastrar o motorista!'
                    });
                }
            }
        });
    }
    function destroy() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $.messager.confirm('Confirm', 'Tem certeza que deseja deletar?', function (call) {
                if (call) {
                    $.post('actions/motoristas/delete.php', { id: row.matricula }, function (result) {
                        if (result == 1) {
                            $.messager.show({    // show error message
                                title: 'Success',
                                msg: 'Motorista deletado com sucesso!'
                            });
                            $('#dg').datagrid('reload');    // reload the user data
                            
                        } else {
                            $.messager.show({    // show error message
                                title: 'Error',
                                msg: 'Falha ao deletar o motorista'
                            });
                        }
                    });
                }
            });
        }
    }
}();