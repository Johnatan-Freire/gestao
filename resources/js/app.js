import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Inputmask from 'inputmask';

document.addEventListener('DOMContentLoaded', function () {
    var telElement = document.querySelector('.telMask');
    var cnpjElement = document.querySelector('.cnpjMask');
    var valueElement = document.querySelector('.valueMask');

    if (telElement) {
        var telMask = new Inputmask("(99) 9 9999-9999");
        telMask.mask(telElement);
    }

    if (cnpjElement) {
        var cnpjMask = new Inputmask("99.999.999/9999-99");
        cnpjMask.mask(cnpjElement);
    }

    if (valueElement) {
        var valueMask = new Inputmask({
            alias: "numeric",
            groupSeparator: ".",
            radixPoint: ",",
            prefix: "R$ ",
            autoGroup: true,
            digits: 2,
            digitsOptional: false,
            placeholder: "0",
            clearMaskOnLostFocus: false,
            removeMaskOnSubmit: true
        });
        valueMask.mask(valueElement);
    }
});
