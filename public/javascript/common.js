var common = function(){
    return {
        'formatPhone' : formatPhone
    }
    function formatPhone(telefone){
        return telefone.replace('-','');
    }

}();