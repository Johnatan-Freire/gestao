import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Inputmask from 'inputmask';

document.addEventListener('DOMContentLoaded', function(){
    var telMask = new Inputmask("(99) 9 9999-9999");
    var cnpjMask = new Inputmask("99.999.999/9999-99");
    
    telMask.mask(document.querySelector('.telMask'));
    cnpjMask.mask(document.querySelector('.cnpjMask'));
});