jQuery(document).ready(function($) {
  // Upload gallery images
  $('#upload_gallery_images_button').click(function(e) {
      e.preventDefault();

      var image = wp.media({
          title: 'Upload Gallery Images',
          multiple: true
      }).open().on('select', function(e) {
          var uploadedImages = image.state().get('selection');

          var imageArray = [];

          uploadedImages.each(function(image) {
              imageArray.push(image.toJSON().url);
          });

          $('.gallery_images').html('');

          $.each(imageArray, function(index, value) {
              $('.gallery_images').append('<li><img src="' + value + '"></li>');
          });

          $('.gallery_images').siblings('input[type="hidden"]').val(imageArray);
      });
  });
});
