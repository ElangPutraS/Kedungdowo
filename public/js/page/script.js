$(document).ready(function () {
  $('#gallery_dropzone').fileuploader({
    extensions: ['jpg', 'jpeg', 'png'],
    fileMaxSize: 2,
    limit: 6,
    changeInput: ' ',
    theme: 'thumbnails',
    enableApi: true,
    addMore: true,
    thumbnails: {
      box: '<div class="fileuploader-items">' +
        '<ul class="fileuploader-items-list">' +
        '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' +
        '</ul>' +
        '</div>',
      item: '<li class="fileuploader-item">' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      item2: '<li class="fileuploader-item">' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i></i></a>' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      startImageRenderer: true,
      canvasImage: false,
      _selectors: {
        list: '.fileuploader-items-list',
        item: '.fileuploader-item',
        start: '.fileuploader-action-start',
        retry: '.fileuploader-action-retry',
        remove: '.fileuploader-action-remove'
      },
      onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
          api = $.fileuploader.getInstance(inputEl.get(0));

        plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();

        if(item.format == 'image') {
          item.html.find('.fileuploader-item-icon').hide();
        }
      }
    },
    dragDrop: {
      container: '.fileuploader-thumbnails-input'
    },
    afterRender: function(listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));

      plusInput.on('click', function() {
        api.open();
      });
    },
    onRemove: function(item, listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));

      if (api.getOptions().limit && api.getChoosedFiles().length - 1 < api.getOptions().limit)
        plusInput.show();
    },
  });

  $('#icon_image').fileuploader({
    extensions: ['jpg', 'jpeg', 'png'],
    fileMaxSize: 2,
    limit: 1,
    changeInput: ' ',
    theme: 'thumbnails',
    enableApi: true,
    addMore: true,
    thumbnails: {
      box: '<div class="fileuploader-items" style="background: white">' +
        '<ul class="fileuploader-items-list">' +
        '<li class="fileuploader-thumbnails-input thumbnails_add"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' +
        '</ul>' +
        '</div>',
      item: '<li class="fileuploader-item" style="background: white">' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      item2: '<li class="fileuploader-item">' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i></i></a>' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      startImageRenderer: true,
      canvasImage: false,
      _selectors: {
        list: '.fileuploader-items-list',
        item: '.fileuploader-item',
        start: '.fileuploader-action-start',
        retry: '.fileuploader-action-retry',
        remove: '.fileuploader-action-remove'
      },
      onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
          api = $.fileuploader.getInstance(inputEl.get(0));

        plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();

        if(item.format == 'image') {
          item.html.find('.fileuploader-item-icon').hide();
        }
      }
    },
    dragDrop: {
      container: '.fileuploader-thumbnails-input'
    },
    afterRender: function(listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));

      plusInput.on('click', function() {
        api.open();
      });
    },
    onRemove: function(item, listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));

      if (api.getOptions().limit && api.getChoosedFiles().length - 1 < api.getOptions().limit)
        plusInput.show();
    },
  });

  $('#cover_image').fileuploader({
    limit: 1,
    fileMaxSize: 2,
    extensions: ['jpg', 'jpeg', 'png'],
    changeInput: ' ',
    theme: 'thumbnails',
    enableApi: true,
    addMore: true,
    thumbnails: {
      box: '<div class="fileuploader-items">' +
        '<ul class="fileuploader-items-list">' +
        '<li class="fileuploader-thumbnails-input full-width thumbnails_add" style="height: 300px;" ><div class="fileuploader-thumbnails-input-inner" style="width: 98%;"><i>+</i></div></li>' +
        '</ul>' +
        '</div>',
      item: '<li class="fileuploader-item file-has-popup" style="height: 300px;width: -webkit-fill-available;width: -moz-available;" >' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      item2: '<li class="fileuploader-item file-has-popup" style="height: 300px;width: -webkit-fill-available;width: -moz-available;">' +
        '<div class="fileuploader-item-inner">' +
        '<div class="type-holder">${extension}</div>' +
        '<div class="actions-holder">' +
        '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i></i></a>' +
        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
        '</div>' +
        '<div class="thumbnail-holder">' +
        '${image}' +
        '<span class="fileuploader-action-popup"></span>' +
        '</div>' +
        '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
        '<div class="progress-holder">${progressBar}</div>' +
        '</div>' +
        '</li>',
      startImageRenderer: true,
      canvasImage: false,
      _selectors: {
        list: '.fileuploader-items-list',
        item: '.fileuploader-item',
        start: '.fileuploader-action-start',
        retry: '.fileuploader-action-retry',
        remove: '.fileuploader-action-remove'
      },
      onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
          api = $.fileuploader.getInstance(inputEl.get(0));

        plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();

        if(item.format == 'image') {
          item.html.find('.fileuploader-item-icon').hide();
        }
      },
      onItemRemove: function(html, listEl, parentEl, newInputEl, inputEl) {
        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
          api = $.fileuploader.getInstance(inputEl.get(0));

        html.children().animate({'opacity': 0}, 200, function() {
          setTimeout(function() {
            html.remove();

            if(api.getFiles().length - 1 < api.getOptions().limit) {
              plusInput.show();
            }
          }, 100);
        });

      },
      onEmpty: function(listEl, parentEl, newInputEl, inputEl) {
        alert('heloowww');
        $('.ui.form').preventDefault();
        return false;
      }
    },
    dragDrop: {
      container: '.fileuploader-thumbnails-input'
    },
    afterRender: function(listEl, parentEl, newInputEl, inputEl) {
      var plusInput = listEl.find('.fileuploader-thumbnails-input'),
        api = $.fileuploader.getInstance(inputEl.get(0));

      plusInput.on('click', function() {
        api.open();
      });
    }
  });

  $('#description').redactor({
    minHeight : '200px',
    plugins: ['limiter', 'counter', 'table', 'alignment', 'fontcolor'],
    limiter: 7000
  });

  $('#description_requirement').redactor({
    minHeight : '200px',
    plugins: ['limiter', 'counter'],
    limiter: 7000
  });

  $R('#short_desc', {
    minHeight: '100px',
    plugins: ['limiter', 'counter'],
    limiter: 400
  });

  $('#category_id').on('change', function () {
    var category = '';
    $('#loader-page').html('<div class="ui active inverted dimmer">\n' +
    '<div class="ui active loader" hidden></div>\n' +
    '</div>');
    $.get('/api/category?parent=' + $(this).val(), function (data) {
      var response = data.data;
      if (response != '') {
        category = (response.title).toLowerCase();
        cekForm(category);
      }
      $('#loader-page').html('');
    });
  });
});

$('.ui.form').submit(function (event) {
  if ($('#description').val() == '' && ! $('#description').prop('disabled')) {
    $('.error-description').show();
    $('html, body').animate({
      scrollTop: $(".field-description").offset().top
    }, 2000);

    return false;
  }

  return true;
});

function cekForm (category) {
  $('.error-gallery').hide();
  $('.error-description').hide();

  //Judul Label
  $('.field-title').addClass('required');
  $('#input_title').attr('required', true);
  if (category.includes('testimoni')) {
    $('.label-title').html('Nama Tokoh');
    $('#input_title').attr('required', false);
    $('.field-title').removeClass('required');
  } else {
    $('.label-title').html('Judul');
  }

  //URL Label
  if (category.includes('slideshow')) {
    $('.field-url *').attr('disabled', false);
    $('.field-url').show();
  } else {
    $('.field-url *').attr('disabled', true);
    $('.field-url').hide();
  }

  //Deskripsi Singkat Label
  if (category.includes('galeri') || category.includes('testimoni') || category.includes('slideshow')) {
    $('.field-short *').attr('disabled', true);
    $('.field-short').hide();
  } else {
      $('.field-short *').attr('disabled', false);
      $('.label-short').html('Deskripsi Singkat');
      $('.field-short').show();
  }

    //Deskripsi Label
    if (category.includes('galeri') || category.includes('slideshow')) {
        $('.field-description *').attr('disabled', true);
        $('.field-description').hide();
    } else {
        $('.field-description *').attr('disabled', false);
        $('.label-description').html('Deskripsi');
        $('.field-description').show();
    }

  //Upload File Label
  $('.upload-field *').attr('disabled', true);
  $('.upload-field').hide();
  $('.upload-field').removeClass('required');

  if (category.includes('galeri')) {
    $('.field-thumbnail *').attr('disabled', false);
    $('.upload-field').addClass('required');
    $('.field-thumbnail').show();
  } else if (category.includes('testimoni')) {
    $('.field-icon *').attr('disabled', false);
    $('.label-icon').html('Gambar');
    $('.field-icon').show();
  } else if (category.includes('slideshow')) {
    $('.field-cover *').attr('disabled', false);
    $('.label-cover').html('Slideshow');
    $('.upload-field').addClass('required');
    $('.field-cover').show();
  } else {
    $('.field-cover *').attr('disabled', false);
    $('.label-cover').html('Gambar Sampul');
    $('.field-cover').show();
  }
}
