/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('#dropdownSite').hover(function () {
        $('#dropdownSite').addClass('dropdown open');
    }, function () {
        $('#dropdownSite').removeClass();
        $('#dropdownSite').addClass('dropdown');
    });
});