$(document).ready(function () {
  $(".selected-text").click(function () {
    $(this).next(".select-items").toggleClass("hidden");
    $(this).toggleClass("the-personal-select__name--active");
  });

  $(".select-items div").click(function () {
    var selectedText = $(this).text();
    var selectedValue = $(this).data("value");

    $(this)
      .parent()
      .prev(".selected-text")
      .find("span")
      .text(selectedText);
    $(this)
      .parent()
      .prev(".selected-text")
      .find("input")
      .val(selectedValue);

    $(".select-items div").removeClass(
      "the-personal-select__item--selected"
    );

    $(this).addClass("the-personal-select__item--selected");

    $(".select-items").addClass("hidden");
    $(".selected-text").removeClass("the-personal-select__name--active");
  });

  $(document).click(function (e) {
    if (!$(e.target).closest(".custom-select").length) {
      $(".select-items").addClass("hidden");
    }
  });
});
