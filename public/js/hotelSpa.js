/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
  $('input[name="datetimes"]').daterangepicker({
     timePicker: true,
     timePicker24Hour: true,
     timePickerIncrement: 30,
     showCustomRangeLabel: false,
     alwaysShowCalendars: true,
     startDate: "05/09/2018",
     endDate: "05/15/2018",
     cancelClass: "btn-warning"
}, function(start, end, label) {
    console.log(start,end,label);
}); 

});

