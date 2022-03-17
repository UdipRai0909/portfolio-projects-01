$(document).ready(function () {

 // This ensures that the code begins to run only once the page has fully loaded. This is the best practice in any case, not only when you encounter Bootbox issues.
 // bootbox.alert("Hello world!");

 // Solving $.fn.modal is not defined
 // var $ = jQuery = require("jquery");
 // require("bootstrap-sass");
 // var bootbox = require('bootbox');

 // Applying css on container of success page
 $("h1.text-green").parent().css({
  // margin: 0,
  padding: 0
 });
 $("h1.text-red").parent().css({
  // margin: 0,
  padding: 0
 });

 // Passing ID to delete in Bootstrap Modal
 // $('.attdDeleteBtn').click(function () {
 //  var Id = $(this).attr('data-Id');
 //  $('.attdDelSpan').html(Id);
 //  $.ajax({
 //   url: "SomePage.php?Id=" + Id, cache: false, success: function (result) {
 //    $(".modal-content").html(result);
 //   }
 //  });
 // });

 // Passing ID in Bootstrap Modal for attd_view.php
 $('#modalAttdProfileId').click(function () {
  var Id = $(this).attr('data-Id');
  $('#attdPfContact').html(": " + Id);
 });


 // $('.attdDelModal').click(function (e) {
 //  e.preventDefault();
 //  var attdDelId = $(this).attr('data-attd-id');
 //  var parent = $(this).parent("td").parent("tr");
 //  bootbox.dialog({
 //   message: "Are you sure you want to Delete ?",
 //   title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
 //   buttons: {
 //    success: {
 //     label: "No",
 //     className: "btn-success",
 //     callback: function () {
 //      $('.bootbox').modal('hide');
 //     }
 //    },
 //    danger: {
 //     label: "Delete!",
 //     className: "btn-danger",
 //     callback: function () {
 //      $.ajax({
 //       type: 'POST',
 //       url: 'attd_delete.php',
 //       data: 'attdDelId=' + attdDelId
 //      })
 //       .done(function (response) {
 //        bootbox.alert(response);
 //        parent.fadeOut('slow');
 //       })
 //       .fail(function () {
 //        bootbox.alert('Error....');
 //       })
 //     }
 //    }
 //   }
 //  });
 // });

});
