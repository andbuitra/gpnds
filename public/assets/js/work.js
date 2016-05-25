
$(function() {

  $('#containerpop').on('dragover', function(e) {
    e.preventDefault();
    $(this).addClass('file-over');
    //$('svg path').show();
  });

  $('#containerpop').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('file-over');
  });

  $('#containerpop').on('drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('file-over').stop(true, true).css({
      background:'#fff'
    });
    $('.progress').toggleClass('complete');
    $('#image-holder-b').addClass('move');
  });

  var dropzone = document.getElementById("container");
  
  FileReaderJS.setupDrop(dropzone, {
    readAsDefault: "DataURL",
    on: {
      load: function(e, file) {
        var img = document.getElementById("image-holder-b");
        img.onload = function() {
          document.getElementById("image-holder-b").appendChild(img);
        };
        img.src = e.target.result;
      }
    }
  });

});