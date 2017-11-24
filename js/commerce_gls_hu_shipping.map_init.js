function glsPSMap_OnSelected_Handler(data) {
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][shop_id]"]').val(data.pclshopid);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][store_gmap_address]"]').val(data.zipcode + ',' + data.zipcode + ' ' + data.city + ',' + data.ctrcode);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][pclshopid]"]').val(data.pclshopid);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][name]"]').val(data.name);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][ctrcode]"]').val(data.ctrcode);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][zipcode]"]').val(data.zipcode);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][city]"]').val(data.city);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][address]"]').val(data.address);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][contact]"]').val(data.contact);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][phone]"]').val(data.phone);
  // $('input:hidden[name="commerce_shipping[commerce_gls_hu_shipping][gls_data][email]"]').val(data.email);

  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][shop_id]"]').val(data.pclshopid);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][store_gmap_address]"]').val(data.zipcode + ',' + data.zipcode + ' ' + data.city + ',' + data.ctrcode);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][pclshopid]"]').val(data.pclshopid);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][name]"]').val(data.name);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][ctrcode]"]').val(data.ctrcode);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][zipcode]"]').val(data.zipcode);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][city]"]').val(data.city);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][address]"]').val(data.address);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][contact]"]').val(data.contact);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][phone]"]').val(data.phone);
  $('input:hidden[name="shipping_information[shipments][0][shipping_method_wrapper][commerce_gls_hu_shipping_wrapper][gls_data][email]"]').val(data.email);
}

(function ($) {
  Drupal.behaviors.commerce_gls = {
    attach: function (context, settings) {
      //var attr = $(context).attr('id');
      //if ($(context).attr('id') == 'checkout-pane-gls-hu-wrapper') {
      var glsMap;
      function initGLSPSMap() {
        var address = '1011,Budapest,HU';
        if (settings.address != null) {
          address = settings.address;
        }
        glsMap = new GLSPSMap();
        glsMap.init('HU', 'big-canvas', address, 0);
        google.maps.event.trigger(glsMap, 'resize');
      }

      function glsPSMap_OnSelected_Handler(data) {
        $('#ajaxresult').html(data.pclshopid);
      }

      function testclick(obj) {
        glsMap.initAddress($('#testinput').val());
      }

      initGLSPSMap();

      $.fn.initGLSPSMap = function (data) {
        initGLSPSMap();
      };

      $('#checkout-pane-gls-hu-wrapper').once('initMap', function () {
        initGLSPSMap();
      });

      //}

    }
  }

})(jQuery);
