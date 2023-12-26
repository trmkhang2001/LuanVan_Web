// Trigger

$(function () {
  var $range = $(".js-range-slider"),
    $inputFrom = $(".js-input-from"),
    $inputTo = $(".js-input-to"),
    instance,
    min = 5000000,
    max = 50000000,
    from = 0,
    to = 0;

  $range.ionRangeSlider({
    type: "double",
    min: min,
    max: max,
    from: 5000000,
    to: 50000000,
    postfix: 'VNĐ',
    onStart: updateInputs,
    onChange: updateInputs,
    step: 1000000,
    prettify_enabled: true,
    prettify_separator: ".",
    values_separator: " - ",
    force_edges: true,
  });

  instance = $range.data("ionRangeSlider");

  function updateInputs(data) {
    from = "$" + data.from;
    to = "$" + data.to;

    $inputFrom.prop("value", from);
    $inputTo.prop("value", to);

    $("#prange").val(data.from + "," + data.to);
    $("#prange").trigger('change');
  }

  $inputFrom.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < min) {
      val = min;
    } else if (val > to) {
      val = to;
    }

    instance.update({
      from: val,
    });
  });

  $inputTo.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < from) {
      val = from;
    } else if (val > max) {
      val = max;
    }

    instance.update({
      to: val,
    });
  });
});